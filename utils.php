<?php

/*
 * This file is part of http://github.com/adamdburton/pointshop-documentation
 *
 * (c) Adam Burton <adam@equinox-studios.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if(!defined('PS_DOCS'))
{
	die();
}

function buildTree($current_uri = '/')
{
	global $config;
	
	$dir = $config['docs_path'];
	
	$tree = array(
		'/' => array(
			'file' => $dir . 'index.md',
			'uri' => '/',
			'full_uri' => '/',
			'current' => $current_uri == '/',
			'title' => $config['index_title'],
			'template' => 'index.twig',
			'children' => array()
		)
	);
	
	$tree += directoryToTree($dir, '/', $current_uri);
	
	return $tree;
}

function directoryToTree($dir, $prepend = '/', $current_uri = '/')
{
	$dir_iterator = new DirectoryIterator($dir);
	$iterator = new IteratorIterator($dir_iterator);
	
	$tree = array();
	
	$files = array();
	$directories = array();
	
	foreach($iterator as $file)
	{
		if($file->getFilename() == '.' || $file->getFilename() == '..' || $file->getFilename() == 'index.md')
		{
			continue;
		}
		
		$filename = str_replace($dir, '', (string) $file);
		
		if($file->isDir())
		{
			$directories[$filename] = (string) $file;
		}
		else
		{
			$files[$filename] = (string) $file;
		}
	}
	
	ksort($files);
	ksort($directories);
	
	foreach($files as $filename => $file)
	{
		$uri = $prepend . filenameToURI($filename);
		
		$children = isset($tree[$uri]['children']) ? $tree[$uri]['children'] : array();
		
		$tree[$uri] = array(
			'file' => $dir . '/' . $file,
			'uri' => filenameToURI($filename),
			'full_uri' => $uri,
			'current' => $uri == $current_uri,
			'parent_current' => substr($current_uri, 0, strlen($uri)) == $uri,
			'title' => filenameToTitle($filename),
			'template' => 'page.twig',
			'children' => $children
		);
	}
	
	foreach($directories as $directoryname => $directory)
	{
		$uri = $prepend . filenameToURI($directory);
		
		if(!isset($tree[$uri]))
		{
			$tree[$uri] = array(
				'uri' => filenameToURI($directory),
				'full_uri' => $uri,
				'current' => $uri == $current_uri,
				'parent_current' => substr($current_uri, 0, strlen($uri)) == $uri,
				'title' => filenameToTitle($directory)
			);
		}
		
		$tree[$uri]['children'] = directoryToTree($dir . '/' . $directoryname, $uri . '/', $current_uri);
	}
	
	return $tree;
}

function filenameToTitle($filename)
{
	$parts = explode('/', $filename);
	$filename = end($parts);
	
	$filename = preg_replace('/(\d+_)?/', '', $filename);
	$filename = preg_replace('/(.md)?/', '', $filename);
	$filename = preg_replace('/_/', ' ', $filename);
	
	return $filename;
}

function filenameToURI($filename)
{
	$title = filenameToTitle($filename);
	
	$title = html_entity_decode($title, ENT_QUOTES);
	$title = iconv('UTF-8', 'ASCII//TRANSLIT', $title);
	$title = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $title);
	$title = strtolower(trim($title, '-'));
	$title = preg_replace("/[\/_|+ -]+/", '-', $title);
	$title = trim($title, '-');
	$title = trim($title);
	
	return $title;
}

function findInTree($uri, $tree)
{
	if(isset($tree[$uri]))
	{
		return $tree[$uri];
	}
	
	foreach($tree as $tree_page)
	{
		$page = findInTree($uri, $tree_page['children']);
		
		if($page)
		{
			return $page;
		}
	}
	
	return null;
}

function preparePage($page = null)
{
	if($page !== null)
	{
		$page['content'] = file_get_contents($page['file']);
	}
	else
	{
		header('HTTP/1.0 404 Not Found');
		
		$page = array(
			'title' => '404: Not Found',
			'content' => 'Sorry, the page you requested was not found. Use the navigation on left.',
			'template' => 'page.twig'
		);
	}
	
	return $page;
}

function renderPage($page, $uri)
{
	global $config, $tree;
	
	$loader = new Twig_Loader_Filesystem('./template/');
	$twig = new Twig_Environment($loader, array(
		'debug' => false,
		'autoescape' => false
	));
	
	$engine = new Parsedown();
	$page['content'] = $engine->text($page['content']);
	
	echo $twig->render($page['template'], array(
		'page' => $page,
		'toc' => pageTOC($page['content']),
		'config' => $config,
		'tree' => $tree,
		'uri' => $uri
	));
}

function pageTOC($html)
{
	$links = array();
	
	$count = preg_match_all('/<h([2-4])><a name="(.*?)"><\/a>(.*?)<\/h[2-4]>/is', $html, $matches);
	
	for($i = 0; $i < $count; $i++)
	{
		$links[$matches[2][$i]] = array(
			'uri' => $matches[2][$i],
			'size' => $matches[1][$i],
			'title' => $matches[3][$i]
		);
	}
	
	return $links;
}

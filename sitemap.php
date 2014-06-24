<?php

/*
 * This file is part of http://github.com/adamdburton/pointshop-documentation
 *
 * (c) Adam Burton <adam@equinox-studios.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if(!file_exists('./vendor/autoload.php'))
{
	die('Run composer install!');
}

DEFINE('PS_DOCS', true);

require './vendor/autoload.php';
require './utils.php';

date_default_timezone_set('Europe/London');

$config = json_decode(file_get_contents('config.json'), true);

$tree = buildTree();

function treeToXML($tree)
{
	global $config;
	
	$xml = '';
	
	foreach($tree as $tree_page)
	{
		$xml .= '<url>' . "\n";
			$xml .= '<loc>http://' . $config['domain'] . $tree_page['full_uri'] . '</loc>' . "\n";
			$xml .= '<lastmod>' . date(DATE_W3C, filemtime($tree_page['file'])) . '</lastmod>' . "\n";
		$xml .= '</url>' . "\n";
		
		if(count($tree_page['children']))
		{
			$xml .= treeToXML($tree_page['children'], $xml);
		}
	}
	
	return $xml;
}

$sitemap = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
$sitemap .= treeToXML($tree) . "\n";
$sitemap .= '</urlset>';

echo $sitemap;
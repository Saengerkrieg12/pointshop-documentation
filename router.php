<?php

/*
 * This file is part of http://github.com/adamdburton/pointshop-documentation
 *
 * (c) Adam Burton <adam@equinox-studios.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Simple router for built in php web server
// Usage: php -S localhost:8000 router.php

if(PHP_SAPI !== 'cli-server')
{
	die('This file must be run from the command line: php -S localhost:8000 router.php'); // Go away
}

$uri = $_SERVER["REQUEST_URI"];

if($uri != '/' && file_exists('.' . $uri))
{
  return false; // File exists, don't serve through php
}
else 
{
	$_SERVER['PHP_SELF'] = '/index.php';
	
	include 'index.php';
}
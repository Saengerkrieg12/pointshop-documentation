<?php

/*
 * Simple router for built in php web server
 * Usage: php -S localhost:8000 router.php
 */

if(PHP_SAPI !== 'cli-server')
{
	die('here'); // Go away
}

$uri = $_SERVER["REQUEST_URI"];

if($uri != '/' && file_exists('.' . $uri))
{
  return false; // File exists, don't serve anything through php
}
else 
{
	$_SERVER['PHP_SELF'] = '/index.php';
	
	include 'index.php';
}
<?php
/**
 * This file is the entry point into our app, everything is routed through here via .htaccess
 * PHP Version 5
 * 
 * @package WhoseCode
 * @copyright PHPDetroit 2012
 * @license MIT (license.txt)
 */

// Define environment 
if ( $_SERVER['SERVER_NAME'] == 'localhost' )
{
  define("ENVIRONMENT", "development");
}
else
{
  define("ENVIRONMENT", "production");
}



// Get library
include('library/functions.core.php');

// Get task
$Path = GetPath();

switch ( $Path ) {
	case 'index':
		$include = 'templates/index.html.php';
		break;
	default:
		header('HTTP/1.0 404 Not Found');
		exit('Uh, oh! Page not found.');
}

include('templates/header.html.php');
include($include);
include('templates/footer.html.php');

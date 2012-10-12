<?php
/**
 * This file is the entry point into our app, everything is routed through here via .htaccess
 * PHP Version 5
 * 
 * @package WhoseCode
 * @copyright PHPDetroit 2012
 * @license MIT (license.txt)
 */
 
if ( $_SERVER['SERVER_NAME'], 'localhost' )
{
  define("ENVIRONMENT", "development");
}
else
{
  define("ENVIRONMENT", "production");
}
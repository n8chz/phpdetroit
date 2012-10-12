<?php if (!defined('ENVIRONMENT')) exit();
/**
 * Functions library for the core app.
 * 
 * @package WhoseCode
 * @copyright PHPDetroit 2012
 * @license MIT (license.txt)
 */

/**
 * Determine application path requested.
 *
 * @return string Path requested.
 */
function GetPath() {
  $Path = 'index';
  if (is_array($_GET)) {
     if (!empty($_GET['p'])) {
       $Path = $_GET['p'];
       unset($_GET['p']);
     } 
  }
  
  return $Path;
}

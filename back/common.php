<?php
if(!isset($_SESSION)) 
{
	session_start();
}
if(isSet($_GET['lang']))
{
	$lang = $_GET['lang'];
	$_SESSION['lang'] = $lang;
	setcookie('lang', $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
	$lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
	$lang = $_COOKIE['lang'];
}
else
{
	$lang = 'es';
}
switch ($lang) {
  case 'en':
  $lang_file = 'en.inc.php';
  break;
  case 'es':
  $lang_file = 'es.inc.php';
  break;
  default:
  $lang_file = 'es.inc.php';
}
include 'lenguaje/'.$lang_file;

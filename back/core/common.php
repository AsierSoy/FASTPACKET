<?php 
if(isSet($_GET['lang']))
{
	$lenguaje = $_GET['lang'];
	// register the session and set the cookie
	$_SESSION['lang'] = $lenguaje;
	setcookie('lang', $lenguaje, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
	$lenguaje = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
	$lenguaje = $_COOKIE['lang'];
}
else
{
	$lenguaje = 'es';
}

if(!isSet($_SESSION['lang']))
{
	$_SESSION['lang'] = $lenguaje;
}

switch ($lenguaje) {
  case 'en':
	$lang_file = 'en.inc.php';
	break;
 
  case 'Es':
  case 'ES':
  case 'es':
	$lang_file = 'es.inc.php';
	break;
 
  default:
	$lang_file = 'es.inc.php';
 
}
 
include 'lenguaje/'.$lang_file;

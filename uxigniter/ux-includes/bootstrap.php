<?php
/**
 * @UXigniter 
 * @https://github.com/uxcriativo/UXigniter
 */

if (strpos($_SERVER['REQUEST_URI'], $UXigniterPrivateURL) !== false) {
	
	define('MODULE',$UXigniterPrivateURL.'/');
	define('MODULEPREFIX','ADMIN_');
}
else{
	define('MODULE','');
	define('MODULEPREFIX','UX_');
}

require_once('Codeigniter/index.php');
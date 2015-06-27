<?php 

DEFINE('ROOT' ,dirname(__FILE__) );									// Root directory of site
DEFINE('LIB_PATH', ROOT . '/vendor/CommonAccord/ccmac/library');								// Create global variable to our library	
ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . LIB_PATH . DIRECTORY_SEPARATOR);	// Include it in PHP include/require search

DEFINE('ASSETS_PATH', 'vendor/CommonAccord/ccmac/assets');									// Create global variable to our css and js assets	

include("ccmac_helpers.php"); 



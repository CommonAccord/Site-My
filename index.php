<?php 

DEFINE('ROOT' ,dirname(__FILE__) ); // Root directory of site

DEFINE('LIB_PATH', ROOT . '/vendor/CommonAccord/cmacc/library'); // Create global variable to our library	
ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . LIB_PATH . DIRECTORY_SEPARATOR);	// Include it in PHP include/require search

DEFINE('ASSETS_PATH', 'assets');  // Create global variable to our css and js assets

DEFINE('URLFORDOCSINREPO', 'https://github.com/CommonAccord/Site-My/blob/master/Doc/');	// Use for customizing the link to a repo

DEFINE('TEXTEDITWINDOWSIZE', 'cols=140 rows=35'); //Sets the size of the text edit window in both edit.php and openedit.php

include("cmacc_helpers.php");



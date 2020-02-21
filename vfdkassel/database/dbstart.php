<?php
	
//echo "hallo";
require 'dbsql2.php';
use Dbsql2\Dbsql2;
 $database = new dbsql2([
	// required
	'database_type' => 'mysql',
	'database_name' => DATABASE,
	'server' => 'localhost',
	'username' => 'web14',
	'password' => 'web14vfd07',
	'charset' => 'utf8',
 
]);
    
?>
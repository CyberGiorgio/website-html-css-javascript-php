<?php   
	$dbhost = "sql105.epizy.com"; //server name localhost or 127.0.0.1
	$dbuser = "epiz_28262648";      //User name default root 
	$dbpass = "KqXe2ckzLpd";  //Password reset at start of uniserver yours is "root"
	$dbname = "epiz_28262648_shopping";      //Database name

	$db = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname); 		//database connection
	if(!$db) {die("Error connecting to Database");}
?>
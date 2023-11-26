<?php
date_default_timezone_set('Etc/GMT-1');
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "FHH");
define("DB_DATE", date('Y-m-d'));
define("DOMAIN", "");
define("ORG_ID", "1");
define("default_image", "images/logo.jpg");
define("url_p", "?p=");

	$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

	if(!$conn){
	  die("Database connection failed");
	}
	
	
 ?>
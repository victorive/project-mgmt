<?php
	$cleardb_url = parse_url("DATABASE_URL");
	$cleardb_host = $cleardb_url["host"];
	$cleardb_username = $cleardb_url["user"];
	$cleardb_password = $cleardb_url["pass"];
	$cleardb_database = substr($cleardb_url["path"],1);
	
	$dsn = "mysql:host=" . "$cleardb_host" . ";dbname=" . $cleardb_database;
	
	$ConnectingDB = new PDO($dsn, $cleardb_username, $cleardb_password);

?>

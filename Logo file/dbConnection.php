<?php
	$host   = "localhost";
	$user   = "admin_aht";
	$pass   = "ObDv3VXnX8";
	$dbname = "admin_aht";
	$db     = null;


	//try to connect to the database using the provided credentials
	//if the connection works, it will keep the persistence, else it will throw an error
	try {
		$db = new PDO( "mysql:host=$host;dbname=$dbname", $user, $pass );
		$db->exec("set names utf8");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	}catch (Exception $e){
		die("Database Connection Error: " . $e->getMessage());
	}

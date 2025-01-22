<?php

	$dsn = "mysql:host=localhost;$dbname=pppoe_db";
    $username = "root";
    $password = "";

	try {
		//code...
		$conn = new PDO( $dsn ,$username, $password);
	     echo 'Connected Successfully';
	} catch (PDOException $e) {
		//throw $th;
        echo 'Connection Failed'.$e->getMessage();
	}

	    



?>
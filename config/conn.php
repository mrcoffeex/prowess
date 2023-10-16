<?php

	function PWD(){

		date_default_timezone_set('Asia/Manila');

		include 'conf.php';

		$options = [
			PDO::ATTR_PERSISTENT => true
		];

		// Create connection
		$dbConnection = new PDO('mysql:dbname='.$dbname.';host='.$servername.';charset=utf8mb4', $username, $password, $options);

		$dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $dbConnection;
	}

?>
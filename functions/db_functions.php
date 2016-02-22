<?php 
	function connect_database()
	{
		require_once "../functions/db_login.php";
		$db_server=mysqli_connect($db_hostname,$db_username,$db_password);
		if(!$db_server) die("Unable to connect to database: " . mysqli_error());
		mysqli_select_db($db_server,$db_database) or die("Database not selected: ".mysqli_error($db_server));
		return $db_server;
	}
 ?>
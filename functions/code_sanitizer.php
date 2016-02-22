<?php
	function sanitizeString($var)
	{
		if (get_magic_quotes_gpc()) $var = stripslashes($var);
		$var = htmlentities($var);
		$var = strip_tags($var);
		return $var;
	}
	
	function sanitizeMySQL($conn,$var)
	{
		$var = mysqli_real_escape_string($conn,$var);
		$var = sanitizeString($var);
		return $var;
	}
?>
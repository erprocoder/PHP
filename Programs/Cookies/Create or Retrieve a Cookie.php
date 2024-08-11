<?php

	/*
		* setcookie(name, value, expire, path, domain, secure, httponly);
		* Only the name parameter is required.
		* All other parameters are optional.
	*/

	$cookie_name = "language";
	$cookie_value = "Java";

	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

	if(!isset($_COOKIE[$cookie_name]))
	{
		echo "Cookie named '' " . $cookie_name . " '' is not set!<br>";
		echo "Reload to view cookies";
	}
	else
	{
		echo "Cookie named '' " . $cookie_name . " '' is set!<br>";
		echo "Value is: " . $_COOKIE[$cookie_name];
	}
	
?>
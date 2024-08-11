<?php

	/*
		* setcookie(name, value, expire, path, domain, secure, httponly);
		* Only the name parameter is required.
		* All other parameters are optional.
	*/

	// set the expiration date to one hour ago
	setcookie("user", "", time() - 3600);

	echo "Cookie 'user' is deleted.";
	
?>
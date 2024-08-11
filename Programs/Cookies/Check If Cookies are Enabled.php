<?php

	/*
		* setcookie(name, value, expire, path, domain, secure, httponly);
		* Only the name parameter is required.
		* All other parameters are optional.
	*/

	setcookie("test_cookie", "test", time() + 3600, "/");

	if(count($_COOKIE) > 0)
	{
		echo "Cookies are enabled.";
	}
	else
	{
		echo "Cookies are disabled.";
	}

?>
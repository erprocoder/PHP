<?php

	/* 
		* Remove characters from both sides of a string.
		* ('I' From start and 'Hub!' from end).
	*/

	$str = "I love Programming Hub!";
	echo "Without trim: " . $str . "<br><br>";
	echo "With trim: " . trim($str, "IHub!");

?>
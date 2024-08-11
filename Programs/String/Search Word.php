<?php

	$s1 = "Hello Universe";
	$s2 = "Hello world!";

	echo "s1 = $s1 <br>";
	echo "s2 = $s2 <br>";
	echo "String found = " . strrchr($s1, "Universe") . "<br>";

	// Search a string for the ASCII value of "e" (101) and return all characters from this position to the end of the string.

	echo "String found = " . strrchr($s2, 101);

?>
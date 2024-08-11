<?php

	//-------Example 1-------
	
	$str = " I love Programming Hub! ";
	echo "Without trim:'" . $str . "'";
	echo "<br><br>";

	//Remove white space characters from both side
	echo "With trim: '" . trim($str) . "'";
	echo "<br><br>";

	//-------Example 2-------

	$str = "\t\n\r I love Programming Hub! \t\n\r";
	echo "Without trim:'" . $str."'";
	echo "<br><br>";

	// Remove white space character,\t(a tab), \n(new line character) and \r( a carriage return) from both side.
	echo "With trim:'" . trim($str) . "'";

?>
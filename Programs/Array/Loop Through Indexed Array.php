<?php
	
	$language = array("JAVA", "C++", "C", "PYTHON");

	// find length using count()
	$array_length = count($language);

	for($i = 0; $i < $array_length; $i++)
	{
		echo $language[$i];
		// break line statement
		echo "<br>";
	}
	
?>
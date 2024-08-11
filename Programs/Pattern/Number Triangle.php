<?php

	// Change value of $lines to increase no. of lines in triangle pattern.
	
	$lines=6;
	echo "<p style=\"font-family:monospace;\">";
	
	for($i = 1; $i <= $lines; $i++)
	{
		$count = (2 * $i) + 1;
		
		for($k = 1; $k <= ($lines - $i); $k++)
		{
			echo str_repeat("&amp; nbsp;", 1);
		}

		$j = 1;
		for($j; $j <= $count / 2; $j++)
		{
			echo $j;
		}
		$j--;
		
		for($k = ($j-1); $k >= 1; $k--)
		{
			echo $k;
		}
		echo "<br>";
	}
	echo "</p>";

?>
<?php
	
	// Change value of $lines to increase no. of lines in triangle pattern
	
	$lines=6;

	//font-family: monospace used for traingle formatting
	echo "<p style=\"font-family: monospace;\">";

	for($i = 1; $i <= $lines; $i++)
	{
		for($j = 1; $j < $lines - ($i - 1); $j++)
		{
			echo str_repeat('&amp;nbsp;',1);
		}
		for($k = 1; $k <= $i; $k++)
		{
			echo "*";
			for($k1 = 1; $k1 < $k; $k1 += $k)
			{
				echo "*";
			}
		}
		for($j = 1; $j < $lines - ($i - 1); $j++)
		{
			echo str_repeat('&amp;nbsp;',1);
		}
		echo "<br>";
	}
	echo "</p>";

?>
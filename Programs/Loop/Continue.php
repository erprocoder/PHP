<?php

	$x = array("10", "20", "30", "40", "50");

	foreach($x as $value)
	{
		if($value == 30)
		{
			continue; // It causes for loop to jump on next iteration.
		}
		echo $value . " ";
	}
	
?>
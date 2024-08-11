<?php

	$x = array("10", "20", "30", "40", "50");

	foreach($x as $value)
	{
		if($value == 30)
		{
			break; // control names out of the for loop
		}
		echo $value . " ";
	}
	
?>
<?php

	$s1 = "Hello Universe";
	echo "s1 = $s1 <br>";
	echo "Sub String = " . substr($s1, 6) . "<br>"; // will result as "Universe".
	echo "Sub String = " . substr($s1, -1) . "<br>";
	echo "Sub String = " . substr($s1, 0, 10) . "<br>";
	echo "Sub String = " . substr($s1, 0, -2) . "<br>";
	
?>
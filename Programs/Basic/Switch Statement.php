<?php
	
	$grade = "C";

	switch($grade)
	{
		case "A":
		echo "Excellent";
		break;

		case "B":
		echo "Good";
		break;

		case "C":
		echo "Well Done";
		break;

		case "D":
		echo "You Passed";
		break;

		default:
		echo "Invalid Grade.";
	}

	// new line
	echo "<br>";
	echo "Your Grade is " . $grade;

?>
<?php
	
	// create 4 * 4 integer multidimensional array.
	
	$a = array(array(1, 2, 3, 4), array(1, 2, 3, 4), array(1, 2, 3, 4), array(1, 2, 3, 4));

	// create 4 * 4 multidimensional array containing variable data type values.
	$b = array(array(1, "JAVA", 3, 4.1), array(1, "C++", 3, 4.2), array(1, "PHP", 3, 4.3), array(1, "PYTHON", 3, 4.4));

	// print array
	echo "Array a :<br><br>";

	printMatrix($a);

	echo "<br>Array b :<br><br>";

	printMatrix($b);

	// user defined function to print multidimensional array
	function printMatrix($matrix)
	{
		for($i = 0; $i < count($matrix); $i++)
		{
			for($j = 0; $j < count($matrix); $j++)
			{
				echo $matrix[$i][$j] . " ";
			}
			echo "<br>";
		}
	}
	
?>
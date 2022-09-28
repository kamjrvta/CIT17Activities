<?php

 	echo "<br> Jaravata -Array Exercise 1 <br><br>";



 	$weather = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind"); 
 	var_dump($weather);
 	?>

 	<!DOCTYPE html>
 	<html lang="en">
 	<head>
 		<meta charset="UTF-8">
 		<title>Weather Forecast</title>
 	</head>
 	<body>

 		<h1 style="color: brown; font-weight: bold">Todays Weather Report</h1>
 		<?php echo "We've seen all kinds of weather this month. At the beginning of the month, we had " . $weather[5] . " and " . $weather[6] . ". Then came " . $weather[1] . " with a few " . $weather[2] . " and some  " . $weather[0] . ". At least we didn't get any " . $weather[3] . " or " . $weather[4] . ". "; ?>

 	</body>
 	</html>
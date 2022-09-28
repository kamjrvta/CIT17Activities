  <?php

	 echo "<br> Jaravata - Array Exercise 2 <br><br>";



							
	 $cities = array("Tokyo", "Mexico City", "New York City", "Mumbai, Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

	 ?>

	 <!DOCTYPE html>
	 <html lang="en">
	 <head>
	 	<meta charset="UTF-8">
	 	<title>Large Cities</title>
	 </head>
	 <body>



	 	<h1 style="color: brown; font-weight: bold;">Large Cities</h1><br>

	
	 	<?php
	 	for ($i = 0; $i < COUNT($cities); $i++) {
	 		echo $cities{$i} . ", ";
	 	}
	 	?>
	 



	 	
	 	<ul>
	 		<?php
	 		for ($i = 0; $i < COUNT($cities); $i++) {
	 			echo "<li>{$cities{$i}}</li>";
	 		}
	 		?>

	 	</ul>
	 	


	 	<?php array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing"); ?>

	 	<?php sort($cities); ?>
	 	<?php var_dump($cities) ?>

	
	 	<ul>
	 		<?php
	 		for ($i = 0; $i < COUNT($cities); $i++) {
	 			echo "<li>{$cities{$i}}</li>";
	 		}
	 		?>
	 	</ul>

	



	 </body>
	 </html>

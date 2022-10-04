<?php

echo("Input the number of elements you want to store in an array: ");
$number = readline();


$element[]= $number;
for ($i = 0; $i < $number; $i++) {
$element[$i] = readline("Enter element " . $i .": ");
}

$hello = explode(' ', readline());
    
 
echo "\n" ;
echo "The frequency of all elements in the "; 
print_r(array_count_values($element));
 
?>


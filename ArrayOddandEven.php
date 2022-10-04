
<?php

$j = 0;
$k = 0;

$num = (int)readline("Input the number of elements to be stored in the array: ");
echo ("Input $num elements in the array: \n");
$arrNum[] = $num;

for ($i = 0; $i < $num; $i++) {
$arrNum[$i] = (int)readline("Enter element " . $i .": ");
}

  for($i=0;$i<$num;$i++)
    {
    if ($arrNum[$i]%2 == 0)
    {
       $arrNum2[$j] = $arrNum[$i];
       $j++;
    }
    else
    {
       $arrNum3[$k] = $arrNum[$i];
       $k++;
    }
    }

echo("The Even elements are : ");
echo "\n";
    for($i=0;$i<$j;$i++)
    {
    echo $arrNum2[$i]." ";
    }
echo "\n";
echo ("The Odd elements are : ");
echo "\n";
    for($i=0;$i<$k;$i++)
    {
    echo" ". $arrNum3[$i]." ";
    }

?>
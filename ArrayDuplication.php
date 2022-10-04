<?php
$mm = 1;
$counter = 0;


$num = (int)readline("Input the number of elements to be stored in the array: ");
echo ("Input $num elements in the array: \n");
$arrNum[] = $num;

for ($i = 0; $i < $num; $i++) {
$arrNum[$i] = (int)readline("Enter element " . $i .": ");
}
for($i=0;$i<$num; $i++)
        {
		$arrNum2[$i]=$arrNum[$i];
		$arrNum3[$i]=0;
        }
        
for($i=0;$i<$num; $i++)
        {
		for($j=0;$j<$num;$j++)
			{
				if($arrNum[$i]==$arrNum2[$j])
				{
				$arrNum3[$j]=$mm;
				$mm++;
				}
			}
		$mm= 1;
        }	
 for($i=0; $i<$num; $i++)
    {
      if($arrNum3[$i]==2){
          $counter++;
      }  
    }        

echo ("Total number of duplicate elements found in the array is : ");
echo $counter;
?>
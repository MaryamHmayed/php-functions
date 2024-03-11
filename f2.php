<?php
function filterNumbers($string){
    $numbers=[];
    for ($i=0;$i<strlen($string);$i++){
        if( $string[$i]>="0" && $string[$i]<=9){
            array_push($numbers,$string[$i]);

        }

    }


}
filterNumbers("45er3t");
print_r($numbers);
//logic of selection-sort in python
function selectionSort(array $numbers): array
{
  for ($i = 0; $i < count($numbers) - 1; $i++) {
    $min_i = $i;
    for ($j = $i + 1; $j < count($numbers); $j++) {
      if ($numbers[$j] < $numbers[$min_i]) {
        $min_i = $j;
      }
    }
    if ($i != $min_i) {
      $temp = $numbers[$i];
      $numbers[$i] = $numbers[$min_i];
      $numbers[$min_i] = $temp;
    }
  }
  return $numbers;
}


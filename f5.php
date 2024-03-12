<?php
function mergeSort($array){
    if (count($array)>1){
        $mid=intval(count($array)/2);
        $right_half = array_slice($array,$mid);
        $left_half = array_slice($array,0,$mid);
        mergeSort($left_half);
        mergeSort($right_half);
        $i=$j=$k=0
        while ($i<count($left_half) && $j<count($right_half)){
            if ($left_half[i]<$right_half[j]){
                
            }
        }
    }


}
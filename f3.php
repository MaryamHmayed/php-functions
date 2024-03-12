<?php
function ConvertToBinary($n){
    $b_list=[];
    while ($n!=0){
        $remainder= $n%2;
        $b_list.=$remainder;
        $n/=2;


    }
    return array_reverse($b_list);
}

ConvertToBinary(42);
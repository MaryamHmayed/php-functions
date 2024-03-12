<?php
function flipNumber($number){
    $flipped_num=0;
    while ($number>1){
        $flipped_num=($flipped_num*10)+($number%10);
        $number=intval($number/10);
    }
 return $flipped_num;
}


print_r(flipNumber(8321));
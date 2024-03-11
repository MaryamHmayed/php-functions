<?php
function evalOperation(string $stringOperation){
    $operation=intval($stringOperation);
    $operators=["+","-","/","*"];
    for ($i=0;$i<strlen($stringOperation);$i++){
        if( $stringOperation[$i]== "+"){
            return intval($stringOperation[$i-1]) + intval($stringOperation[$i+1]);
        }
        elseif ( $stringOperation[$i]== "-"){
            return intval($stringOperation[$i-1]) - intval($stringOperation[$i+1]);
        }
        elseif ( $stringOperation[$i]== "/"){
            return intval($stringOperation[$i-1]) / intval($stringOperation[$i+1]);
            
        }
        else{
            return intval($stringOperation[$i-1]) * intval($stringOperation[$i+1]);

        }

    }
    
}
print_r(evalOperation("4+2"));
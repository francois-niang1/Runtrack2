<?php
function leetspeak($str){
    $convert = "ABEGLSTabeglst";
    $i = 0;
    while (isset($str[$i])) {
        $j=0;
        while(isset($convert[$j])) {
            if($str[$i] == $convert[$j]){
                if($str[$i] == 'a' || $str[$i] == 'A'){
                    $str[$i] = '4';
                }
                else if($str[$i] == 'b' || $str[$i] == 'B'){
                    $str[$i] = '8';
                }
                else if($str[$i] == 'e' || $str[$i] == 'E'){
                    $str[$i] = '3';
                }
                else if($str[$i] == 'g' || $str[$i] == 'G'){
                    $str[$i] = '6';
                }
                else if($str[$i] == 'l' || $str[$i] == 'L'){
                    $str[$i] = '1';
                }
                else if($str[$i] == 's' || $str[$i] == 'S'){
                    $str[$i] = '5';
                }
                else{
                    $str[$i] = '7';
                }
                
            }
            $j++;
        }
    $i++;
    }
    return $str;
}

$str = 'Aujourdhui Boris cest grave le sang';
echo leetspeak($str);
<?php
function occurrences($str, $char){
    $i=0;
    $compt =0;
    while (isset($str[$i])){
        $j=0;
        while (isset($char[$j])){
            if($str[$i] == $char[$j]) {
                $compt++;
            }
            $j++;
        }
        $i++;
    }
    return $compt;
}

echo 'Cette lettre apparait <b>'.occurrences('papa et maman', 'p').'</b> fois.';

?>
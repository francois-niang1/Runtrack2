<?php
function occurrences($str){
    $i=0;
    while (isset($str[$i])){
        $i++;
    }
    return $i;
}

$str = "papa et maman";
echo 'Il y a <b>'.occurrences($str).'</b> nombres de caractères.';
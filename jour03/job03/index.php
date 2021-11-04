<?php
function voyelle_str() {
    $vyl= "aeiouyAEIOUY";
    $str="I'm sorry Dave I'm afraid I can't do that";
    $i=0;
    while (isset($str[$i])) {
        $j=0;
        while(isset($vyl[$j])) {
            if($str[$i] == $vyl[$j])
                echo $vyl[$j];
            $j++;
        }
    $i++;
    }
}
voyelle_str();
?>
<?php
$i = 1 ;
$compteur = 0;
$div = 1;
for($i=0;$i<1000;$i++) {
    $compteur = 0;
    for($div=1;$div<=$i;$div++) {
        if($i%$div==0){
            $compteur++;
        }
    }
    if ($compteur == 2)
        echo $i.'<br/>';
}
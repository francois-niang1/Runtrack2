<?php
$str = "Les choses que l'on possede finissent par nous posseder.";
$i = -1;

for ($i=-1;isset($str[$i]);$i--){
    echo $str[$i];
}

// while(isset($str[$i])){
//     echo $str[$i];
//     $i--;
// }

?>
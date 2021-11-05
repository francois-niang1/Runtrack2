<?php
function bonjour($jour){
    $jour = true;
    if ($jour == true){
        echo 'Bonjour'.'<br>' ; 
        echo $jour.'<br>';
    }
    else{
        echo 'Bonsoir'.'<br>' ; 
        echo $jour.'<br>';
    }
}
$jour=true;
bonjour($jour);
<?php
function bonjour($jour){
    if ($jour == true){
        echo 'Bonjour'.'<br>' ; 
    }
    else{
        echo 'Bonsoir'.'<br>' ; 
    }
}

$jour=false;
bonjour($jour);
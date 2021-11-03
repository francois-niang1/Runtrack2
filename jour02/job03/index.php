<?php
$int=100;
$i = 0;

while ($i < $int){
    $i = $i + 1;
    if($i == 42){
        echo 'La Plateforme_<br>';
    }
    else if ($i < 20){
        echo '<i>'.$i.'</i>'.'<br>';
    }
    else if ($i > 25  &&  $i < 50){
        echo '<u>'.$i.'</u>'.'<br>';
    }
    else{
        echo $i.'<br>';
    }
    

}

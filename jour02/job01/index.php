<?php
$int=1337;
$i = 0;


while ($i < $int){
    $i++;
    if ($i == 42){
        echo '<b><u>'.$i.'</u></b>'.'<br>';
    }
    else{
        echo $i .'<br>';
    }
    
}
?>
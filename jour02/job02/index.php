<?php
$int=1337;
$i = 0;

while ($i < $int){
    $i = $i + 1;
    if ($i == 26 || $i == 37 || $i == 88 || $i == 1111 || $i == 3233 ){
        $i = $i + 1;
    }
    echo $i .'<br>';
}
?>
<?php
function calcule($a, $operation, $b){
    $operation = '+-*/%';
    $i=0;
    $result = 0;
    for ($i=0;isset($operation[$i]);$i++){
        if($operation[$i] == '+'){
            $result = $a + $b;
            echo 'valeur addition = '.$result.'<br>';
        }
        elseif($operation[$i] == '-'){
            $result = $a - $b;
            echo 'valeur soustraction = '.$result.'<br>';
        }
        elseif($operation[$i] == '*'){
            $result = $a * $b;
            echo 'valeur mult = '.$result.'<br>';
        }
        elseif($operation[$i] == '/'){
            $result = $a / $b;
            echo 'valeur div = '.$result.'<br>';
        }
        else{
            $rest = $a % $b;
            echo 'valeur reste = '.$rest.'<br>';
        }
        
        /*return $result;*/
    }
}
$a = 10;
$b = 3;
$operation = '';
echo calcule($a, $operation, $b);

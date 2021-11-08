<?php
function calcule($a, $operation, $b){
    $operateur = '+-*/%';
    $i=0;
    $result = 0;
    for ($i=0;isset($operation[$i]);$i++){
        for ($j=0;isset($operateur[$j]);$j++){
            if ($operation[$i] == $operateur[$j]){
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
            }
        }
    }
}

$a = 10;
$b = 3;
$operation = '/';
echo calcule($a, $operation, $b);

<form action="./index.php" method="post">
    <label for="Str">Str :</label>
    <input type="text" name="str" id="str"><br>
    <select name="fonction" id="fonction">
        <option value="choix">---Choisissez la fonction---</option>
        <option value="gras">Gras</option>
        <option value="cesar">Cesar</option>
        <option value="plateforme">Plateforme</option>
    </select>
    <input type="submit" value="Send">
</form>

<?php 
function gras ($str){
    $str2="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $i = 0;

    while (isset($str[$i])){
        $j = 0;
        while (isset($str2[$j])){
            if ($str[$i] == $str2[$j])
                $_POST["str"] = "<b>" . $str . "<b>";
            $j++;
        }
        $i++;
    }
    return $_POST["str"];
}

echo gras($_POST["str"]);
var_dump($_POST);



gras('Toto');

// function cesar($str){
    
// }

// function plateforme($str){
    
// }

?>


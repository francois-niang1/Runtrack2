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
/* GRAS  */
function gras($str){
    $i = 0;
    $Maj = "AZERTYUIOPQSDFGHJKLMWXCVBN ";
    $Min = "azertyuiopqsdfghjklmwxcvbn ";
    $space = " ";
    for($i = 0 ;isset($str[$i]) ; $i++){  
        $j = 0;
        for($j = 0; isset($Maj[$j]) ; $j++){
            
            if($str[$i] == $Maj[$j]){
                while($str[$i] != $space){
                    echo('<b>'.$str[$i].'</b>');
                    $i++;
                }
                echo($space);
            }
            else if($str[$i] == $Min[$j]){
                while($str[$i] != $space){
                    echo($str[$i]);
                    $i++;
                }
            }               
        } 
    }
    return ($str);
}

$str = $_POST["str"].' ';
gras($str);


/* CESAR */

function cesar($str, $decalage){
    $Min = "abcdefghijklmnopqrstuvwxyz";
    $Maj = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $PartMin = $decalage;
    $PartMaj = $decalage;
    while($PartMin > 0){
        $change = $Min;
        $i = 0;
        $j = 1;
        $Min = '';
        for($j=0; isset($change[$j]); $j++){
            $Stock = $change[$i];
            $change[$i] = $change[$j];
            $change[$j] = $Stock;
            $Min .= $change[$i];
            $change[$i] = $change[$j];
        }
        $Min .= $change[$i];
        $PartMin--;
    }
    while($PartMaj > 0){
        $change = $Maj;
        $i = 0;
        $j = 1;
        $Maj = '';
        for($j=0; isset($change[$j]); $j++){
            $Stock = $change[$i];
            $change[$i] = $change[$j];
            $change[$j] = $Stock;
            $Maj .= $change[$i];
            $change[$i] = $change[$j];
        }
        $Maj .= $change[$i];
        $PartMaj--;
    }
    
    $ModifMin = "abcdefghijklmnopqrstuvwxyz";
    $ModifMaj = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $space = " ";
    $i = 0;    
    for($i=0; isset($str[$i]); $i++){
        $j = 0;
        $p = 0;
        
        if($str[$i] == $space)
                echo($space);

        while(isset($ModifMin[$j])){
            if($str[$i] == $ModifMin[$j])
                echo($Min[$j]);
            $j++;
        }
        
        while(isset($ModifMaj[$p])){
            if($str[$i] == $ModifMaj[$p])
                echo($Maj[$p]);
            $p++;
        }
    }
    return($str);  
    
}
$str =$_POST["str"];
cesar($str, 3);

/* Plateforme */

if(isset($_POST["str"]) == true) {
    foreach ($_POST as $key => $value) {
        if ($value == "plateforme") {
            $str= $_POST["str"];
            plateforme($str);
        }
        else
            false;
    }
}

function plateforme($str){
    $i = 0;
    if($str[$i-1] == 'e' && $str[$i-2] == 'm')
        $str .= '_';
    echo($str);
    return($str);
}
$str =$_POST["str"];
plateforme($str);
?>


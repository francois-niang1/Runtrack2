<?php 
    if ($_POST == NULL ){
        echo '<style>body{background-color : white;}</style>';
    }
    else if ($_POST['style'] == 'style1'){
        echo '<link href="css/style1.css" rel="stylesheet">';
    }
    else if ($_POST['style'] == 'style2'){
        echo '<link href="css/style2.css" rel="stylesheet">';
    }
    else if ($_POST['style'] == 'style3'){
        echo '<link href="css/style3.css" rel="stylesheet">';
    }
    else
    echo '<style>body{background-color : white;}</style>';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="" rel="stylesheet">
        <title>Job 06</title>
    </head>
    <body>
        <h1>Changer le style  !!!</h1>
        <form action="./index.php" method="post">
        <select name="style" id="style">
            <option value="choix">---Choisissez un Style---</option>
            <option value="style1">Clair</option>
            <option value="style2">Sombre</option>
            <option value="style3">Custom</option>
        </select>
        <input type="submit" value="Send">
        </form> 
    </body>
</html>


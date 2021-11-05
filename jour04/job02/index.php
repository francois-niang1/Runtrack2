<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page.css" type="text/css">
    <title>Document</title>
</head>
<body>

    <form action="./index.php" method="get">
        <label for="FirstN">Prénom :</label>
        <input type="text" name="firstn" id="firstn"><br>
        <label for="LastN">Nom :</label>
        <input type="text" name="lastn" id="lastn"><br>
        <label for="Number">Téléphone :</label>
        <input type="text" name="numb" id="numb"><br>
        <input type="submit" value="Send">
    </form>
    <div>
        <table>
        <style>
            table
            {
                border-collapse: collapse;
            }
            td, th, tr
            {
                border: 1px solid black;
                text-align:center;
            }
            
        </style>
         <thead>
                <tr>
                 <th>Argument</th>
                 <th>Valeur</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td> <?php foreach($_GET as $key => $value){
                    echo $key."<br>";} ; ?></td>
                <td> <?php foreach($_GET as $key => $value) {
                    echo $value."<br>";
                    };?>
                </td>
            </tr>
        </tbody>
        </table>
    </div>
</body>
</html>


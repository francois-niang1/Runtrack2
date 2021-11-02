<?php
$int = 12;
$float = 1.5;
$str = "Salut !";
$bool = true;

echo '
<!DOCTYPE >
<html>
    <head>
    </head>
    <body>
        <table> <style>
            table
            {
                border-collapse: collapse;
            }
            td
            {
                border: 1px solid black;
            }</style>
            <thead>
                <tr>
                    <td>Type</td>
                    <td>Nom</td>
                    <td>Valeur</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Entier</td>
                    <td>Int</td>
                    <td>'.$int.'</td>
                </tr>
                <tr>
                    <td>Chaine de caractère</td>
                    <td>Str</td>
                    <td>'.$str.'</td>
                </tr>
                <tr>
                    <td>Flotant</td>
                    <td>Float</td>
                    <td>'.$float.'</td>
                </tr>
                <tr>
                    <td>Booléen</td>
                    <td>Bool</td>
                    <td>'.$bool.'</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>';
?>

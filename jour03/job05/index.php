<?php

function count_str() {
    $cons = 0;
    $voyel = 0;
    $dic= [
        "voyelles" => ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'],
        "consonnes" => ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z', 'B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z'],
        ];
    $string="On n est pas le meilleur quand on le croit mais quand on le sait";
    $i=0;
    while (isset($string[$i])) {
        $j=0;
        $k=0;
        while(isset($dic["voyelles"][$j])) {
            if($string[$i] == $dic["voyelles"][$j]){
                $voyel++;
            }
        $j++;
        }

        while(isset($dic["consonnes"][$k])) {
            if($string[$i] == $dic["consonnes"][$k]) {
                $cons++;
            }
        $k++;
        }
    $i++;
    }
    echo '
    <!DOCTYPE>
    <html>
    <head>

    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Voyelles</th>
                    <th>Consonnes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> '.$voyel. '</td>
                    <td> '.$cons. '</td>
                </tr>
            </tbody>
        </table>
        <style>
            table
            {
                border-collapse: collapse;
            }
            td
            {
                border: 2px solid black;
                text-align:center;
                background-color : #B6BAF6;
            }
            th
            {
                border: 2px solid black;
                text-align:center;
                background-color : #AEB88E;
            }
        </style>
    </body>
    </html>';
}
count_str();

?>

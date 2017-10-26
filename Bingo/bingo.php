<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>BINGO</title>
    </head>
    <body>
        <img src="reload.png" height="75" width="75" onClick="window.location.reload()">
        <h1>BINGO 2017</h1>


        <style>
            table, th, td {
                border: 1px solid black;
                padding: 30px;
                text-align: center;
            }
            table {
                border-spacing: 2px;
            }

            h1 {
                margin-top: 0px;
                color: #fff;
                font-size: 10em;
                font-weight: bold;
                font-family: Helvetica;
                text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaa, 0 6px 1px rgba(0,0,0,.1), 0 0 5px rgba(0,0,0,.1), 0 1px 3px rgba(0,0,0,.3), 0 3px 5px rgba(0,0,0,.2), 0 5px 10px rgba(0,0,0,.25), 0 10px 10px rgba(0,0,0,.2), 0 20px 20px rgba(0,0,0,.15);
            }

            h1 {
                text-align: center;
            }

            body {
                background-color: #f1f1f1;
            }

            img:hover{
                cursor: pointer;
            }
        </style>


        <?php

        function aleatori($matriu) {
            $num = rand(1, 99);
            while (in_array($num, $matriu[0]) || in_array($num, $matriu[1]) || in_array($num, $matriu[2])) {
                $num = rand(1, 99);
            }
            return $num;
        }

      
        function blancs($buits) {
            $num = rand(0, 8);
            while (in_array($num, $buits)) {
                $num = rand(0, 8);
            }
            return $num;
        }

        $matriu = array(array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0));

        for ($i = 0; $i < count($matriu); $i++) {
            for ($j = 0; $j < count($matriu[$i]); $j++) {
                $matriu[$i][$j] = aleatori($matriu);
            }
        }
        
         for ($i = 0; $i < count($matriu); $i++) {
            sort($matriu[$i]);
        }

        $buits = array(9, 9, 9, 9);

        for ($i = 0; $i < count($matriu); $i++) {
            for ($j = 0; $j < count($buits); $j++) {
                $buits[$j] = blancs($buits);
                $matriu[$i][$buits[$j]] = " ";
            }
            $buits = array(9, 9, 9, 9);
        }

        echo '<table align="center">';
        for ($i = 0; $i < count($matriu); $i++) {
            echo "<tr>";
            for ($x = 0; $x < count($matriu[$i]); $x++) {
                echo "<td>" . $matriu[$i][$x] . "</td>";
            }
            echo"</tr>";
        }
        echo "</table>";
        ?>

    </body>

</html>

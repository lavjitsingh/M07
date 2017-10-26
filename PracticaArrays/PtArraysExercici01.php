<!DOCTYPE html>
<!--
Exercici 1: Crea un array numèric de 10 elements i reassigna
els seus index per a que vagin des de l’u fins al deu.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/main.css" />
        <title>
        </title>
    </head>
    <body>
        <?php
        $llista = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        foreach ($llista as $key => $cont) {
            $llista2[$key + 1] = $llista[$key];
        }
        echo '<pre>', print_r($llista2, 1), '</pre>';
        ?>
        <div id="wrapper">
            <header id="header">
                <nav>
                    <ul>
                        <li>
                            <a href="index.html">Menu
                            </a>
                        </li>
                    </ul>
                </nav>
            </header>
        </div>
    </body>
</html>
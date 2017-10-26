<!DOCTYPE html>
<!--
Exercici 2: Converteix el vector de l’exercici anterior en un vector 
associatiu on els índexs són el mateix número però escrit amb lletres.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/main.css" />
        <title></title>
    </head>
    <body>
        <?php
        $llista = [1,2,3,4,5,6,7,8,9,10];
        $lletres = ["un", "dos", "tres", "quatre", "cinc", "sis", "set", "vuit",
            "nou", "deu"];
        foreach ($llista as $key => $cont) {
            $llista2[$lletres[$key]] = $llista[$key];
        }
        echo '<pre>',print_r($llista2,1),'</pre>';
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

<!DOCTYPE html>
<!--
Exercici 4: Mostra en una taula HTML de 2x2 el contingut del següent 
array numèric.
$H2oVcia = array ("Suc de taronja", "Cava", "Vodka", "cointreau");
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/main.css" />
        <title></title>
    </head>
    <body>
      <?php
        $H2oVc9a = array("Suc de taronja", "Cava", "Vodka", "Cointeau", 
            "Vi Blanc");
    echo("<table border=2>");
        for($i = 0; $i < count($H2oVc9a); $i +=2){
        echo("<tr>");
        echo("<td> $H2oVc9a[$i] </td>");
        $x = $i + 1;
        echo("<td>$H2oVc9a[$x]</td>");
        echo("</tr>");
        }
echo("</table>");
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

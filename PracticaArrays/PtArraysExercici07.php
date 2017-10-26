<!DOCTYPE html>
<html lang = "en-US">
 <head>
 <meta charset = "UTF-8">
 <title>Exerici 7</title>
 <link rel="stylesheet" href="assets/css/main.css" />
 </head>
 <body>
 <!--Exercici 7: Crea una funció que accepti dos paràmetres keyini i keyfin que 
 indicaran l’index d’inici i final del array i genere un array de números 
 sencers aleatoris. Mostra el contingut en un html.
 -->
 <h3>Exercici 7: Crea una funció que accepti dos paràmetres keyini i <br>
     keyfin que indicaran l’index d’inici i final del array i genere un<br>
     array de números sencers aleatoris. Mostra el contingut en un html.
</h3>
 <?php
    function RandNumbers($Keyinici, $Keyfinal){
      $randnum = array();
        for($x = $Keyinici; $x < $Keyfinal;$x++){
            $randnum[$x] = rand();
        }
      return $randnum;
    }
  $result = RandNumbers(0,5);
  print_r( $result );
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
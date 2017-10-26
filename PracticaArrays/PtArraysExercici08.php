<!DOCTYPE html>
<html lang = "en-US">
  <head>
    <meta charset = "UTF-8">
    <title>showDate.php
    </title>
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>
    <!--Exercici 5: Crea un array amb les claus i el contingut de dos arrays existents.
$ordre = array (1,2,3,4,5,6,7,8,9,10);
$ingredients = array( "garrofó", "bajoqueta", "arròs", "pollastre", "conill", "safrà", "tomaca", "oli", "ceba", "aigua" );
-->
    <h3>Exercici 5: Crea un array amb les claus i 
      <br>el contingut de dos arrays existents.
    </h3>
    <?php
$ordre = array (1,2,3,4,5,6,7,8,9,10);
$ingredients = array( "garrofó", "bajoqueta", "arròs", "pollastre", "conill", "safrà", "tomaca", "oli", "ceba", "aigua" );
foreach ($ingredients as $key => $cont) {
$llista[$ingredients[$key]] = $ordre[$key];
}
echo'<pre>',  print_r($llista,1),'</pre>'
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
  </body>
</html>


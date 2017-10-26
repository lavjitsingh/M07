<!DOCTYPE html>
<!--
Exercici 3: Mostra en la teua pàgina web el contingut del següent array 
associatiu (clau i contingut) fent ús de la instrucció foreach.
< $paella = array( "garrofó" => 1, "bajoqueta" => 1, "arròs" => 2, 
"pollastre" => 2, "conill" => 1, "safrà" => 1, "tomaca" => 1, "oli" => 1, 
"aigua" => 2 );
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
$paella = array( "garrofó" => 1, "bajoqueta" => 1, "arròs" => 2, 
"pollastre" => 2, "conill" => 1, "safrà" => 1, "tomaca" => 1, 
"oli" => 1, "aigua" => 2 );
foreach ($paella as $key => $value) {
echo"<strong><i>{$key}</strong></i> => <font color='red'>{$value}"
. "</font> <br />";  
}
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
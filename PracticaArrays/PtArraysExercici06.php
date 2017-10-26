<!DOCTYPE html>
<html lang = "en-US">
 <head>
 <meta charset = "UTF-8">
 <title>Exerici 6</title>
 <link rel="stylesheet" href="assets/css/main.css" />
 </head>
 <body>
 <!--$array1 = array( "green", "red", "blue", "red", "purple", "black", "orange", "white");
$array2 = array( "green", "yellow", "red");
$array3 = array( "pink", "white", "blue", "red");
 -->
 <h3>Exercici 6: Mostra la intersecció dels següents arrays.
</h3>
 <?php
    $array1 = array( "green", "black", "white", "red", "pink");
    $array2 = array( "white","pink", "yellow", "red");
    $array3 = array( "red","black", "green", "blue", "pink");
    $result = array_intersect($array1, $array2, $array3);
    print_r($result);

  
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
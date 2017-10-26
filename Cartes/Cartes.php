<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Title of the document</title>
    </head>

    <body>

        <?php
        $suits = array(
            "Picas", "Corazones", "Tréboles", "Diamantes"
        );

        $faces = array(
            "Dos", "Tres", "Cuatro", "Cinco", "Seis", "Siete", "Ocho",
            "Nueve", "Diez", "J", "Q", "K", "As"
        );

        $deck = array();

        foreach ($suits as $suit) {
            foreach ($faces as $face) {
                $deck[] = array("face" => $face, "suit" => $suit);
            }
        }
        shuffle($deck);

        $card = array_shift($deck);

        echo $card['face'] . ' of ' . $card['suit'];
        ?>

    </body>

</html>


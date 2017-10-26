<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Joc de la mona</title>
    </head>

    <body>



        <?php
        $suits = array(
            "Spades", "Hearts", "Clubs", "Diamonds"
        );

        $faces = array(
            "Two", "Three", "Four", "Five", "Six", "Seven", "Eight",
            "Nine", "Ten", "Jack", "Queen", "King", "Ace"
        );

        $player01 = array();
        $player02 = array();
        $player03 = array();


        $deck = array();

        foreach ($suits as $suit) {
            foreach ($faces as $face) {
                $deck[] = array("face" => $face, "suit" => $suit);
            }
        }

        $i = 0;
        $find = false;
        while ($i < count($deck) or find == TRUE) {
            if ($deck[$i] == 'Five of Diamonds') {
                unset($deck[50]);
            }
        }
        
        
        
        print_r($deck);

        shuffle($deck);
        $card = array_shift($deck);

        echo $card['face'] . ' of ' . $card['suit'];
        ?>

    </body>

</html>


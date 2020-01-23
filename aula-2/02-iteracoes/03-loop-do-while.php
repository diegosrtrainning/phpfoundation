<?php
    // Parecido com o While, mas é executado pelo menos uma vez
    $counter = 0;
    $maxCounter = 5;

    do {
        echo "counter $counter".PHP_EOL;
    } while($counter++ < $maxCounter);


    $x = 6;

    do {
        echo "O número de x é: $x \n";
        $x++;
    } while ($x <= 5);
?>
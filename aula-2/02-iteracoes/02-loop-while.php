<?php

    // While é executado até que a condição seja falsa
    $counter = 0;
    $maxCounter = 5;

    while($counter < $maxCounter){
        echo "<p>Iteration $counter</p>";
        $counter++;
    }

    //Curiosidade
    echo "<h2>Curiosidade:</h2>";
    $counter = 0;
    while($counter++ < $maxCounter){
        echo "<p>Iteration $counter</p>";
    }


    $x = 0;

    while($x <= 100) {
        echo "O número de x é: $x \n";
        $x+=10;
    }
?>
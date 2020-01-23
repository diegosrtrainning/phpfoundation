<?php

    echo "Integer intervalo de -2147483648 a 2147483647\n";
    echo "\nLimite positivo Integer\n";
    $x = 2147483647;
    var_dump($x);

    echo "\nLimite negativo Integer\n";
    $x = -2147483647;
    var_dump($x);

    echo "\nE agora?\n";
    $x = 2147483648;
    var_dump($x);

    echo "\nFloat\n";
    $x = 10.365;
    var_dump($x);
?>
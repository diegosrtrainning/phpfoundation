<?php
    $fruits = ["Apples", "Oranges", "Bananas"];

    echo "\nModelo 1: \n";
    foreach ($fruits as $key => $value) {
        echo "$key:$value \n";
    }

    echo "\nModelo 2: \n";
    foreach ($fruits as $value) {
        echo "$value \n";
    }

    echo "\nModelo 3: \n";
    foreach ($fruits as $value) {

        if ($value === "Oranges") {
            continue; // volta para linha 15
        }

        echo "$value \n";
    }

    echo "\nModelo 4: \n";
    foreach ($fruits as $value) {

        if ($value === "Oranges") {
            break; // interrompe o fluxo
        }

        echo "$value \n";
    }
?>
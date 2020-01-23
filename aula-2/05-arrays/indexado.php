<?php
    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);

    echo "Gosto de $cars[0] , $cars[1] e $cars[2].";

    //Loop
    $cars2 = array("Fusca", "Brasilia", "Voyage");
    $arrlength = count($cars2);
    
    for($x = 0; $x < $arrlength; $x++) {
        echo $cars2[$x] . "\n";        
    }
?>
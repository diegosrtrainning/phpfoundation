<?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo "Peter tem " . $age['Peter'] . " anos.\n\n";

    foreach($age as $x => $x_value) {
        echo "Key=$x, Value=$x_value\n";        
    }

    foreach($age as $key => $value) {
        echo "Key=$key, Value=$value\n";        
    }

    
?>
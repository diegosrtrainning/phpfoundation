<?php

    date_default_timezone_set("America/Recife");    
    echo "America/Recife: " . date("h:i:sa") . "\n";

    $d=mktime(23, 14, 54, 8, 12, 2014);
    echo "Data " . date("Y-m-d h:i:s", $d) . "\n";

    date_default_timezone_set("America/Recife");    
    $d=mktime(23, 14, 54, 8, 12, 2014);
    echo "Data " . date("Y-m-d H:i:s", $d);
?>
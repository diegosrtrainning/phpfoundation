<?php
function inverse($x) {
    if (!$x) {
        throw new Exception('Divisão por zero.');
    }
    return 1/$x;
}

try {
    echo inverse(5) . "\n";
    echo inverse(0) . "\n";
} catch (Exception $e) {
    echo "Ops";    
    //print_r($e);
}

// Execução continua
//echo "Olá mundo\n";
?>
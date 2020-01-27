<?php
include __DIR__ . "/03-exception.php";

function inverse($x) {
    if (!$x) {
        throw new Exception('Divisão por zero.');
    }
    return 1/$x;
}

try {
    $_SESSION["usuarioLogado"] = "Anna Raio";
    echo inverse(0) . "\n";
} catch (Exception $e) {    
    meuLogFullLogado($e);
} finally {
    echo "Segundo finally.\n";
}

// Execução continua
echo "Olá mundo\n";
?>
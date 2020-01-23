<?php
function myTest() {
    $x = 5; 
    echo "<p>Variavel x dentro da função é: $x</p>";
}
myTest();

// erro
echo "<p>Variavel x FORA da função é: $x</p>";
?>
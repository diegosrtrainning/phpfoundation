<?php
$x = 5; // global

function myTest() {
    // erro
    echo "<p>Variavel x dentro da função é: $x</p>";
}
myTest();

echo "<p>Variavel x FORA da função é: $x</p>";
?>
<?php
define("BEMVINDO", "Bem vindo!");
echo BEMVINDO;

define("BEMVINDO", "Bem vindo!", true);
echo bemvindo;

define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo cars[0];


function myTest() {
    echo BEMVINDO; // Constantes são globais
}
 
myTest();


echo var_dump(empty(BEMVINDO));
?>
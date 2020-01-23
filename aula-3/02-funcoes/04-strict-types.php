<?php declare(strict_types=1); // strict requirement
function bemVindo(int $nome = "Convidado") { // erro inteiro
    echo "Bem vindo : $nome <br>";
}

bemVindo("Maria");
bemVindo();

?>
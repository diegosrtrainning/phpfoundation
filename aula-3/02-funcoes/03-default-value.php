<?php
function bemVindo(string $nome = "Convidado") {
    echo "Bem vindo : $nome <br>";
}

bemVindo("Maria");
bemVindo(); // usará valor padrão

?>
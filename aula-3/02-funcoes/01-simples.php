<?php
function olaMundo(){
    echo "Olá mundo";
}

function bemVindo($fname) {
    echo "Bem vindo $fname <br>";
}

bemVindo("Jani");

function formatarProduto($pNome, $pValor) {
    echo "$pNome custa $pValor <br>";
}

formatarProduto("Hege", "1975");
formatarProduto("Stale", "1978");
formatarProduto("Kai Jim", "1983");

?>
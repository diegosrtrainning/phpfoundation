<?php
$alunos = array('Paulo'=>4, 'Carlos'=>5, 'Felipe'=>6,'Anna'=>9, 'Thiago'=>10);
arsort($alunos);
$mensagem = '%1$s seu status é %2$s com a nota %3$d.';
$status = null;

foreach ($alunos as $nome => $nota) {

    if($nota <= 4){
        $status = "Reprovado";
    } elseif ($nota <= 6){
        $status = "Recuperação";
    } else {
        $status = "Aprovado";
    }

    printf($mensagem, $nome, $status, $nota);
    echo "\n";
}

?>
<?php
$alunos = array(
    array("Paulo",4, 6, 4, 3),
    array("Carlos",5, 8, 2, 1),
    array("Felipe",6, 7, 8, 1),
    array("Anna",9, 8, 10, 10),
    array("Thiago",10, 8, 7, 9)   
);

$mensagem = '%1$s seu status é %2$s com a nota %3$d.';
$status = null;
$notasFinais = [];

foreach ($alunos as $registro) {
    $somaNotas = 0;
    $media = 0;
    $nome = $registro[0];
    
    for ($n=1; $n < 5; $n++) { 
        $somaNotas +=  $registro[$n];
    }

    $media = round($somaNotas / 4, 2);

    $notasFinais[$nome] = $media;    
}

ksort($notasFinais);

foreach ($notasFinais as $nome => $media) {
    
    if($media <= 4){
        $status = "Reprovado";
    } elseif ($media <= 6){
        $status = "Recuperação";
    } else {
        $status = "Aprovado";
    }

    printf($mensagem, $nome, $status, $media);
    echo "\n";
}

?>
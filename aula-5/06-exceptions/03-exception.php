<?php

function meuLog(Exception $e) {
        
    $arquivo = "log_" .date("Y-m-d") . ".txt";
    $myfile = __DIR__."\\logs\\". $arquivo;

    $current = file_get_contents($myfile);
    $current .= $e->getMessage()."\n";
    file_put_contents($myfile, $current);    
}


function meuLogFull(Exception $e) {
        
    $arquivo = "log_" .date("Y-m-d") . ".txt";
    $myfile = __DIR__."\\logs\\". $arquivo;

    $templateLog = "Arquivo: %1\$s\nLinha: %2\$d\nErro: %3\$s\n";
    $erro = sprintf($templateLog, $e->getFile(), $e->getLine(), $e->getMessage());

    $current = file_get_contents($myfile);
    $current .= $erro."\n";
    file_put_contents($myfile, $current);    
}


function meuLogFullLogado(Exception $e) {
        
    $arquivo = "log_" .date("Y-m-d") . ".txt";
    $myfile = __DIR__."\\logs\\". $arquivo;
    date_default_timezone_set("America/Recife");        
    $data = date("d/m/Y H:i:s");

    $templateLog = "[%1\$s] => %2\$s\nArquivo: %3\$s\nLinha: %4\$d\nErro: %5\$s\n";
    $erro = sprintf($templateLog, 
                    $data, 
                    $_SESSION["usuarioLogado"] ?? "", 
                    $e->getFile(), 
                    $e->getLine(), 
                    $e->getMessage());

    $current = file_get_contents($myfile);
    $current .= $erro."\n";
    file_put_contents($myfile, $current);    
}

?>
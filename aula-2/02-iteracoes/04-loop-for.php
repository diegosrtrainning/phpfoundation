<?php

    /*
        Parametros:
            Primeiro: Inicia a variavel de contagem
            Segundo: Condição a ser atendida para iteração continuar. A teração é interrompida caso false
            Terceiro: Executado ao final de cada loop e incrementa a variável criada no primeiro parametro
     */

     for ($c=1; $c <= 5; $c++) { 
         echo "Variável de controle é $c \n";
     }


    for ($x = 0; $x <= 100; $x+=10) {
        echo "O número é : $x \n";
    }
?>
<?php
    //isset
    echo "isset 1\n";    
    $b = null;    
    echo var_dump(isset($b));

    //isset
    echo "\nisset 2\n";    
    $c = 'aa';    
    var_dump(isset($c));

    echo "\nisset 3\n";
    $arr = ['a' => 'nome', 'b' => null, 'c' => 'sobrenome'];    
    var_dump(isset($arr));

    echo "\nisset 4\n";    
    $d = null;
    var_dump(isset($arr, $d));

    echo "\nisset 5\n";    
    $e = 12;
    var_dump(isset($arr, $e));

    echo "\nunset: Destrói a variavel (apenas de seu contexto)\n";    
    $nome = 'Anna';
    unset($nome);  
?>
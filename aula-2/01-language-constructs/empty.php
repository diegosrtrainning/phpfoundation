<?php
    /*
        Evaluation constructs    
        Empty valida se:
            1- Variavel não existe retorna true
            2- Se for false, 0, null, '' retorna true
            3- se array for vazio ($arr = []) retorna true    
    */

    $varOne = [];
    $varTwo = false;
    $varThree = 'My test';
    $varFour = 0;    

    var_dump(empty($varOne));
    var_dump(empty($varTwo));
    var_dump(empty($varThree));
    var_dump(empty($varFour));
?>
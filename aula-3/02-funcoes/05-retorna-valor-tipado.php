<?php declare(strict_types=1); // strict requirement
function adicionarValor(float $a, float $b) : float {
    return $a + $b;
}
echo adicionarValor(1.2, 5.2);




function adicionarValor2(float $a, float $b) : int {
    return (int)$a + $b;
}
echo adicionarValor2(1.2, 5.2);

?>
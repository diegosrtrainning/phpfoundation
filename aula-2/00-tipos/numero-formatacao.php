<?php

// Formatação
echo "\nnumber_format\n";
$valor = 2.55666;
echo number_format($valor, 2);

echo "\nround up\n";
echo round($valor, 2);

echo "\nround down\n"; // XGH
echo floor($valor *100)/100;

echo "\nfloor\n";
echo floor($valor);

echo "\nceil\n";
echo ceil($valor);

?>
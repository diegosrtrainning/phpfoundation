<?php declare(strict_types=1); // strict requirement
function soma(int $x, int $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . soma(5, 10) . "\n";
echo "7 + 13 = " . soma(7, 13) . "\n";
echo "2 + 4 = " . soma(2, 4);
?>
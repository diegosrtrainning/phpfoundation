<?php

echo "Hoje é " . date("d/m/Y") . "\n";
echo "Hoje é " . date("Y.m.d") . "\n";
echo "Hoje é " . date("Y-m-d") . "\n";
echo "Hoje é " . date("l") . "\n";
echo "Ano" . date("Y") . "\n";

// https://www.php.net/manual/pt_BR/timezones.america.php
date_default_timezone_set("America/New_York");
echo "America/New_York: " . date("h:i:sa") . "\n";

date_default_timezone_set("america/sao_paulo");
echo "america/sao_paulo: " . date("h:i:sa") . "\n";

date_default_timezone_set("America/Recife");
echo "America/Recife: " . date("H:i:s") . "\n";



?>
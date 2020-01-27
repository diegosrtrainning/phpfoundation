<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

echo "Nome" . $_SESSION["nome"] . ".<br>";
echo "Sobrenome " . $_SESSION["sobrenome"] . ".";
?>

</body>
</html>
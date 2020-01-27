<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

$_SESSION["nome"] = "Anninha";
print_r($_SESSION);
?>

</body>
</html>
<!DOCTYPE HTML>
<html>  
<body>
<?php
    error_reporting(E_ALL & ~E_NOTICE);
    echo "<h1>Ops ocorreu um erro: </h1><p>", $_GET['msg'] , "</p>".
    "<a href='login.php'>Tentar novamente</a>"
?>
</body>
</html>
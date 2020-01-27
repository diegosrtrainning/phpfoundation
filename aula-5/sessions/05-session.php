<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Limpando variáveis de sessão
session_unset();

// Destrindo a sessão 
session_destroy();
?>

</body>
</html>
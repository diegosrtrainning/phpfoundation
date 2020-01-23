<?php
   $username =  $_POST['user'];
   $password =  $_POST['pass'];
   
   
   if ($username == "admin" && $password == "123")
   {
        header("Location: lista-produtos.php?auth=1"); 
   }else {
        header("Location: erro.php?msg=Login ou senha inválidos"); 
   }
?>
<?php
    $erro = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {         
        $email = $_POST["inputEmail"];
        $senha = $_POST["inputSenha"];

        if($email === "teste@teste.com" && $senha = "1234"){
            $_SESSION["nommeUsuario"] = "Diego Rodrigues";       
            header("Location: vitrine.php");
        } else {
            $erro = "Email e/ou senha inválido(s)";
        }
    }
?>
<?php
    $erro = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {         
        $email = $_POST["inputEmail"];
        $senha = $_POST["inputSenha"];

        $clientesJson = file_get_contents(__DIR__."\\data\\clientes.json");
        $clientes = json_decode($clientesJson);                

        $key = array_search($email, array_column($clientes, 'email'));

        $cliente = $clientes[$key];

        if($cliente->senha == $senha)        
            $_SESSION["nommeUsuario"] = $cliente->nome;       
            header("Location: vitrine.php");
        } else {
            $erro = "Email e/ou senha inválido(s)";
        }
    }
?>
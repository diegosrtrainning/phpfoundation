<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {       
        $clientes = [];
        $id = $_POST["id"];
        $cep = $_POST["cep"];
        $logradouro = $_POST["logradouro"];
        $numero = $_POST["numero"];
        $complemento = $_POST["complemento"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];        

        $clientesJson = file_get_contents(__DIR__."\\data\\clientes.json");
        $clientes = json_decode($clientesJson);                

        $key = array_search($id, array_column($clientes, 'id'));
        $cliente = $clientes[$key];
        
        $cliente->cep = $cep;
        $cliente->logradouro = $logradouro;
        $cliente->numero = $numero;
        $cliente->complemento = $complemento;
        $cliente->cidade = $cidade;
        $cliente->estado = $estado;
                
        unset($clientes[$key]);
        array_push($clientes, $cliente);
        
        $myfile = fopen(__DIR__."\\data\\clientes.json", "w");
        fwrite($myfile, json_encode($clientes));                
        fclose($myfile);
                                        
        header("Location: /trainning/phpfoundation/bonus/bonus1/cadastro-endereco.php?id=$id");
        exit;
    }
?>
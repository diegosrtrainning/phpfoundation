<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    $cep = $logradouro = $cidade = $estado = "";

    if(!empty($_POST["cep"])){
        $cep = $_POST["cep"];
        $urlViaCEP = "https://viacep.com.br/ws/$cep/json/";        
        $response = file_get_contents($urlViaCEP);    
        $response = json_decode($response);
        var_dump($response);
    }
}
 
?>
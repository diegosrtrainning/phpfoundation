<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/forms2.css">
    <title>Document</title>
</head>
<body>
    <?php
        $nomeErr = "";
        $nomeErrClass = "";
        $nome = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {            
            if(empty($_POST["nome"])){
                $nomeErr = "Nome é obrigatório";
                $nomeErrClass = "erro";
            } else {
              $nome = test_input($_POST["nome"]);
            }            
        }

        
    ?>

    <form autocomplete="off" method="post" action="<?php $_SERVER["PHP_SELF"]?>" >
        <fieldset>
            <legend>Nome</legend>
            <input class="<?php echo $nomeErrClass; ?>" type="text" name="nome" id="nome" value="<?php echo $nome;?>" autocomp>
            <span class="erro">* <?php echo $nomeErr;?></span>
        </fieldset>
        <input type="submit" value="OK">
    </form>

    <h2>Você digitou</h2>
    <?php
        if(empty($nome)){
            echo "Nada";
        } else {
            echo $nome;
        }
    ?>

    <?php 
        function test_input($texto) {
            $texto = trim($texto);
            $texto = stripslashes($texto);
            $texto = htmlspecialchars($texto);
            return $texto;
        }
    ?>
</body>
</html>
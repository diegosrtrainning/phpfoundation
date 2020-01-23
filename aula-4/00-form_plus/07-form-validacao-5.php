<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/forms4.css">
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
        <fieldset class="<?php echo $nomeErrClass; ?>">
            <legend>Nome</legend>
            <input type="text" name="nome" id="nome" value="<?php echo $nome;?>" placeholder="Digite seu nome">
            <span class="erro">* <?php echo $nomeErr;?></span>
        </fieldset>

        <fieldset>
            <legend>Genero</legend>
            <label class="rb-container">Feminino
                <input type="radio" name="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>>
                <span class="checkmark"></span>
            </label>
            <label class="rb-container">Masculino
                <input type="radio" name="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>>
                <span class="checkmark"></span>
            </label>
            <label class="rb-container">Outro
                <input type="radio" name="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>>
                <span class="checkmark"></span>
            </label>
        </fieldset>

        <input type="submit" value="OK">
    </form>
    
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
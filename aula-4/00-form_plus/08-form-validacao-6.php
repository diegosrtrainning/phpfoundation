<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/forms5.css">
    <title>Document</title>
</head>
<body>
    <?php
        $nomeErr = "";
        $nomeErrClass = $generoErrClass = $habilidadesErrClass = "";
        $nome = $genero = $habilidades = "";
        $html5 = $css3 = $phpF = false;

        if ($_SERVER["REQUEST_METHOD"] == "POST") { 

            if(empty($_POST["nome"])){
                $nomeErr = "Nome é obrigatório";
                $nomeErrClass = "erro";
            } else {
              $nome = test_input($_POST["nome"]);
            }
            
            if(empty($_POST["genero"])){                
                $generoErrClass = "erro";
            } else {
              $genero = $_POST["genero"];
            }

            if(empty($_POST["habilidades"])){                
                $habilidadesErrClass = "erro";
            } else {
              $habilidades = $_POST["habilidades"];

              $html5 = array_search("html5", $habilidades) === false ? "" : "checked";
              $css3 = array_search("css3", $habilidades) === false ? "" : "checked";
              $phpF = array_search("phpF", $habilidades) === false ? "" : "checked";

            }
            
        }        
    ?>

    <form autocomplete="off" method="post" action="<?php $_SERVER["PHP_SELF"]?>" >
        <fieldset class="<?php echo $nomeErrClass; ?>">
            <legend>Nome</legend>
            <input type="text" name="nome" id="nome" value="<?php echo $nome;?>" placeholder="Digite seu nome">
            <span class="erro">* <?php echo $nomeErr;?></span>
        </fieldset>

        <fieldset class="<?php echo $generoErrClass; ?>">
            <legend>Genero</legend>
            <label class="rb-container">Feminino
                <input type="radio" name="genero" value="F" <?php if (isset($genero) && $genero=="F") echo "checked";?>>
                <span class="checkmark-erro checkmark"></span>
            </label>
            <label class="rb-container">Masculino
                <input type="radio" name="genero" value="M" <?php if (isset($genero) && $genero=="M") echo "checked";?>>
                <span class="checkmark"></span>
            </label>
            <label class="rb-container">Outro
                <input type="radio" name="genero" value="O" <?php if (isset($genero) && $genero=="O") echo "checked";?>>
                <span class="checkmark"></span>
            </label>
        </fieldset>

        <fieldset class="<?php echo $habilidadesErrClass; ?>">
            <legend>Habilidades</legend>
            <label class="cb-container">HTML5
                <input type="checkbox" value="html5" name="habilidades[]" <?php echo $html5;?>>
                <span class="checkmark"></span>
            </label>
            <label class="cb-container">CSS3
                <input type="checkbox" value="css3" name="habilidades[]" <?php echo $css3;?>>
                <span class="checkmark"></span>
            </label>        
            <label class="cb-container">PHP FOUNDATION
                <input type="checkbox" value="phpF" name="habilidades[]" <?php echo $phpF;?>>
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
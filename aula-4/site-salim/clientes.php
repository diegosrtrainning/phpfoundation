<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/forms7.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <?php
        include __DIR__."/lib/validacoes/clientes-validacao.php";
        include __DIR__."/lib/forms/select.php";
        include __DIR__."/lib/forms/listbox.php";
        include __DIR__."/lib/forms/listradio.php";
        include "data.php";        
    ?>    
    <div class="container_12">
        <form autocomplete="off" method="post" action="<?php $_SERVER["PHP_SELF"]?>" >            
            <div class="grid_4"> 
                <fieldset class="<?php echo $nomeErrClass; ?>">
                    <legend>Nome</legend>
                    <input type="text" name="nome" id="nome" value="<?php echo $nome;?>" placeholder="Digite seu nome">
                    <span class="erro">* <?php echo $nomeErr;?></span>
                </fieldset>
            </div>            
            <div class="grid_6">
                <fieldset class="<?php echo $generoErrClass; ?>">
                    <?php echo criarRadioList("Genero", "genero", $generos);?>                
                </fieldset>
            </div>        
            <div class="clear"></div>
            <div class="grid_4">
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
            </div>            
            <div class="grid_4">
                <fieldset class="<?php echo $timeErrClass; ?>">
                    <legend>Time</legend>
                    <div class="select-container">
                        <?php echo criarSelect("time", $times);?>
                    </div>
                </fieldset>
            </div>
            <div class="grid_4">
                <fieldset class="<?php echo $timeErrClass; ?>">
                    <legend>Camisa</legend>
                    <div class="select-container">
                        <?php echo criarSelect("artigos", $artigos);?>
                    </div>
                </fieldset>
            </div>
            <div class="clear"></div>
            <div class="grid_10 center">
                <input class="botao successo" type="submit" value="OK">
            </div>
        </form>
    </div>
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
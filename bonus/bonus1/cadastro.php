<?php
    $id = 0;
    if(!empty($_GET["id"])){
        $id =  $_GET["id"];
    }
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">        
    <title>Bonus 1 - Esqueleto</title>

    <!-- Bootstrap core CSS -->            
    <link href="css/main.css" rel="stylesheet">    
    <link href="css/cadastro.css" rel="stylesheet">    
</head>

<body class="">
    <!-- TOPO DA PAGINA -->        
    <?php include __DIR__ . "/includes/topo.php"; ?>
    <div id="container" class="container">                            
        <div class="row">
            <div class="col-12">
                Cadasto 1/3
            </div>
        </div>      
        <form method="post" action="adicionar.php" enctype="multipart/form-data">
            <input id="id" name="id" value="<?php echo $id; ?>" type="hidden">
            <!-- Dados Pessoais -->
            <div class="row">
                <div class="col-6 form-fields">
                    <div class="form-group row">
                        <label for="nome" class="col-sm-4 col-form-label col-form-label-lg text-right">Nome:</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control form-control-lg" id="nome" name="nome" placeholder="Digite o nome" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sobrenome" class="col-sm-4 col-form-label col-form-label-lg text-right">Sobrenome:</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control form-control-lg" id="sobrenome" name="sobrenome" placeholder="Sobrenome" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label col-form-label-lg text-right">Email:</label>
                        <div class="col-sm-8">
                        <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="senha" class="col-sm-4 col-form-label col-form-label-lg text-right">Senha:</label>
                        <div class="col-sm-8">
                        <input type="password" class="form-control form-control-lg" id="senha" name="senha" placeholder="Senha" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="confirmarSenha" class="col-4 col-form-label col-form-label-lg text-right">Confirmar senha:</label>
                        <div class="col-sm-8">
                        <input type="password" class="form-control form-control-lg" id="confirmarSenha" name="confirmarSenha" placeholder="Confirmar senha" required>
                        </div>
                    </div>
                </div>

                <!-- Imagem -->
                <div class="col-6 text-center">                    
                    <div class="row">
                        <div class="col-12">
                            <img class="img-user" src="media/user.png" alt="">
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-8">
                            <span class="span-foto">Selecione uma foto</span>
                            <div class="form-group">                                        
                                <input type="file" class="form-control-file" id="foto" name="foto">
                            </div>
                        </div>
                    </div>
                
                </div>                
            </div>                     
            <div class="row justify-content-md-center form-buttons" >            
                <div class="col-2">
                    <input type="reset" class="btn btn-danger" value="Limpar" />
                </div>
                <div class="col-1">
                    <input type="submit" class="btn btn-success" value="Avançar" />
                </div>
            </div>    
        </form>            
    </div>    
</body>

</html>
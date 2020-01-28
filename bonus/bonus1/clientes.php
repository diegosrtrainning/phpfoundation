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

    <div class="row title-section">
            <div class="col-11">
                Clientes
            </div>
            <div class="col-1">
                <a href="cadastro.php" class="btn btn-success">Novo</a>
            </div>
        </div>          
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        $clientesJson = file_get_contents(__DIR__."\\data\\clientes.json");
                        $clientes = json_decode($clientesJson);                

                        foreach ($clientes as $key => $cliente) {                                          

                            echo  "<tr>".
                                        "<th scope='row'>$cliente->id</th>" .
                                        "<td>$cliente->nome</td>".
                                        "<td>$cliente->sobrenome</td>".
                                        "<td>".
                                            "<form style='display: inline; padding-right: 20px' action='excluir.php' method='post'>" .
                                                "<input type='hidden' name='id' value='$cliente->id' />".
                                                "<input type='submit' class='btn btn-danger' value='Deletar' />".
                                            "</form>".
                                            "<a class='btn btn-primary' href='cadastro.php?id=$cliente->id'>Editar</a>".
                                        "</td>".
                                    "</tr>";                    
                        }                                                
                    ?>                                            
            </tbody>
            </table>

    </div>    
</body>

</html>
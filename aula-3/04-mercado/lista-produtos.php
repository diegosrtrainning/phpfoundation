<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mercado Tocha</title>
</head>
<body>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Ação</th>
        </tr>
    </thead>    
    <tbody>
    <?php
        $aut = $_GET['auth'];
        
        if(empty($aut)){
            if($aut != 1){
                header("Location: login.php"); 
            }
        }

        $registro = '<tr><td>%1$d</td><td>%2$s</td><td>%3$-04s</td><td><a href="detalhes.php?id=%1$d">detalhes</a></td></tr>';

        $mercadorias = array(
            array(123, "Leite",3.5),
            array(456, "Bolacha",2.3),
            array(789, "Macarrão",2.1),
            array(1010, "Café",9.2),
            array(1011, "Açucar",3.1)   
        );                
        
        foreach ($mercadorias as $mercadoria) {        
            printf($registro, $mercadoria[0], $mercadoria[1], round($mercadoria[2], 2));            
        }

    ?>
    </tbody>
    </table>

    <p><a href="login.php">logout</a></p>
</body>
</html>
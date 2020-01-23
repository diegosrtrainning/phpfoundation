<!DOCTYPE HTML>
<html>  
<body>
<?php
    error_reporting(E_ALL & ~E_NOTICE);

    $id = $_GET['id'];
    
    $mercadorias = array(
        array(123, "Leite",3.5),
        array(456, "Bolacha",2.3),
        array(789, "Macarrão",2.1),
        array(1010, "Café",9.2),
        array(1011, "Açucar",3.1)   
    );

    $produto = null;
    
    foreach ($mercadorias as $mercadoria) {                  
        
        if($mercadoria[0] == $id){
            $produto = $mercadoria;
            break;
        }
    }    

    if(isset($produto)){
        echo "id: $produto[0]<br>";
        echo "descrição: $produto[1]<br>";
        echo "preço: $produto[2]<br>";
    } else{
        echo "produto não encontrado";

    }

    echo "<br><br><a href='lista-produtos.php?auth=1'>Voltar</a>"


?>
</body>
</html>
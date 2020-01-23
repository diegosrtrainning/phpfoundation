<?php
$buscaProduto = "Leite";
$carrinho=array("Pão"=>"2.30","Leite"=>"3.9", "Frutas"=> "25.0");
$key = array_key_exists($buscaProduto,$carrinho);

if(empty($key)){
    echo "Produto não encontrado";
} else {
    echo $key;    
    unset($carrinho[$buscaProduto]);
    print_r($carrinho);
}

// Exibir o valor do leite
$buscaProduto = "Leite";
$carrinho=array("Pão"=>"2.30","Leite"=>"3.9", "Frutas"=> "25.0");
$produtoExiste = array_key_exists($buscaProduto,$carrinho);
if(empty($produtoExiste)){
    echo "Produto não encontrado";
} else {
    echo "Valor do $buscaProduto é $carrinho[$buscaProduto]";    
}

?>
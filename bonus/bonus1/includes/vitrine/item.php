<?php

function criarItem($produto){
   $item = '<div class="card col-4" ><div class="card-border">
        <img src="'. $produto->imagem .'" class="card-img-top" alt="notebook">
        <div class="card-body">
            <h5 class="card-title">'. $produto->nome .'</h5>
            <p class="card-text">'.$produto->descricao.'</p>
            <a href="#" class="btn btn-primary">Comprar</a>
        </div>
        </div>
    </div>';

    return $item;
}
?>
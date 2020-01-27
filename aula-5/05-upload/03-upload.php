<?php
$target_dir = "meusuploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//Verifica se é um arquivo
if(isset($_POST["Enviar"])) {
    $check = filesize($_FILES["fileToUpload"]["tmp_name"]);
    
    if($check !== false) {
        echo "Arquivo é do tipo - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Nenhum arquivo selecionado.";
        $uploadOk = 0;
    }
}
// Verifica se arquivo existe
if (file_exists($target_file)) {
    echo "Desculpe, arquivo já exise.";
    $uploadOk = 0;
}
// Validando tamanho máximo permitido
if ($_FILES["fileToUpload"]["size"] > 500000) { // 1MB
    echo "Tamanho máximo permitido é de 1 MB";
    $uploadOk = 0;
}

// Validando o formato
if($imageFileType != "xlsx" && $imageFileType != "csv" && $imageFileType != "pdf" ) {
    echo "Apenas arquivos XLSX, CSV e PDF são permitidos.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Ocorreu uma falha.";

} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "O arquivo ". basename( $_FILES["fileToUpload"]["name"]). " foi salvo com sucesso.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
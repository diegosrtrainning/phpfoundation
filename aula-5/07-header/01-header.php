<?php


function cabecalho_download_csv($filename) {
    // desabilitar cache
    $now = gmdate("D, d M Y H:i:s");
    header("Cache-Control: max-age=0, no-cache, must-revalidate, proxy-revalidate");
    header("Last-Modified: {$now} GMT");

    // forçar download  
    header("Content-Type: application/force-download");
    header("Content-Type: application/octet-stream");
    header("Content-Type: application/download");

    // disposição do texto / codificação
    header("Content-Disposition: attachment;filename={$filename}");
    header("Content-Transfer-Encoding: binary");
}


cabecalho_download_csv("nome_arquivo_" . date("Y-m-d") . ".csv");

echo "aaaaaa;aaaaaaaaaa;aaaaaaaaaaaaaaa;aq";
?>
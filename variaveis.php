<?php
$nomeArquivo = __DIR__."/produtp.json";
if(file_exists($nomeArquivo)){
    $produtos = json_decode(file__get_contents($nomeArquivo),true);
}

$categorias = ["camiseta", "moletom", "mochila", "colar"]
?>
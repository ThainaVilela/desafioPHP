<?php
$nomeArquivo = __DIR__."/produto.json";
if(file_exists($nomeArquivo)){
    $produtos = json_decode(file_get_contents($nomeArquivo),true);
}

$categorias = ["camiseta", "moletom", "mochila", "colar"]
?>
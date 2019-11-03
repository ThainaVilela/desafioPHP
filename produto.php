<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include_once("variaveis.php"); ?>
    <div class="container bg-light p-5">
        <button class="mb-3"><a href="desafio.php">&larr; Voltar para lista de produtos</a></button>
        <div class="row">
            <?php 
                foreach($produtos as $produto){ 
                    if ($_GET["nome"] == $produto["nome"]){
            ?>
                <div class="col-5">
                    <img src="<?php echo $produto["img"]; ?>" class="img-fluid" alt="Imagem Produto">
                </div>
                <div class="col-7">
                    <h1><?php echo $produto["nome"]; ?></h1>
                    <p class="lead">Categoria</p>
                    <p><?php echo $produto["categoria"]; ?></p>
                    <p class="lead">Descrição</p>
                    <p><?php echo $produto["desc"]; ?></p>
                    <div class="d-flex justify-content-between">
                        <div>
                        <p class="lead">Quantidade em estoque</p>
                        <p><?php echo $produto["qtd"]; ?></p>
                        </div>
                        <div class="pr-5">
                        <p class="lead">Preço</p>
                        <p><?php echo $produto["preco"]; ?></p>
                        </div>
                    </div>
                </div>
            <?php 
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
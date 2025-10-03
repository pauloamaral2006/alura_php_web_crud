<?php

    require "src/conexao-bd.php";
    require "src/Modelo/Produto.php";
    require "src/Repository/ProdutoRepository.php";
    
    $produtosRepository = new ProdutoRepository($pdo);
    $produtos = $produtosRepository->deletar($_POST['id']);

    header("Location: admin.php");
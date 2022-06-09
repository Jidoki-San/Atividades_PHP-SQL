<?php

    include "conexao.php";

    $nome = $_POST['i_nome'];
    $quantidade = $_POST['i_quantidade'];
    $preco = floatval($_POST['i_preco']);

    $sql = "insert into produto (nome, quantidade, preco) values ('{$nome}', '{$quantidade}', '{$preco}')";
    $conexao->query($sql);
    
?>

<html>

    <head>
        <title>Concluido</title>
        <meta charset="utf-8">
    </head>

    <body>
        <h1>Cadastro concluído</h1>
        <a href="../Index.html">Novo Cadastro</a>
        <a href="leitura.php">Ver cadastros</a>
    </body>

</html>
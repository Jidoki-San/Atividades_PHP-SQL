<?php

    include "conexao.php";

    $cod = $_GET['cod_prod'];
    $nome = $_POST['i_nome'];
    $quantidade = $_POST['i_quantidade'];
    $preco = floatval($_POST['i_preco']);

    $sql = "update produto set nome = '$nome', quantidade = '$quantidade', preco = '$preco'where cod_prod = '$cod' ";

    if(mysqli_query($conexao, $sql)){
        include "leitura.php";
    }else{
        echo "Erro na atualização do registro!";
    }

?>
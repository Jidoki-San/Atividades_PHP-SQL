<?php

    include("conexao.php");

    $nome = $_POST['i_nome'];
    $sobrenome = $_POST['i_sobrenome'];
    $usuario = $_POST['i_usuario'];
    $senha = $_POST['i_senha'];
    $foto = $_FILES['i_foto'];

    $query_1 = "select * from usuario where login = '{$usuario}' ";
    $resposta = mysqli_query($conexao, $query_1);     
    $row =  mysqli_num_rows($resposta); 
?>
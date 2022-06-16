<?php

    include("conexao.php");

    $id_tarefa = $_GET['id_t'];
    $titulo_t = $_POST['titulo_t'];
    $descricao_t = $_POST['descricao_t'];
    $status_t = $_POST['status_t'];

    $query_1 = "update tarefa set titulo = '{$titulo_t}', descricao = '{$descricao_t}'
        status_tarefa = '{$status_t}' where id_tarefa = '{$id_tarefa}'";
    
    if(mysqli_query($conexao, $query_1)){
        header('Location: listar_tarefa.php');
    }else{
        ?>
        <h1>Erro na atualização do registro! </h1>
        <a href="editar_tarefa.php">Voltar</a>
        <?php
    }

?>
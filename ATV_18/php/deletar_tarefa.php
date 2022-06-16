<?php

    include("conexao.php");

    $id_tarefa = $_GET['id_t'];
    $query_1 = "delete from tarefa where id_tarefa = '{$id_tarefa}'";

    if(mysqli_query($conexao, $query_1)){
        header('Location: listar_tarefa.php');
    }else{
        ?>
        <h1>Erro na hora de deletar</h1>
        <a href="listar_tarefa.php">Voltar</a>
        <?php
    }

?>
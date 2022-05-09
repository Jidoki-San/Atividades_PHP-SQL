<?php
    session_start()
    include ('conexao.php');

    if(empty($_POST['i_login']) || empty($_POST['i_senha'])){
        header('location: ../index.php');
    }

    $login = mysqli_real_escape_string($conexao, $_POST['i_login']);
    $login = mysqli_real_escape_string($conexao, $_POST['i_senha']);

    $sql = "select id_usuario, nome, sobrenome, login from usuario where login = '{$login}' and senha = md5('{$senha}')";
    $resposta = mysqli_query($conexao, $sql);
    $row = mysqli_num_rows($resposta);

    if($row == 1){
        $_SESSION['usuario'] = $login;
        header('location: painel.php');
    }else{
        $_SESSION['nao_autenticado'] = true;
        header('location: ../index.php');
    }
?>
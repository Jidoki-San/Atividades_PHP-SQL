<?php

    session_start();
    include("conexao.php");

    $nome = $_POST['i_nome'];
    $sobrenome = $_POST['i_sobrenome'];
    $usuario = $_POST['i_usuario'];
    $senha = $_POST['i_senha'];
    $foto = $_POST['i_foto'];

    $query_1 = "select * from usuario where login = '{$usuario}'";
    $resposta = mysqli_query($conexao, $query_1);
    $row =  mysqli_num_rows($resposta);

    if($row == 1){
        $_SESSION['not_usuario'] = true;
        echo "<script> javascrtipt:history.go(-1) </script>";
    }else{
        $tamanho = $foto['size'] * 0.001;
        $novo_nome_foto = uniqid();
        $pasta = "../upload/";
        $extensao = strtolower(pathinfo($foto['name'], PATHINFO_EXTENSION));
        $caminho = $pasta . $novo_nome_foto . "." . $extensao;

        if($extensao == "jpg" || $extensao == "jpeg" || $extensao == "png" || $extensao == "gif"){
            if($tamanho <= 2016){
                $move = move_uploaded_file($foto['tmp_name'], $caminho);

                if($move){
                    $query_2 = "insert into usuario (nome, sobrenome, login, senha, foto)
                                values ('{$nome}', '{$sobrenome}', '{$usuario}', md5('{$senha}'), '{$caminho}')";
                    mysqli_query($conexao, $query_2);
                }
            }else{
                $_SESSION['not_arquivo'] = true;
                echo "<script> javascript:history.go(-1) </script>";
            }
        }else{
            $_SESSION['not_arquivo'] = true;
            echo "<script> javascript:history.go(-1) </script>";
        }

    }

?>

<html>

    <head>
        <title>Cadastrado com Sucesso</title>
        <meta charset="utf-8">
    </head>

    <body>
        <h1>Cadastrado com Sucesso!</h1>
        Faça o login <a href="../Index.php">aqui!</a>
    </body>

</html>
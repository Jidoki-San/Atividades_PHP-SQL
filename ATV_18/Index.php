<?php session_start(); ?>

<html>

    <head>
        <title>Tela de login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/st_form.css">
    </head>

    <body>
        <form action="php/login.php" method="post">
            <div class="form_box">

                <h1>Login</h1>

                <?php
                if(isset($_SESSION['not_autenticado'])){
                ?>
                    <div class="erro_box">
                        Usuário ou senha inválidos!
                    </div>
                <?php
                }
                unset($_SESSION['not_autenticado']);
                ?>

                <label>Usuário</label>
                <input type="text" name="i_usuario" class="i_text" required>

                <label>Senha</label>
                <input type="password" name="i_senha" class="i_text" required>

                <input type="submit" value="Entrar" class="btt_form">

                <div class="link_box">
                    Não tem conta? <a href="cadastro_usuario.php">Crie uma!</a>
                </div>

            </div>
        </form>
    </body>

</html>
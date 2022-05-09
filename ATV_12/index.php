<html>

    <head>
        <title>Atividade - Tela de Login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style_login.css">
    </head>

    <body>
        <div class="container">

            <div class="form_box">

                <div class="h1_box">
                    <h1>Login</h1>
                </div>
                <?php
                    if(isset($_SESSION['nao_autenticado'])){
                ?>
                    <div class="caixa_de_erro">
                        Usuário ou senha inválidos!
                    </div>
                <?php
                    }
                ?>
                <form action="POST" method="login.php">
                    <label>Login</label>
                    <input type="text" name="i_login" class="i_text">

                    <label>Senha</label>
                    <input type="password" name="i_senha" class="i_text">

                    <input type="submit" value="Logar" id="btt_form">
                </form>

                <div class="link_box">
                    Ainda não tem cadastro? <a href="">Cadastre-se</a>
                </div>

            </div>

        </div>
    </body>

</html>
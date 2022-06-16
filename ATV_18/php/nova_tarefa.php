<?php
    include("verifica_usuario.php");
?>

<html>

    <head>
        <title>Nova tarefa</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/st_form.css">
    </head>

    <body>
        <form action="cadastro_de_tarefa.php" method="post">
            <div class="form_box">

                <h1>Nova tarefa</h1>

                <label>Título</label>
                <input type="text" name="i_titulo" class="i_text" required>

                <label>Descrição</label>
                <textarea name="i_descricao" cols="30" rows="10" class="i_area" required></textarea>

                <label>Status da tarefa</label>
                <select name="i_status" required>
                    <option value=""></option>
                    <option value="P">Pendente</option>
                    <option value="I">Iniciado</option>
                    <option value="C">Concluído</option>
                </select>

                <input type="submit" value="Criar tarefa" class="btt_form">

                <a href="painel.php">Voltar</a>

            </div>
        </form>
    </body>

</html>
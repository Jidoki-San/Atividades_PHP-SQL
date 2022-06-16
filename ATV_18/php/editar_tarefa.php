<?php
    session_start();
    include("conexao.php");
    if(isset($_SESSION['usuario'])){
        $id_tarefa = $_GET['id_t'];
        $query_1 = "select * from tarefa where id_tarefa = '{$id_tarefa}'";
        $resposta = mysqli_query($conexao, $query_1);
        $row = mysqli_fetch_assoc($resposta);
    }else{
        header('Location: ../Index.php');
    }
?>
<html>
    <head>
        <title>Editar tarefa</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/st_form.css">
    </head>
    <body>
        <form action="" method="post">
            <div class="form_box">
                <h1>Editar tarefa</h1>
                <label>Título</label>
                <input type="text" name="i_titulo" class="i_text" value="<?php echo $row['titulo'] ?>" required>
                <label>Descrição</label>
                <textarea name="i_descricao" cols="30" rows="10" class="i_area" required><?php echo $row['descricao'] ?></textarea>
                <label>Status da tarefa</label>
                <select name="i_status" required>
                    <?php
                        switch($row['status_tarefa']){
                            case "P":
                                echo "<option value='P' selected>Pendente</option>";
                                echo "<option value='I'>Iniciado</option>";
                                echo "<option value='C'>Concluído</option>";
                                break;
                            case "I":
                                echo "<option value='P'>Pendente</option>";
                                echo "<option value='I' selected>Iniciado</option>";
                                echo "<option value='C'>Concluído</option>";
                                break;
                            default:
                                echo "<option value='P'>Pendente</option>";
                                echo "<option value='I'>Iniciado</option>";
                                echo "<option value='C' selected>Concluído</option>";
                        }
                    ?>
                </select>
                
                <input type="submit" value="Salvar edição" class="btt_form">

                <a href="listar_tarefa.php">Voltar</a>
            </div>
            
        </form>

    </body>

</html>
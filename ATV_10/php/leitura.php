<?php

    include "conexao.php";

    $sql = "select * from produto";
    $resposta - $conxao->query($sql);

    if(mysqli_num_rows($resposta) > 0){

        ?>

        <html>
            
            <head>
                <title>Lista de produtos</title>
                <meta charset="utf-8">
                <style>
                    table{
                        margin: auto;
                    }
                    td{
                        min-width: 100px;
                    }
                </style>
            </head>

            <body>

                <table border="1">
                    <tr>
                        <td>CÓDIGO</td>
                        <td>NOME</td>
                        <td>QUANTIDADE</td>
                        <td>PREÇO</td>
                        <td colspan="2">OPÇÕES</td>
                    </tr>
                    <?php

                    while($row = mysqli_fetch_assoc($resposta)){
                        ?>

                        <tr>
                            <td> <?php echo $row["cod_prod"] ?> </td>
                            <td> <?php echo $row["nome"] ?> </td>
                            <td> <?php echo $row["quantidade"] ?> </td>
                            <td> <?php echo $row["preco"] ?> </td>
                            <td> <a href="editar.php?cod_prod=<?php echo $row["cod_prod"] ?>">Editar</td>
                            <td> <a href="">Excluir</td>
                        </tr>

                        <?php
                    }

                    ?>
                    
                    <tr>
                        <td colspan="6">
                            <a href="../Index.html">Voltar</a>
                        </td>
                    </tr>

                </table>

            </body>

        </html>

        <?php

    }else{
        echo "Nenhum valor encontrado";
    }

?>
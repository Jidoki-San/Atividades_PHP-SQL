<?php

    include('verifica_login.php');

?>

<h1> Olá <?php echo $_SESSION['usuario']; ?>, Seja bem vindo!!</h1>
<a href="logout.php">Sair</a>
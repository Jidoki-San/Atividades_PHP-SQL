<?php
    if($_GET) {
        $login = $_GET['login'];
        $senha = $_GET['senha'];
        
    }
?>

<html>

    <head>
        <meta charset="utf-8">
        <title> GET e POST </title>
    </head>

    <body>
        <form action="" method="GET">
            <import type="test" name="login" placeholder="login">    
            <import type="password" name="senha" placeholder="senha">        
            <import type="submit" name="enviar">
        </form>
    </body>

</html>
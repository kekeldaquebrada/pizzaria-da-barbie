<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Fazer Login</h1>
    <form action="login.php">
        <Label>Usuario</Label>
        <input type="text" name="fusuario"><br>
        <Label>Senha</Label>
        <input type="text" name="fsenha"><br>
        <input type="submit" value ="Entrar">
    <a href="index.php">Consultar agenda </a>
    <?php
    echo "Fazer Login"
    ?>
    <?php
    include "conexao.php";
    ?>
</body>
</html>
<?php
    include "conexao.php";

    // Inicializa a sessão
//session_start();

// Verifica se o formulário de login foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o nome de usuário e senha do formulário
    $usuario = mysqli_real_escape_string($conn, $_POST["fusuario"]);
    $senha = mysqli_real_escape_string($conn, $_POST["fsenha"]);

    // Consulta o banco de dados para verificar se o usuário e senha correspondem a um registro
    $sql = "SELECT id FROM usuarios WHERE nome = '$usuario' AND senha = '$senha'";
    $result = mysqli_query($conn, $sql);

    // Verifica se a consulta retornou algum resultado
    if (mysqli_num_rows($result) == 1) {
        // Inicia a sessão com o ID do usuário
        $row = mysqli_fetch_assoc($result);
        $_SESSION["user_id"] = $row["id"];

        // Redireciona para a página de cadastro
        header("Location: contato.php");
        exit();
    } else {
        // Exibe uma mensagem de erro caso o usuário e senha não correspondam a um registro
        $login_error = "Nome de usuário ou senha inválidos.";
    }
}

    ?>
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

    <form action="login.php" method="post">
    <label> Usuario</label><br>
        <input type="text" name="fusuario"><br>
        <label> Senha</label><br>
        <input type="text" name="fsenha"><br>
        <input type="submit" value="Entrar">
        </form>
    <a href="index.php">Consultar agenda </a>
    <?php
    echo "Fazer Login"
    ?>
    
</body>
</html>
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
<<<<<<< HEAD
    <form action="login.php" method="post">
  <div class="imgcontainer">
    
  </div>

  <div class="container">
    <label for="uname"><b>Usuario</b></label>
    <input type="text" placeholder="Enter Username" name="fusuario" required>

    <label for="psw"><b>Senha</b></label>
    <input type="password" placeholder="Enter Password" name="fsenha" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancelar</button>
    <span class="psw">Forgot <a href="#">senha?</a></span>
  </div>
</form>
    <a href="index.php">Consultar agenda </a>
    <?php
    echo "Fazer Login"
    ?>
    <?php
    include "conexao.php";
    ?>
</body>
</html>
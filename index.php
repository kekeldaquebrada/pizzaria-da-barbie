    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LGBTS</title>
</head>
<body>
    <H1>SOMOS GAYS</H1>
    <?php
    //Bruna, Gabriel Rodrigues, Raquel e Thiago dantas 
    echo "isso é inclusão social"
    ?>
    <?php 
    $servername="localhost";
    $username="PizzariadaBarbie";
    $password="barbie123";
    //cria conexão
    $conn=new mysqli($servername, $username, $password);
    //testa conexão
    if ($conn->connect_error){
        die("conexão com db falhou:".$conn->connect_error);
    }
    echo "conectado ao db";
    ?>
</body>
</html>
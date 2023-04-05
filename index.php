<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>BARBIE</title>
</head>
<body>
<img src="images.png" alt="Barbie" width="100" height="100">
    <H1>PIZZARIA DA BARBIE</H1>
    <?php
    //Bruna, Gabriel Rodrigues, Raquel e Thiago dantas 
    echo "Clientes";
    ?>
    <?php 
    $servername="localhost";
    $username="id20480765_barbiemodaemagia";
    $password="Barb!e123456";
    $nomedb="id20480765_pizzariadabarbie";
    //cria conexão
    $conn=new mysqli($servername, $username, $password,$nomedb);
    //testa conexão
    if ($conn->connect_error){
        die("conexão com db falhou:".$conn->connect_error);
    }
    //echo "conectado ao db";
    //visualizar tabela
    $sql="SELECT nome, sobrenome, telefone FROM agenda";
    $result=$conn->query($sql);
    if ($result->num_rows>0){
        while ($row=$result->fetch_assoc()){
            echo "nome:". $row["nome"]. " sobrenome:". $row["sobrenome"]. " telefone:". $row["telefone"]."<br>";

        }   
    } else {
        echo "tabela vazia";
    }
    ?>
    <a href="contato.php"> Inserir clientes</a>
    <a href="login.php"> iniciar sessão</a>
    <a href="log2.php"> Cadastrar</a>
</body>
</html>

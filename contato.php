<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Barbie pizzas</title>
</head>
<body>
    <h1> Inserir contato</h1>
    <form action="contato.php">
        <label> Nome:</label><br>
        <input type="text" name="fnome"><br>
        <label> Sobrenome:</label><br>
        <input type="text" name="fsobrenome"><br>
        <label> Telefone:</label><br>
        <input type="text" name="ftelefone"><br>
        <input type="submit" value="Gravar">
</form>
<a href="index.php">Consultar agenda </a>
<?php 
include "conexao.php";
?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //Coleta Dados do formulario
    $nome=$_POST["fnome"];
    $sobrenome=$_POST["fsobrenome"];
    $telefone=$_POST["ftelefone"];
    //inserir dados na tabela
    $sql="INSERT into agenda(nome, sobrenome, telefone) VALUES('$snome', '$sobrenome', '$telefone')";
    if($conn->query($sql)===TRUE){
        echo "Dados inseridos com sucesso"."<br>";
    } else {
        echo "Erro ao inserir os dados:".$conn->error;
    }
}
$conn->close ();

?>


</body>
</html>
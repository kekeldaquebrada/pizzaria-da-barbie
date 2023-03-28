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
echo "conectado ao db";
?>
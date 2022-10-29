<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname="estacionamento";

$conn = new mysqli($servername, $username, $password, $dbname);
//$conexao=mysqli_connect($servername, $username, $password,$dbname);
if(!$conn){
    die("houve um erro: ".mysqli_connect_error());
}else
    echo "conectado com sucesso";
?>
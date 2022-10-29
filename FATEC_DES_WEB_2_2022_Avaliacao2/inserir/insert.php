<?php

require_once("../dados_banco.php");

$marca=$_POST['marca'];
$ano=$_POST['ano'];
$placa=$_POST['placa'];
$chassi=$_POST['chassi'];

$sql ="INSERT INTO automoveis(marca, ano, placa, chassi) VALUES ('$marca', '$ano', '$placa', '$chassi')";

if(mysqli_query($conn, $sql)){
    echo " cadastrado com sucesso";
}else{
    echo "erro".mysqli_connect_error($conexao);
}
mysqli_close($conn);

?>
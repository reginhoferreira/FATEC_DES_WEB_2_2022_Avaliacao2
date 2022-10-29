<?php 

require_once("protect.php");
require_once("../dados_banco.php");

if (isset($_POST['marca']) and isset($_POST['ano']) and isset($_POST['placa']) and isset($_POST['chassi'])){
    $_POST['marca'];
    $_POST['ano'];
    $_POST['placa'];
    $_POST['chassi'];
    $filename = "arquivos.txt";
    if(!file_exists("arquivos.txt")){
        $handle = fopen("arquivos.txt", "w");
    } else {
        $handle = fopen("arquivos.txt", "a");
    }
    
    fwrite($handle, $_POST['marca'] . "\n");
    fwrite($handle,$_POST['ano'] ."\n"); 
    fwrite($handle,$_POST['placa'] . "\n");
    fwrite($handle,$_POST['chassi'] . "\n");
    fflush($handle);
    fclose($handle);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>

<form method="POST" action="insert.php" enctype="multipart/form-data">
        <h2>Cadastro de Automoveis semi-novos</h2>
        <p>Realize o cadastro</p>
        
        <form action="insert.php" method="POST">
            
                <label for="">Marca</label>
                <input type="text" name="marca">
                <br>
                <label for="">Ano</label>
                <input type="text" name="ano">
                <br>
                <label for="">Placa</label>
                <input type="text" name="placa">
                <br>
                <label for="">Chassi</label>
                <input type="text" name="chassi">
           
                <br>
                <button>Cadastrar</button>
                <a href="bem_vindo.php" class="btn btn-primary">Voltar</a>
       
        </form>
   

</body>
</html>








<?php

require_once("protect.php");
require_once("../dados_banco.php");

?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Bem vindo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Bem vindo</h1>
      
    </div>
    <p>
        <form action="index.php"></form>
        <a href="cadastro.php" class="btn btn-primary">Realizar Cadastro</a>
        <a href="look.php" class="btn btn-success">Visualizar Cadastros</a>
        <br><br>
        
        <a href="sair.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>
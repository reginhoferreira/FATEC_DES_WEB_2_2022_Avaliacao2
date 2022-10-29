<?php

require_once("protect.php");
require_once("../dados_banco.php");



    if(isset($_POST['nome']) || isset($_POST['senha'])){
        
        if(strlen($_POST['nome'])==0) {
            echo "Preencha seu nome";
        }else if(strlen($_POST['senha']) == 0) {
            echo "Preencha sua senha";
        }else{
            $nome = $conn->real_escape_string(($_POST['nome']));
            $senha = $conn->real_escape_string(($_POST['senha']));

            $sql_code = "SELECT * FROM usuario WHERE nome = '$nome' AND senha = '$senha'";
            $sql_query = $conn->query($sql_code) or die("falha  na conexão: " . $conn->error);

            $quantidade = $sql_query->num_rows;

            if($quantidade ==1) {
                
                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)) {
                    session_start();
                }
                
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];
                header("location:bem_vindo.php");
            }else{
                echo "Falha ao logar! e-mail ou senha incorretos";
            }
        }
            
    }
    


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<div class="wrapper">
        <h2>Acessar</h2>
        
        <form action="" method="post">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="senha">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Entrar">
            </div>
        </form>
    </div>    
</body>
</html>
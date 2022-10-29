<?php
require_once("../dados_banco.php");


if(!isset($_SESSION)) {
    session_start();
}


if(isset($_SESSION['senha'])){
    die("Voce não pode aceessar esta pagina porque voce nao esta logado. <p><a href=\"index.php\">Entrar</a></p>");
}

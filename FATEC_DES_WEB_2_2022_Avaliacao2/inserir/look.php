<?php

session_start();



$filename = "arquivos.txt";
if(!file_exists("arquivos.txt")){
    header("location: bem_vindo.php");
} else {
    $handle = fopen("arquivos.txt", "r");
}


$handle = fopen("arquivos.txt", "r");
while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
    }
fclose($handle);

?>
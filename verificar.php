<?php
session_start();

$usuariou = $_POST["user"];
$senha = $_POST["pw"];
if(($usuariou == "adm") && ($senha =="1234")){
    //definir um session para o usuario
    $_SESSION["usuario"]= $usuariou;
    header("Location: home.php");
}else{
    setcookie("log","Usuário ou senha invávidos.");
    header("Location: logarjesus.php");
}
<?php
session_start();
require_once('../_includes/dbconnection.php');
require_once('../_includes/logFunction.php');

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$resultadoLogin = check_login($connect, $usuario, $password);

if($resultadoLogin[0] == true){
    $_SESSION['mensagem'] = "Seja bem vindo ao nosso SG";
    $_SESSION['token'] = session_id();
    // echo "Seja bem Vindo " . ucwords($resultadoLogin[1]['nome']);
    header("Location: ../paginas/home.php");
}

?>
<?php

require_once("../_includes/dbconnection.php");

if(isset($_POST['first_name'])){
   $firstName = $_POST['first_name']; 
}
if(isset($_POST['cpf'])){
    $cpf = $_POST['cpf'];
}
if(isset($_POST['sexo'])){
    $sexo = $_POST['sexo'];
}
if(isset($_POST['email'])){
    $email = $_POST['email'];
}
if(isset($_POST['usuario'])){
    $usuario = $_POST['usuario'];
}
if(isset($_POST['matricula'])){
    $matricula = $_POST['matricula'];
}
if(isset($_POST['password'])){
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
}
if(isset($_POST['cargo'])){
    $cargo = $_POST['cargo'];
}

$sql = "INSERT INTO `usuarios` (`nome`, `cpf`, `sexo`, `email`, `usuario`, `matricula`, `password`, `cargo`) VALUES ('$firstName', '$cpf', '$sexo' ,'$email', '$usuario', '$matricula', '$password', '$cargo')";
mysqli_set_charset($connect, "utf8");

if(mysqli_query($connect, $sql)){
    mysqli_close($connect);
    header("Location: ../paginas/listUsers.php");
}

?>
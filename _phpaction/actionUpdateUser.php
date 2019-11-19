<?php

require_once("../_includes/dbconnection.php");

if(isset($_POST['id'])){
    $id = $_POST['id']; 
 }
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

if(isset($_POST['cargo'])){
    $cargo = $_POST['cargo'];
}

$sql = "UPDATE usuarios SET nome='$firstName', cpf='$cpf', sexo='$sexo', email='$email', usuario='$usuario', matricula='$matricula', cargo='$cargo' WHERE id='$id'";
mysqli_set_charset($connect, "utf8");

var_dump($sql);

if(mysqli_query($connect, $sql)){
    mysqli_close($connect);
    header("Location: ../paginas/listUsers.php");
}

?>
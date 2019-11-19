<?php

require_once('../classes/Users.php');

$usuario = new Usuarios();

if(isset($_POST['id'])){
    $id = $_POST['id']; 
 }
if(isset($_POST['first_name'])){
    $usuario->setNome($_POST['first_name']); 
}
if(isset($_POST['cpf'])){
    $usuario->setCpf($_POST['cpf']);
}
if(isset($_POST['sexo'])){
    $usuario->setSexo($_POST['sexo']);
}
if(isset($_POST['email'])){
    $usuario->setEmail($_POST['email']);
}
if(isset($_POST['usuario'])){
    $usuario->setUser($_POST['usuario']);
}
if(isset($_POST['matricula'])){
    $usuario->setMatricula($_POST['matricula']);
}

if(isset($_POST['cargo'])){
    $usuario->setCargo($_POST['cargo']);
}

if($usuario->update($id)){
    header("Location: ../paginas/listUsers.php");
}

?>
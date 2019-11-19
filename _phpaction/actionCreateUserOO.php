<?php

require_once("../classes/Users.php");

$usuario1 = new Usuarios();

$firstName = $_POST['first_name']; 
$cpf = $_POST['cpf'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$matricula = $_POST['matricula'];
$password =$_POST['password'];
$cargo = $_POST['cargo'];

$usuario1->setNome($firstName);
$usuario1->setCpf($cpf);
$usuario1->setSexo($sexo);
$usuario1->setEmail($email);
$usuario1->setUser($usuario);
$usuario1->setMatricula($matricula);
$usuario1->setPassword($password);
$usuario1->setCargo($cargo);

if($usuario1->insert()){
    echo "Usuario foi criado";
}else{
    echo "Usuario foi não hein...";
}
?>
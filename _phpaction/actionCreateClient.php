<?php
session_start();
require_once("../_includes/dbconnection.php");

if(isset($_POST['first_name'])){
   $firstName = $_POST['first_name']; 
}
if(isset($_POST['last_name'])){
    $last_name = $_POST['last_name']; 
}
if(isset($_POST['cpf'])){
    $cpf = $_POST['cpf'];
}
if(isset($_POST['rg'])){
    $rg = $_POST['rg'];
}else{
    $rg = NULL;
}
if(isset($_POST['sexo'])){
    $sexo = $_POST['sexo'];
}
if(isset($_POST['date'])){
    $date = date('Y-m-d', strtotime($_POST['date']));
}
if(isset($_POST['telefone'])){
    $telefone = $_POST['telefone'];
}else{
    $telefone = NULL;
}
if(isset($_POST['celular'])){
    $celular = $_POST['celular'];
}else{
    $celular = NULL;
}
if(isset($_POST['email'])){
    $email = $_POST['email'];
}
if(isset($_POST['cep'])){
    $cep = $_POST['cep'];
}
if(isset($_POST['logradouro'])){
    $logradouro = $_POST['logradouro'];
}
if(isset($_POST['numero'])){
    $numero = $_POST['numero'];
}
if(isset($_POST['complemento'])){
    $complemento = $_POST['complemento'];
}else{
    $complemento = NULL;
}
if(isset($_POST['bairro'])){
    $bairro = $_POST['bairro'];
}
if(isset($_POST['cidade'])){
    $cidade = $_POST['cidade'];
}
if(isset($_POST['uf'])){
    $uf = $_POST['uf'];
}
if(isset($_POST['referencia'])){
    $referencia = $_POST['referencia'];
}
$sql = "INSERT INTO `clientes` (`nome`, `sobrenome`, `cpf`, `rg`, `sexo`, `datanascimento`, `telefone`, `celular`, `email`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `referencia`) VALUES ('$firstName', '$last_name', '$cpf', '$rg', '$sexo' ,'$date', '$telefone', '$celular', '$email', '$cep', '$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$uf', '$referencia')";
mysqli_set_charset($connect, "utf8");

if(mysqli_query($connect, $sql)){
    $_SESSION['mensagem'] = "Cadastro realizado com sucesso!!";
    header('Location: ../paginas/listClients.php');
}

echo "Teste para o git";
?>
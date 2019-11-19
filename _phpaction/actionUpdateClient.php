<?php

require_once('../_includes/dbconnection.php');

if(isset($_POST['id'])){
    $id = $_POST['id']; 
 }

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

 $sql = "UPDATE clientes SET nome='$firstName', sobrenome='$last_name', cpf='$cpf', rg='$rg', sexo='$sexo', datanascimento='$date', telefone='$telefone', celular='$celular', email='$email', cep='$cep', logradouro='$logradouro', numero='$numero', complemento='$complemento', bairro='$bairro', cidade='$cidade', uf='$uf', referencia='$referencia' WHERE id='$id'";

mysqli_set_charset($connect, "utf8");

if(mysqli_query($connect, $sql)){
    mysqli_close($connect);
    header("Location: ../paginas/listClients.php");
}


?>


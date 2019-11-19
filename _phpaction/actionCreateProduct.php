<?php

require_once("../_includes/dbconnection.php");

if(isset($_POST['first_name'])){
   $firstName = $_POST['first_name']; 
}
if(isset($_POST['categoria'])){
    $categoria = $_POST['categoria'];
}
if(isset($_POST['preco'])){
    $preco = $_POST['preco'];
}
if(isset($_POST['estoque'])){
    $estoque = $_POST['estoque'];
}
if(isset($_POST['unidade'])){
    $unidade = $_POST['unidade'];
}
if(isset($_POST['descricao'])){
    $descricao = $_POST['descricao'];
}

date_default_timezone_set('America/Sao_Paulo');

if(isset($_FILES['photoProduct'])){
	$ext = strtolower(substr($_FILES['photoProduct']['name'], -4));
	$new_name = date("Y.m.d-H.i.s")."-image" . $ext;
	$dir = '../assets/imgs/';
	$urlfoto = $dir.$new_name;
	move_uploaded_file($_FILES['photoProduct']['tmp_name'], $urlfoto);
}

$sql = "INSERT INTO produtos (nome, categoria, preco, estoque, descricao, urlfoto, unidade) VALUES ('$firstName', '$categoria', '$preco' ,'$estoque', '$descricao', '$urlfoto', '$unidade')";
mysqli_set_charset($connect, "utf8");

if(mysqli_query($connect, $sql)){
    echo "Cadastro com sucesso";
}

?>
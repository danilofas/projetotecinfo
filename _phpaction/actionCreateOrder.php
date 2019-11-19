<?php
session_start();
require_once('../_includes/dbconnection.php');

if(isset($_POST['idCliente'])){
    $idCliente = $_POST['idCliente'];
}
if(isset($_POST['idUsuario'])){
    $idUsuario = $_POST['idUsuario'];
}
if(isset($_POST['idProduto'])){
    $idProduto = $_POST['idProduto'];
}
date_default_timezone_set('America/Sao_Paulo');

$date = date('Y-m-d H:i:s', time());

$sql = "INSERT INTO pedidos (idCliente, idUsuario, idProduto, date_create) VALUES ('$idCliente', '$idUsuario', '$idProduto', '$date')";

if(mysqli_query($connect, $sql)){
    $_SESSION['mensagem'] = 'Pedido cadastrado com sucesso';
    header('Location: ../paginas/listOrders.php');
}
?>
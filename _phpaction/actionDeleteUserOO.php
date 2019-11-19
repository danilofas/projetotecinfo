<?php
session_start();

require_once('../classes/Users.php');

$usuario = new Usuarios();
$id = $_POST['id'];
// $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

if($usuario->delete($id)){
    $_SESSION['mensagem'] = "Usuário apagado com sucesso!";
    header("Location: ../paginas/listUsersOO.php");
}

?>
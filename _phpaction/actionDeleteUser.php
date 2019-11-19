<?php

require_once('../_includes/dbconnection.php');

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $sql = "DELETE FROM usuarios WHERE id = '$id'";
    if(mysqli_query($connect, $sql)){
        mysqli_close($connect);
        header("Location: ../paginas/listUsers.php");
    }
}

?>
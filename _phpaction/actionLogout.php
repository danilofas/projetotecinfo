<?php

    session_start();

    if(empty($_SESSION['token'])){
        header("Location: ../index.php");
    }

    session_destroy();
    unset($_SESSION['token']);
    session_register_shutdown();
  
    header('Location: ../index.php');
?>
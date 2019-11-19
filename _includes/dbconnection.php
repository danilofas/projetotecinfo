<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "projetotecinfo";

$connect = mysqli_connect($server, $user, $password, $database);

if(mysqli_connect_error($connect)){
	echo "Erro na conexão ". mysqli_connect_error();
}

?>
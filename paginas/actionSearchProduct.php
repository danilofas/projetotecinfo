<?php
include_once '../_includesphp';

$assunto = filter_input(INPUT_GET, 'term', FILTER_SANITIZE_STRING);

//SQL para selecionar os registros
$result_msg_cont = "SELECT nome FROM produtos WHERE nome LIKE '%".$assunto."%' ORDER BY nome ASC LIMIT 7";

//Seleciona os registros
$resultado_msg_cont = $conn->prepare($result_msg_cont);
$resultado_msg_cont->execute();

while($row_msg_cont = $resultado_msg_cont->fetch(PDO::FETCH_ASSOC)){
    $data[] = $row_msg_cont['nome'];
}

echo json_encode($data);
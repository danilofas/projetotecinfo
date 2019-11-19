<?php

require_once('../_includes/connectionPDO.php');

$produtoBuscado = "c";//filter_input(INPUT_GET, 'term', FILTER_SANITIZE_STRING);

$sql = "SELECT nome FROM produtos WHERE nome LIKE '%' .$produtoBuscado. '%' ORDER BY nome ASC LIMIT 7";

$sql = $conn->prepare($sql);
$sql->execute();

while($rowDados = $sql->fetch(PDO::FETCH_ASSOC)){
    $dados[] = $rowDados['nome'];
}

echo json_encode($dados);


?>
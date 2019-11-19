<?php
include_once('../_includes/mensagem.php');
$page_title = "Lista de pedidos";
include_once('../_includes/header.php');
require_once('../_includes/dbconnection.php');

#Definir quantidade de registros apresentados
$display = 5;

if(isset($_GET['p']) && is_numeric($_GET['p'])){
    $pages = $_GET['p'];
}else{
    $sql = "SELECT COUNT(id) FROM pedidos";
    $r = mysqli_query($connect,$sql);
    $resultado = mysqli_fetch_array($r, MYSQLI_NUM);
    $registros = $resultado[0];

    if($registros > $display){
        $pages = ceil($registros/$display);
    }else{
        $pages = 1;
    }
}

if(isset($_GET['s']) && is_numeric($_GET['s'])){
    $start = $_GET['s'];
}else{
    $start = 0;
}

$sql = "SELECT * FROM pedidos ORDER BY id ASC LIMIT $start, $display";
mysqli_set_charset($connect, "utf8");
$resultadoListaPedidos = mysqli_query($connect, $sql);

?>

    <div class="container">
        <div class="row">
            <table class="striped">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Cliente</th>
                        <th>Vendedor</th>
                        <th>Produto</th>
                        <th>Data</th>
                        <th colspan="2" align="center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // $sql = "SELECT * FROM Pedidos";
                    // mysqli_set_charset($connect, "utf8");

                    // $resultadoPedidos = mysqli_query($connect, $sql);

                    while($rowDados = mysqli_fetch_assoc($resultadoListaPedidos)){
                    ?>
                        <tr>
                            <td><?php echo $rowDados['id']; ?></td>
                            <td><?php
                            $idCliente = $rowDados['idCliente'];
                            $sql = "SELECT nome,sobrenome FROM clientes WHERE id = '$idCliente'";
                            mysqli_set_charset($connect, "utf8");
                            $resultClientes = mysqli_query($connect, $sql);
                            $rowClientes = mysqli_fetch_assoc($resultClientes);
                            echo ucwords($rowClientes['nome'] . " " . $rowClientes['sobrenome']); ?></td>
                            <td><?php echo $rowDados['idUsuario']; ?></td>
                            <td><?php echo $rowDados['idProduto']; ?></td>
                            <td><?php echo date('d-m-Y', strtotime($rowDados['date_create'])); ?></td>
                            <td><a href="editarClient.php?id=<?php echo $rowDados['id']; ?>" class="btn-floating grey"><i class="material-icons">edit</i></a></td>
                            <td><a title="Deletar cliente?" href="#modal?id=<?php echo $rowDados['id']; ?>" class="btn-floating red waves-effect waves-light btn modal-trigger"><i class="material-icons">delete</i></a></td>
                            
                            <!-- Modal Structure -->
                            <div id="modal?id=<?php echo $rowDados['id']; ?>" class="modal">
                                <div class="modal-content">
                                <h4>Tem certeza que deseja apagar esse cliente?</h4>
                                    <form action="../_phpaction/actionDeleteClient.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $rowDados['id']; ?>" />
                                        <div class="modal-footer">
                                        <button type="submit" class="btn red">Excluir</button>
                                        <a href="listClients.php" class="modal-close waves-effect waves-green btn green">Cancelar</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>

<?php
    mysqli_free_result($resultadoListaPedidos);
    mysqli_close($connect);

    if($pages > 1){

        echo '<br/><p style="text-align: center;">';

        $paginaAtual = ($start/$display)+1;

        if($paginaAtual != 1){
            echo '<a href="listOrders.php?s=' . ($start - $display) . '&p=' . $pages . '">Anterior</a>';
        }

        for($i = 1; $i <= $pages; $i++){
            if($i != $paginaAtual){
                echo '<a href="listOrders.php?s='.(($display * ($i - 1))) .'&p=' . $pages . '">' . $i . '<a/>';
            }else{
                echo $i . ' ';
            }
        }

        if($paginaAtual != $pages){
            echo '<a href="listOrders.php?s=' . ($start + $display) . '&p=' . $pages .'">Próxima</a>';
        }
        echo "</p>";
    }
    include_once('../_includes/footer.php')

?>
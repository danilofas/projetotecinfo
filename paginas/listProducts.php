<?php
$page_title = "Lista de produtos";
include_once('../_includes/header.php');
require_once('../_includes/dbconnection.php');

?>

    <div class="container">
        <div class="row">
            <table class="striped">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Preço</th>
                        <th>Estoque</th>
                        <th>Unidade</th>
                        <th colspan="2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM produtos";
                    mysqli_set_charset($connect, "utf8");

                    $resultadoProdutos = mysqli_query($connect, $sql);

                    while($rowDados = mysqli_fetch_assoc($resultadoProdutos)){
                    ?>
                        <tr>
                            <td><img src="<?php echo $rowDados['urlfoto']; ?>" width="100px"/></td>
                            <td><?php echo ucwords($rowDados['nome']); ?></td>
                            <td><?php echo $rowDados['categoria']; ?></td>
                            <td><?php echo "R$".number_format($rowDados['preco'],"2",",","."); ?></td>
                            <td><?php echo $rowDados['estoque']; ?></td>
                            <td><?php echo $rowDados['unidade'];?></td>
                            <td><a href="editarProduct.php?id=<?php echo $rowDados['id']; ?>" class="btn-floating grey"><i class="material-icons">edit</i></a></td>
                            <td><a title="Deletar produto?" href="#modal?id=<?php echo $rowDados['id']; ?>" class="btn-floating red waves-effect waves-light btn modal-trigger"><i class="material-icons">delete</i></a></td>

                            <!-- Modal Structure -->
                            <div id="modal?id=<?php echo $rowDados['id']; ?>" class="modal">
                                <div class="modal-content">
                                <h4>Tem certeza que deseja apagar esse produto?</h4>
                                    <form action="../_phpaction/actionDeleteProduct.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $rowDados['id']; ?>" />
                                        <div class="modal-footer">
                                        <button type="submit" class="btn red">Excluir</button>
                                        <a href="listProducts.php" class="modal-close waves-effect waves-green btn green">Cancelar</a>
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
    mysqli_close($connect);
    include_once('../_includes/footer.php')

?>
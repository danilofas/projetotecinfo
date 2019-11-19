<?php

$page_title = "Cadastro de pedidos";
include_once('../_includes/header.php');
require_once('../_includes/dbconnection.php');

?>

<div class="container">
    <div class="row">
        <form action="../_phpaction/actionCreateOrder.php" method="post">
            <div class="row">
                <div class="input-field col s6">
                <select name="idCliente">
                    <option value="" disabled selected>Selecione</option>
                    <?php
                        $sql = "SELECT * FROM clientes ORDER BY nome ASC";
                        mysqli_set_charset($connect,"utf8");

                        $resultadoClientes = mysqli_query($connect, $sql);
                        while($rowDados = mysqli_fetch_assoc($resultadoClientes)){
                    ?>
                    <option value="<?php echo $rowDados['id']; ?>"><?php echo ucwords($rowDados['nome'] . " " .  $rowDados['sobrenome']); ?></option>
                    <?php
                        } 
                    ?>
                    </select>
                    <label>Selecione o cliente</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                <select name="idUsuario">
                    <option value="" disabled selected>Selecione</option>
                    <?php
                        $sql = "SELECT * FROM usuarios ORDER BY nome ASC";
                        mysqli_set_charset($connect,"utf8");

                        $resultadoUsuarios = mysqli_query($connect, $sql);
                        while($rowDados = mysqli_fetch_assoc($resultadoUsuarios)){
                    ?>
                    <option value="<?php echo $rowDados['id']; ?>"><?php echo ucwords($rowDados['nome']); ?></option>
                    <?php
                        } 
                    ?>
                    </select>
                    <label>Selecione o usuário</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                <select name="idProduto">
                    <option value="" disabled selected>Selecione</option>
                    <?php
                        $sql = "SELECT * FROM produtos ORDER BY nome ASC";
                        mysqli_set_charset($connect,"utf8");

                        $resultadoProdutos = mysqli_query($connect, $sql);
                        while($rowDados = mysqli_fetch_assoc($resultadoProdutos)){
                    ?>
                    <option value="<?php echo $rowDados['id']; ?>"><?php echo ucwords($rowDados['nome']); ?></option>
                    <?php
                        } 
                    ?>
                    </select>
                    <label>Selecione o produto</label>
                </div>
            </div>
            <div class="input-field col s3">
                    <button class="btn pulse waves-light red">Cadastrar</button>
            </div>
        </form>
    </div>
</div>


<?php

include_once('../_includes/footer.php');

?>
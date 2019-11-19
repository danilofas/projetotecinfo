<?php
$page_title = "Editar de produto";
include_once('../_includes/header.php');
require_once('../_includes/dbconnection.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM produtos WHERE id = '$id'";
    mysqli_set_charset($connect, "utf8");
    $resultadoProduto = mysqli_query($connect, $sql);
    $rowDados = mysqli_fetch_array($resultadoProduto);
}else{
    header("Location: listProducts.php");
}
?>

<div class="container">
        <h4>Editar produto</h4>
        <div class="row">
            <form class="col s12" action="../_phpaction/actionUpdateProduct.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">person_pin</i>
                        <input id="first_name" type="text" class="validate" name="first_name" maxlength="100" value="<?php echo $rowDados['nome']; ?>">
                        <label for="first_name">Nome</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">confirmation_number</i>
                        <input id="categoria" type="text" class="validate" name="categoria" value="<?php echo $rowDados['categoria']; ?>">
                        <label for="categoria">Categoria</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">landscape</i>
                        <input id="preco" type="number" class="validate" name="preco" min="0" step="0.01" value="<?php echo number_format($rowDados['preco'],"2",",","."); ?>">
                        <label for="preco">Preço</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">landscape</i>
                        <input id="estoque" type="number" class="validate" name="estoque" min="0" step="0.01" value="<?php echo $rowDados['estoque']; ?>">
                        <label for="estoque">Estoque</label>
                    </div>
                </div>
                <div class="row">

                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">location_city</i>
                        <input id="unidade" type="text" class="validate" name="unidade" value="<?php echo $rowDados['unidade']; ?>">
                        <label for="unidade">Unidade</label>
                    </div>
                    <div class="input-fiedl col s6">
                        <img class="materialboxed" width="150px" src="<?php echo $rowDados['urlfoto']; ?>" />
                        <input type="hidden" name="photoIn" value="<?php echo $rowDados['urlfoto']; ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix iconColor">location_city</i>
                        <textarea id="descricao" class="materialize-textarea" name="descricao"><?php echo $rowDados['descricao']; ?></textarea>
                        <label for="descricao">Descrição</label>
                    </div>
                </div>

                <div class="row">
                    <div class="file-field input-field ">
                        <div class="btn" style="background-color: #B71C1C ;">
                            <span>Foto</span>
                            <input type="file" name="photoProduct" accept="image/*">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Se deseja alterar a foto cliente no botão Foto">
                        </div>
                    </div>
                </div>
                <button class="btn waves-effect waves-light red darken-4" type="submit" name="action">Atualizar<i class="material-icons right">send</i></button>
        </div>
        <input type="hidden" name="id" value="<?php echo $rowDados['id']; ?>"/>
        </form>
    </div>

    </div>
    <?php
        include_once('../_includes/footer.php');
    ?>
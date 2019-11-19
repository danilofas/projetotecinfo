<?php

$page_title = "Cadastro de produtos";
include_once('../_includes/header.php');

?>
    <div class="container">
        <h4>Cadastro de produtos</h4>
        <div class="row">
            <form class="col s12" action="../_phpaction/actionCreateProduct.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">person_pin</i>
                        <input id="first_name" type="text" class="validate" name="first_name" maxlength="100">
                        <label for="first_name">Nome</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">confirmation_number</i>
                        <input id="categoria" type="text" class="validate" name="categoria">
                        <label for="categoria">Categoria</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">landscape</i>
                        <input id="preco" type="number" class="validate" name="preco" min="0" step="0.01">
                        <label for="preco">Preço</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">landscape</i>
                        <input id="estoque" type="number" class="validate" name="estoque" min="0" step="0.01">
                        <label for="estoque">Estoque</label>
                    </div>
                </div>
                <div class="row">

                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">location_city</i>
                        <input id="unidade" type="text" class="validate" name="unidade">
                        <label for="unidade">Unidade</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix iconColor">location_city</i>
                        <textarea id="descricao" class="materialize-textarea" name="descricao"></textarea>
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
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>

                <button class="btn waves-effect waves-light red darken-4
                    " type="submit" name="action">Cadastrar
                            <i class="material-icons right">send</i>
                        </button>
        </div>

        </form>
    </div>

    </div>



    <?php

include_once('../_includes/footer.php');

?>
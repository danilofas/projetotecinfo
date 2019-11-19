<?php
$page_title = "Editar de usuário";
include_once('../_includes/header.php');
require_once('../_includes/dbconnection.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    mysqli_set_charset($connect, "utf8");
    $resultadoUsuario = mysqli_query($connect, $sql);
    $rowDados = mysqli_fetch_array($resultadoUsuario);
}else{
    header("Location: listUsers.php");
}
?>


<div class="container">
        <h4>Atualizar de usuário</h4>
        <div class="row">
            <form class="col s12" action="../_phpaction/actionUpdateUserOO.php" method="post">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">person_pin</i>
                        <input id="first_name" type="text" class="validate" name="first_name" maxlength="100" value="<?php echo $rowDados['nome']; ?>">
                        <label for="first_name">Nome</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">confirmation_number</i>
                        <input id="cpf" type="text" readOnly class="validate" name="cpf" maxlength="14" value="<?php echo $rowDados['cpf']; ?>">
                        <label for="cpf">CPF</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <p>
                            <i class="material-icons prefix iconColor">wc</i>
                            <label>Sexo</label>
                        </p>
                        <p>
                            <label>
                            <input name="sexo" type="radio" value="m" <?php echo $rowDados['sexo']=="m" ? "checked" : ''; ?> />
                            <span>Masculino</span>
                            </label>
                            <label>
                            <input name="sexo" type="radio" value="f" <?php echo $rowDados['sexo']=="f" ? "checked" : ''; ?>/>
                            <span>Feminino</span>
                            </label>
                        </p>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">landscape</i>
                        <input id="matricula" readOnly type="text" class="validate" name="matricula" value="<?php echo $rowDados['matricula']; ?>">
                        <label for="matricula">Matricula</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s3">
                        <i class="material-icons prefix iconColor">landscape</i>
                        <input id="usuario" type="text" readOnly class="validate" name="usuario" value="<?php echo $rowDados['usuario']; ?>">
                        <label for="usuario">Usuario</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">email</i>
                        <input id="email" type="email" readOnly class="validate" name="email" value="<?php echo $rowDados['email']; ?>">
                        <label for="email">E-mail</label>
                    </div>
                    <div class="input-field col s3">
                        <i class="material-icons prefix iconColor">location_city</i>
                        <input id="cargo" type="text" class="validate" name="cargo" value="<?php echo $rowDados['cargo']; ?>">
                        <label for="cargo">Cargo</label>
                    </div>
                    <div class="input-field col s12">
                        <!-- Modal Trigger -->
                        <button data-target="modal1" class="btn modal-trigger waves-effect waves-light blue darken-3">Alterar Senha</button>
                        <!-- Modal Structure -->
                        <div id="modal1" class="modal">
                            <div class="modal-content">
                            <h4>Digite sua senha:</h4>
                            <div class="input-field col s6">
                                <form action="../_phpaction/actionUpdatePassword.php" method="post">
                                    <input id="password" type="password" class="validate" name="password"/>
                                    <label for="password">Senha</label>
                                    <button type="submit" class="btn green waves-green">Atualizar</button>
                                    <a href="#!" class="modal-close waves-effect waves-green"><button type="button" class="btn red waves-green">Cancelar</button></a>
                                    </form>
                            </div>                      
                            
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $rowDados['id']; ?>"/>
                </div>
                <p align="center"><button class="btn pulse waves-effect waves-light red darken-4
                    " type="submit" name="action">Atualizar
                            <i class="material-icons right">send</i>
                        </button></p>
        </div>

        </form>
    </div>

    </div>



    <?php

include_once('../_includes/footer.php');

?>
<?php

$page_title = "Cadastro de usuarios";
include_once('../_includes/header.php');

?>
    <div class="container">
        <h4>Cadastro de usuários</h4>
        <div class="row">
            <form class="col s12" action="../_phpaction/actionCreateUserOO.php" method="post" onsubmit="return validaSenha(password.value, testPassword.value);">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">person_pin</i>
                        <input id="first_name" type="text" class="validate" name="first_name" maxlength="100">
                        <label for="first_name">Nome</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">confirmation_number</i>
                        <input id="cpf" type="text" class="validate" name="cpf" maxlength="14">
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
                            <input name="sexo" type="radio" value="m" />
                            <span>Masculino</span>
                            </label>
                            <label>
                            <input name="sexo" type="radio" value="f" />
                            <span>Feminino</span>
                            </label>
                        </p>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">landscape</i>
                        <input id="matricula" type="text" class="validate" name="matricula">
                        <label for="matricula">Matricula</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s3">
                        <i class="material-icons prefix iconColor">landscape</i>
                        <input id="usuario" type="text" class="validate" name="usuario">
                        <label for="usuario">Usuario</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">email</i>
                        <input id="email" type="email" class="validate" name="email">
                        <label for="email">E-mail</label>
                    </div>
                    <div class="input-field col s3">
                        <i class="material-icons prefix iconColor">location_city</i>
                        <input id="cargo" type="text" class="validate" name="cargo">
                        <label for="cargo">Cargo</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix iconColor">card_travel</i>
                        <input id="password" type="password" class="validate" name="password">
                        <label for="password">Senha</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix iconColor">format_align_justify</i>
                        <input id="testPassword" type="password" class="validate" name="testPassword">
                        <label for="testPassword">Senha novamente</label>
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
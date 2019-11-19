<?php
session_start();
$page_title = "Cadastro de clientes";
include_once('../_includes/header.php');

?>
    <div class="container">
        <h4>Cadastro de clientes</h4>
        <!-- <h5>Seja bem vindo <?php echo $_SESSION['nomePessoa'] . " e seu token é " . $_SESSION['token']; ?> -->
        <div class="row">
            <form class="col s12" action="../_phpaction/actionCreateClient.php" method="post">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">person_pin</i>
                        <input id="first_name" type="text" class="validate" name="first_name" maxlength="100">
                        <label for="first_name">Nome</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">person_pin</i>
                        <input id="last_name" type="text" class="validate" name="last_name">
                        <label for="last_name">Sobrenome</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">confirmation_number</i>
                        <input id="cpf" type="text" class="validate" name="cpf" maxlength="14">
                        <label for="cpf">CPF</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">confirmation_number</i>
                        <input id="rg" type="text" class="validate" name="rg">
                        <label for="rg">RG</label>
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
                        <i class="material-icons prefix iconColor">date_range</i>
                        <label for="date">Data de nascimento</label>
                        <input type="text" readonly class="datepicker" id="date" name="date">

                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s3">
                        <i class="material-icons prefix iconColor">local_phone</i>
                        <input id="telefone" type="text" class="validate" name="telefone">
                        <label for="telefone">Telefone</label>
                    </div>
                    <div class="input-field col s3">
                        <i class="material-icons prefix iconColor">phone_iphone</i>
                        <input id="celular" type="text" class="validate" name="celular">
                        <label for="celular">Celular</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">email</i>
                        <input id="email" type="email" class="validate" name="email">
                        <label for="email">E-mail</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">location_on</i>
                        <input id="cep" type="text" class="validate" name="cep">
                        <label for="cep">Cep</label>
                    </div>
                    <div class="input-field col s6">
                        <p align="center"> <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/buscaCep.cfm" target="_blank"> <button class="btn waves-effect waves-light red" type="button">Não sei o meu cep</button></a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <i class="material-icons prefix iconColor">home</i>
                        <input id="logradouro" type="text" value=" " readonly class="validate" name="logradouro">
                        <label for="logradouro">Logradouro</label>
                    </div>
                    <div class="input-field col s2">
                        <i class="material-icons prefix iconColor">format_list_numbered
                            </i>
                        <input id="numero" type="number" class="validate" name="numero">
                        <label for="numero">Número</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">near_me</i>
                        <input id="complemento" type="text" class="validate" name="complemento">
                        <label for="complemento">Complemento</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <i class="material-icons prefix iconColor">landscape</i>
                        <input id="bairro" type="text" value=" " readonly class="validate" name="bairro">
                        <label for="bairro">Bairro</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">location_city</i>
                        <input id="cidade" type="text" value=" " readonly class="validate" name="cidade">
                        <label for="cidade">Cidade</label>
                    </div>
                    <div class="input-field col s2">
                        <i class="material-icons prefix iconColor">card_travel</i>
                        <input id="uf" type="text" value=" " readonly class="validate" name="uf">
                        <label for="uf">UF</label>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix iconColor">format_align_justify</i>
                            <textarea id="referencia" class="materialize-textarea" name="referencia"></textarea>
                            <label for="referencia">Referência</label>
                        </div>
                    </div>
                    <button class="btn pulse waves-effect waves-light red darken-4
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
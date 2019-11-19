<?php

require_once('../classes/Clients.php');
$page_title = "Resultado da Pequisa por CPF do cliente";
include_once('../_includes/header.php');

$cliente = new Clientes();

if(isset($_POST['cpfBuscado'])){
    $cpfBuscado = trim($_POST['cpfBuscado']);
}

$resultado = $cliente->searchAnotherData("cpf",$cpfBuscado);

?>

<div class="container">
        <h4>Resultado da pesquisa de cliente</h4>
        <div class="row">
            <form class="col s12" action="../_phpaction/actionUpdateClient.php" method="post">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">person_pin</i>
                        <input id="first_name" readOnly type="text" class="validate" name="first_name" maxlength="100" value="<?php echo $resultado->nome ?>">
                        <label for="first_name">Nome</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">person_pin</i>
                        <input id="last_name" type="text" class="validate" name="last_name" value="<?php echo $resultado->sobrenome ?>">
                        <label for="last_name">Sobrenome</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">confirmation_number</i>
                        <input id="cpf" type="text" readonly class="validate" readonly name="cpf" maxlength="14" value="<?php echo $resultado->cpf?>">
                        <label for="cpf">CPF</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">confirmation_number</i>
                        <input id="rg" type="text" class="validate" name="rg"  value="<?php echo $resultado->rg?>">
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
                            <input name="sexo" type="radio" <?php echo $resultado->sexo="m" ?  "checked" : '' ?>  value="m" />
                            <span>Masculino</span>
                            </label>
                            <label>
                            <input name="sexo" type="radio" <?php echo $resultado->sexo="f" ?  "checked" : '' ?> value="f" />
                            <span>Feminino</span>
                            </label>
                        </p>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">date_range</i>
                        <label for="date">Data de nascimento</label>
                        <input type="text" class="datepicker" id="date" name="date"  value="<?php echo date('d-m-Y', strtotime($resultado->datanascimento)); ?>">

                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s3">
                        <i class="material-icons prefix iconColor">local_phone</i>
                        <input id="telefone" type="text" class="validate" name="telefone" value="<?php echo $resultado->telefone?>">
                        <label for="telefone">Telefone</label>
                    </div>
                    <div class="input-field col s3">
                        <i class="material-icons prefix iconColor">phone_iphone</i>
                        <input id="celular" type="text" class="validate" name="celular"  value="<?php echo $resultado->celular?>">
                        <label for="celular">Celular</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">email</i>
                        <input id="email" type="email" class="validate" name="email" value="<?php echo $resultado->email ?>">
                        <label for="email">E-mail</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">location_on</i>
                        <input id="cep" type="text" class="validate" name="cep"  value="<?php echo $resultado->cep ?>">
                        <label for="cep">Cep</label>
                    </div>
                    <div class="input-field col s6">
                        <p align="center">
                            <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/buscaCep.cfm" target="_blank" > <button class="btn waves-effect waves-light red" type="button">Não sei o meu cep</button></a>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <i class="material-icons prefix iconColor">home</i>
                        <input id="logradouro" type="text" readonly class="validate" name="logradouro" value="<?php echo $resultado->logradouro ?>">
                        <label for="logradouro">Logradouro</label>
                    </div>
                    <div class="input-field col s2">
                        <i class="material-icons prefix iconColor">format_list_numbered
                            </i>
                        <input id="numero" type="number" class="validate" name="numero"  value="<?php echo $resultado->numero ?>">
                        <label for="numero">Número</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">near_me</i>
                        <input id="complemento" type="text" class="validate" name="complemento"  value="<?php echo $resultado->complemento ?>">
                        <label for="complemento">Complemento</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <i class="material-icons prefix iconColor">landscape</i>
                        <input id="bairro" type="text" readonly class="validate" name="bairro"  value="<?php echo $resultado->bairro ?>">
                        <label for="bairro">Bairro</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">location_city</i>
                        <input id="cidade" type="text" readonly class="validate" name="cidade"  value="<?php echo $resultado->cidade ?>">
                        <label for="cidade">Cidade</label>
                    </div>
                    <div class="input-field col s2">
                        <i class="material-icons prefix iconColor">card_travel</i>
                        <input id="uf" type="text" readonly class="validate" name="uf" value="<?php echo $resultado->uf ?>">
                        <label for="uf">UF</label>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix iconColor">format_align_justify</i>
                            <textarea id="referencia" class="materialize-textarea" name="referencia"><?php echo $resultado->referencia ?></textarea>
                            <label for="referencia">Referência</label>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $usuario->id; ?>"/>
                    </div>
                    <button class="btn pulse waves-effect waves-light red darken-4
                    " type="submit" name="action">Atualizar
                            <i class="material-icons right">send</i>
                          </button>
                          <button class="btn pulse waves-effect waves-light red darken-4
                    " type="button" name="action">Deletar
                            <i class="material-icons right">send</i>
                          </button>
                </div>

            </form>
        </div>

    </div>

<?php

include_once('../_includes/footer.php')

?>

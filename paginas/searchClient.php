<?php

$page_title = "Procura por CPF do cliente";
include_once('../_includes/header.php');
?>
<div class="container">
    <div class="row">
        <form action="../paginas/resultSearchClientOO.php" method="post">
            <div class="row">
            <h5>Pesquisa por CPF</h5>
                <div class="input-field col s6">
                
                    <input type="text" class="validate" name="cpfBuscado" id="cpfBuscado"/>
                    <label for="cpfBuscado">Digite o CPF do cliente</label>
                    <button type="submit" class="btn">Pesquisar</button>
                </div>
            </div>
        </form>
    </div>
</div>


<?php

include_once('../_includes/footer.php')

?>


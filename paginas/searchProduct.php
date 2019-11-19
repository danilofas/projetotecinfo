<?php

$page_title = "Procura por produto";
include_once('../_includes/header.php');
require_once('../_includes/connectionPDO.php');
?>

    <form method="POST" action="">
        <label>Assunto: </label>
        <input type="text" name="assunto" id="assunto" placeholder="Pesquisar pelo assunto">

        <input type="submit" name="SendPesqMsg" value="Pesquisar">
    </form><br><br>

    <script src="../js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="../js/materialize.js"></script>
    <script src="../js/main.js"></script>
    <script>
        $(function() {
            $("#assunto").autocomplete({
                source: 'actionSearchProduct.php'
            });
        });
    </script>

    </body>

    </html>
    <?php

//include_once('../_includes/footer.php');

?>
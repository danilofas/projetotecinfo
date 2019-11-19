<?php
    
    include_once('../_includes/mensagem.php');
    // $_SESSION['token'] = session_id();
    if(empty($_SESSION['token'])){
        header('Location: ../index.php');
    }
    $page_title = "SG - Software de Gestão";
    include_once('../_includes/header.php');
    require_once('../_includes/dbconnection.php');

    // setcookie('firstName','Aurelio',time()+5,'/','',0,true);
    // setcookie('firstName','',time()-3600);
    
    

?>
<div class="container">
    <div class="row">
        <div class="col s12" style="text-align: center">
            <h4>Seja bem vindo ao Software de Gestão - SG</h4>
        </div>
    </div>    
</div>

<?php
    mysqli_close($connect);
    include_once('../_includes/footer.php')
?>
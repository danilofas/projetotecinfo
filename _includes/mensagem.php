<?php

session_start();

if(!empty($_SESSION['mensagem'])){ ?>
    <script>
        window.onload = function(){
            M.toast({html: '<?php echo $_SESSION['mensagem']; ?>' });            
        }
    </script>


<?php
unset($_SESSION['mensagem']);
// $_SESSION['mensagem'] ='';
}

?>
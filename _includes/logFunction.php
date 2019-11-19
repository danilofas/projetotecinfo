<?php

function check_login($connect, $user,$password){

    if(empty($user)){
        $erros[] = "O usuário não foi digitado.";
    }else{
        $u = mysqli_real_escape_string($connect, trim($user));
    }

    if(empty($password)){
        $erros[] = "A senha não foi digitado.";
    }else{
        $p = mysqli_real_escape_string($connect, trim($password));
    }

    if(empty($erros)){
        $sql = "SELECT * FROM usuarios WHERE usuario = '$u'";
        mysqli_set_charset($connect,$sql);
        $r = mysqli_query($connect, $sql);
        if(mysqli_num_rows($r)==1){
            $rowDados = mysqli_fetch_array($r, MYSQLI_ASSOC);
            if(password_verify($p, $rowDados['password'])){
                return array(true, $rowDados);
            }else{
                return false;
            }
        }
    }else{
        $erros[] = "Dados inválidos.";
        return false;
    }
}
?>
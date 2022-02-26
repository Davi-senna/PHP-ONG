<?php

require_once("../config.php");

extract($_POST);

$usuario = new Usuario();
try{
    $usuario->loadByCpf($cpf);

    if($senha == $usuario->getSenha()){
        header("Location: ../pages/pg_index_usuario.php"); 
    }else{
        header("Location: ../pages/pg_login.php?error='Senha incorreta'");
    }
}catch(Exception $e){
    header("Location: ../pages/pg_login.php?error='Usuario não encontrado'");
}

?>
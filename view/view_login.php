<?php

require_once("../model/Sql.php");
require_once("../model/Usuario.php");
require_once("../model/Admin.php");
require_once("../controller/controller_Usuario.php");

extract($_POST);

$usuario = new Usuario();
$admin = new Admin();

if($admin->validAdmin($cpf,$senha) === true){

    header("Location: ../pages/admin/pg_admin.php");

}else if($admin->validAdmin($cpf,$senha) == "senha invalida"){

    header("Location: ../pages/pg_login.php?error='Senha incorreta'");

}else{

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

}
<?php

require_once("../autoload.php");
use Controller\controller_Admin;
use Controller\controller_Usuario;


// var_dump($_POST);

$usuario = new controller_Usuario();
$admin = new controller_Admin();

$results = $admin->valid_admin($_POST);
// var_dump($results);
if($results["valid"] == 1){

    header("Location: public/admin/pg_admin.php");

}else if($results["valid"] == 0 && $results["error"] == "Senha invalida"){

    $error = $results['error'];
    header("Location: public/login/pg_login.php?error= $error");

}else{
    $error = $results['error'];
    header("Location: public/login/pg_login.php?error= $error");
/*
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
*/
}
<?php

require_once("../autoload.php");
$path = "../";
use Controller\controller_Admin;
use Controller\controller_Usuario;  


$usuario = new controller_Usuario();
$admin = new controller_Admin();

$results = $admin->valid_admin($_POST);

if($results["valid"] == 1){

    header("Location: public/admin/pg_admin.php");

}else if($results["valid"] == 0 && $results["error"] == "Senha invalida"){

    $error = $results['error'];
    header("Location: public/login/pg_login.php?error= $error");

}else{
    $error = $results['error'];
    header("Location: public/login/pg_login.php?error= $error");

}
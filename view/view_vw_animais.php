<?php

require_once("../autoload.php");
use Controller\controller_Admin;
use Controller\controller_Vw_animais;

if(isset($_GET['login']) && isset($_GET['senha'])){

    $validate = [
        "login" => $_GET['login'],
        "senha" => $_GET['senha'],
    ];

    $admin = new controller_Admin();
    $validation = $admin->valid_admin($validate);

    if($validation["valid"] == 1){
        $instanceControllerData = new controller_Vw_animais();
        $data = $instanceControllerData->getAllAnimals();
        echo json_encode([
            "success" => true,
            "data" => $data
        ]);
    }else{
        echo json_encode([
            "success" => false,
            "error" => "Dados de verificação invalidos" 
        ]);
    }



}else{
    echo json_encode([
        "success" => false,
        "error" => "Nem todos os dados foram preenchidos" 
    ]);
}
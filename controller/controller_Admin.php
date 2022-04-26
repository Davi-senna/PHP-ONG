<?php

class controller_Admin{

    private $instanceModel;

    public function valid_admin($user_data){
        extract($user_data);
        $admin = $this->instanceModel->loadByLogin($login,$senha);

        switch ($admin) {
            case empty($admin):
                
                return array(
                    "valid" => 0,
                    "error" => "Usuário não encontrado"
                );
                
                break;

            case !empty($admin) && $senha == $admin["senha"]:

                return array(
                    "valid" => 1
                );

                break;

            case !empty($admin) && $senha != $admin["senha"]:

                return array(
                    "valid" => 0,
                    "error" => "Senha invalida"
                );
                
                break;


            default:

            return array(
                "valid" => 0,
                "error" => "Usuário invalido"
            );

                break;
        }
    }

    public function __construct(){
        $this->instanceModel = new Admin();
    }

}
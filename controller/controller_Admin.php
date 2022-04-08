<?php

class controller_Admin{

    private $instanceModel;

    public function valid_admin($user_data){
        extract($user_data);
        $admin = $this->instanceModel->loadByLogin($login,$senha);

        switch ($admin) {
            case count($admin) <= 0:
                
                return array(
                    "valid" => 0,
                    "error" => "Usuário não encontrado"
                );

                break;

            case count($admin) > 0 && $senha == $admin["senha"]:

                return array(
                    "valid" => 1
                );

                break;

            case count($admin) > 0 && $senha != $admin["senha"]:

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
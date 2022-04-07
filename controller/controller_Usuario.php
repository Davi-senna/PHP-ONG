<?php

class controller_Usuario{

    private $instanceModel;

    public function insert_user($user_data){
        extract($user_data);
        $instanceModel->insert($nome,$cpf,$tel,$cep,$rua,$cidade,$estado,$senha);
    }

    public function __construct(){
        $this->instanceModel = new Usuario();
    }

}
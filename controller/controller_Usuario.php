<?php

namespace Controller;
use Model\Usuario;
use \Exception;

class controller_Usuario{

    private $instanceModel;

    //Execution methods...
    
        public function add_user($user_data){
            extract($user_data);
            $this->instanceModel->insert($nome,$cpf,$tel,$cep,$rua,$cidade,$estado,$senha);
        }
        
    //...Execution methods

    public function __construct(){
        $this->instanceModel = new Usuario();
    }

}
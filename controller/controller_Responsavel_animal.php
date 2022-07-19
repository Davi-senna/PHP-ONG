<?php

namespace Controller;
use Model\Responsavel_animal;
use \Exception;

class controller_Responsavel_animal{

    private $instanceModel;
    
    public function __construct($id = "Em processo de criação"){
        $this->instanceModel = new Responsavel_animal();
    }

    //Execution methods...

        public function insert($data){

            extract($data);

            $results = $this->instanceModel->insert($id_animal,$cidade,$estado,$email,$telefone);
            return $results;
        }

        public function update($data){

            extract($data);

            $results = $this->instanceModel->update($id_animal,$cidade,$estado,$email,$telefone);
            return $results;
        }

        public function delete($id_animal){
            $results = $this->instanceModel->delete($id_animal);
            return $results;
        }

    //...Execution methods

}
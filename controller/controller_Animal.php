<?php

namespace Controller;
use Model\Animal;
use \Exception;

class controller_Animal{

    private $instanceModel;
    
    

    //Execution methods...
    
        public function insertAnimal($data){

            extract($data);

            $results = $this->instanceModel->insert($nome,$idade,$sexo,$raca,$especie,$situacao,$descricao,$peso);

            return $results;
        }

        public function delete($id){
            $results = $this->instanceModel->delete($id);
            return $results;
        }
    
        public function updateAnimal($id_animal,$data){
    
            extract($data);
    
            $results = $this->instanceModel->update($id_animal,$nome,$idade,$sexo,$raca,$especie,$situacao,$descricao,$peso);
            return $results;
    
        }

    //...Execution methods

    //Select methods...

        public function getAll(){
            $results = $this->instanceModel->selectAll();
            return $results;        
        }

    //...Select methods

    public function __construct(){
        $this->instanceModel = new Animal();
    }
}


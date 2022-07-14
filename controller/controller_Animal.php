<?php

class controller_Animal{

    private $instanceModel;
    
    public function __construct($id = "Em processo de criação"){
        $this->instanceModel = new Animal();
    }

    public function insertAnimal($data){

        extract($data);

        $results = $this->instanceModel->insert($nome,$idade,$sexo,$raca,$especie,$situacao,$descricao,$peso);

        return $results;
    }

    public function getAll(){
        $results = $this->instanceModel->selectAll();
        return $results;        
    }

    public function delete($id){
        $results = $this->instanceModel->delete($id);
        return $results;
    }

}


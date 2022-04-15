<?php

class controller_Responsavel_animal{

    private $instanceModel;
    
    public function __construct($id = "Em processo de criação"){
        $this->instanceModel = new Responsavel_animal();
    }

    public function insert($data){

        extract($data);

        $results = $this->instanceModel->insert($id_animal,$cidade,$estado,$email,$telefone);
        return $results;
    }

}
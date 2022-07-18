<?php

namespace Controller;
use Model\Vw_animais;
use \Exception;

Class controller_Vw_animais{

    private $instanceModel;

    public function getAllData($id_animal){
        $results = $this->instanceModel->getAllData($id_animal);
        return $results;
    }

    public function __construct(){
        $this->instanceModel = new Vw_animais();
    }

}
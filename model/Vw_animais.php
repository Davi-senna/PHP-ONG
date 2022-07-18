<?php

namespace Model;
use Model\Sql;
use \Exception;
use Model\Model;

Class Vw_animais extends Model{

    public function getAllData($id_animal){
        $results = $this->sql->select("SELECT * FROM vw_animais where chip = $id_animal");
        return $results;
    }

}

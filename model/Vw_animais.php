<?php

namespace Model;
use Model\Sql;
use \Exception;
use Model\Model;

Class Vw_animais extends Model{

    //Select methods...
    
        public function getAllData($id_animal){

            try{

                $results = $this->sql->select("SELECT * FROM vw_animais where chip = $id_animal");
                return $results;

            }catch(Exception $e){

                return [
                    "success" => false,
                    "error" => $e->getMessage()
                ];

            }
        }

    //...Select methods

}

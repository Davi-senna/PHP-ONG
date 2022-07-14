<?php

Class Vw_animais{

    private $sql;

    public function getAllData($id_animal){
        $results = $this->sql->select("SELECT * FROM vw_animais");
        return $results;
    }

    public function __construct(){
        $this->sql = new Sql();
    }
}

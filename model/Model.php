<?php

namespace Model;
use Model\Sql;

abstract class Model{

    protected $sql;

    public function __construct(){
        $this->sql = new Sql();
    }

}
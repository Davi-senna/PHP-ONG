<?php

require_once("../config.php");

class Admin{

    protected $login;
    protected $senha;


    public function getLogin(){
        return $this->login;
    }

    public function setLogin($value){
        $this->login = $value;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($value){
        $this->senha = $value;
    }

    public function validAdmin($login,$senha){

        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_admin WHERE login = '$login'");

        if(count($results) > 0){
            $admin = $results[0];

            if($senha == $admin["senha"]){
                return true;
            }else{
                return "senha invalida";
            }
            
        }else{
            return false;
        }
    }
}
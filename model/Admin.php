<?php

namespace Model;
use \Exception;
use Model\Model;

class Admin extends Model{

    protected $login;
    protected $senha;


    //Getters and Setters...

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

    //...Getters and Setters

    //Select methods...

        public function loadByLogin($login, $senha){

            try{

                $results = $this->sql->select("SELECT * FROM tb_admin WHERE login = '$login'");
                if (!empty($results)) {
                    $admin = $results[0];
                    return $admin;
                }else{
                    return 0;
                }

            }catch(Exception $e){

                return[
                    "success" => false,
                    "error" => $e->getMessage()
                ];

            }
            
        }

    //...Select methods


}

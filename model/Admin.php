<?php

class Admin
{

    protected $login;
    protected $senha;


    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($value)
    {
        $this->login = $value;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($value)
    {
        $this->senha = $value;
    }

    public function loadByLogin($login, $senha)
    {

        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_admin WHERE login = '$login'");
        if (!empty($results)) {
            $admin = $results[0];
            return $admin;
        }else{
            return 0;
        }
        
    }
}

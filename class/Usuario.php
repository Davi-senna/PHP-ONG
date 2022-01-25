<?php

class Usuario{
   private $nome = 'teste';
   private $cpf = 1;
   private $tel = 1;
   private $senha = 'teste';
   private $endereco = 'teste';

   public function getNome(){
       return $this->nome;
   }

   public function setNome($value){
    $this->nome = $value;
   }

   public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($value){
    $this->cpf = $value;
    }

    public function getTel(){
        return $this->tel;
    }

    public function setTel($value){
    $this->tel = $value;
    }

    public function getSenha(){
        return $this->senha;
    }
    
    public function setSenha($value){
        $this->senha = $value;
    }
    
    public function getEndereco(){
        return $this->endereco;
    }
    
    public function setEndereco($value){
        $this->endereco = $value;
    }

    public function loadByCpf($cpf){
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM usuarios WHERE cpf = $cpf");
        $usuario = $results[0];

        if(count($results) > 0){
            $this->setNome($usuario['nome']);
            $this->setCpf($usuario['cpf']);
            $this->setTel($usuario['tel']);
            $this->setSenha($usuario['senha']);
            $this->setEndereco($usuario['endereco']);
        }
    }

    public function cadastrar(){
        $sql = new Sql();
        $sql->execQuery("INSERT INTO usuarios (nome,senha,cpf,tel,endereco) VALUES('NOME',2,2,2,2)");
    
    }
    public function __toString(){
        $dados = json_encode(
            array(
                "Nome"=>$this->getNome(),
                "Cpf"=>$this->getCpf(),
                "Tel"=>$this->getTel(),
                "Senha"=>$this->getSenha(),
                "Endereco"=>$this->getEndereco(),
            )
        );
        return $dados; 
    }
}

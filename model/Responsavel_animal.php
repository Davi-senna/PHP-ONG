<?php

class Responsavel_animal{

    private $id_animal;
    private $cidade;
    private $estado;
    private $email;
    private $telefone;
    private $id;
    private $sql;


    /**
     * Get the value of id_animal
     */ 
    public function getId_animal(){
        return $this->id_animal;
    }

    /**
     * Set the value of id_animal
     *
     * @return  self
     */ 
    public function setId_animal($id_animal){
        $this->id_animal = $id_animal;

        return $this;
    }

    /**
     * Get the value of cidade
     */ 
    public function getCidade(){
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     *
     * @return  self
     */ 
    public function setCidade($cidade){
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get the value of estado
     */ 
    public function getEstado(){
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    public function setEstado($estado){
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail(){
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email){
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of telefone
     */ 
    public function getTelefone(){
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */ 
    public function setTelefone($telefone){
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId(){
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id){
        $this->id = $id;

        return $this;
    }


    protected function loadByAnimal($value){
        
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_responsavel_animal WHERE id_animal = :ID_ANIMAL",array(
            ":ID_ANIMAL" => $value)
        );
        $responsavel = $results[0];

        if(count($responsavel) > 0){
            $this->setId_animal($responsavel['id_animal']);
            $this->setCidade($responsavel['cidade']);
            $this->setEstado($responsavel['estado']);
            $this->setEmail($responsavel['email']);
            $this->setTelefone($responsavel['telefone']);
            $this->setId($responsavel['id']);
        }
    }

    
    public function loadData(){
        
        $data = array(
            'id_animal' => $this->getId_animal(),
            'cidade' => $this->getCidade(),
            'estado' => $this->getEstado(),
            'email' => $this->getEmail(),
            'telefone' => $this->getTelefone(),
            'id' => $this->getId()
        );

        return $data;

    }


    //Método para alimentação da classe por metodos como insert ou update
    public function feed_class($id_animal,$cidade,$estado,$email,$telefone){
        $this->setId_animal($id_animal);
        $this->setCidade($cidade);
        $this->setEstado($estado);
        $this->setEmail($email);
        $this->setTelefone($telefone);
    }



    public function insert($raw_id_animal,$raw_cidade,$raw_estado,$raw_email,$raw_telefone){

        $this->feed_class($raw_id_animal,$raw_cidade,$raw_estado,$raw_email,$raw_telefone);
        $data = $this->loadData();
        extract($data);
        
        $stmt =" INSERT INTO tb_responsavel_animal (id_animal,cidade,estado,email,telefone) 
            VALUES($id_animal,'$cidade','$estado','$email','$telefone')
        ";

        $results = $this->transaction($stmt);

        return $results;
    }


    //Método para fazer transação
    public function transaction($stmt){

        $results = $this->sql->execTransaction(
            $statements = [$stmt]
        );
        	
        return $results;
    }

    public function __construct(){
        
        $this->sql = new Sql();

    }
}
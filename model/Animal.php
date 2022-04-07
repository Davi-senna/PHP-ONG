<?php

class Animal{
    private $nome;
    private $idade;
    private $sexo;
    private $raca;
    private $especie;
    private $chip;


    public function setNome($value){

        $this->nome = $value;

    }

    public function getNome(){

        return $this->nome;

    }

    public function setIdade($value){

        $this->idade = $value;

    }

    public function getIdade(){

        return $this->idade;
        
    }

    public function setRaca($value){

        $this->raca = $value;

    }

    public function getRaca(){

        return $this->raca;

    }

    public function setSexo($value){

        $this->sexo = $value;

    }

    public function getSexo(){

        return $this->sexo;

    }

    public function setEspecie($value){

        $this->especie = $value;

    }

    public function getEspecie(){

        return $this->especie;

    }

    public function setChip($value){

        $this->chip = $value;

    }

    public function getChip(){

        return $this->chip;
        
    }

    protected function loadByChip($value){
        
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM animais WHERE chip = :CHIP",array(
            ":CHIP" => $value)
        );
        $animal = $results[0];

        if(count($animal) > 0){
            $this->setNome($animal['nome']);
            $this->setIdade($animal['idade']);
            $this->setSexo($animal['sexo']);
            $this->setRaca($animal['raca']);
            $this->setEspecie($animal['especie']);
            $this->setChip($animal['chip']);
        }
    }

    public function __toString(){
        $results = array(
            'Nome' => $this->getNome(),
            'Idade' => $this->getIdade(),
            'Sexo' => $this->getSexo(),
            'Raca' => $this->getRaca(),
            'Especie' => $this->getEspecie(),
            'Chip' => $this->getChip()
        );
        $dados = json_encode($results);
        return $dados;
    }
}

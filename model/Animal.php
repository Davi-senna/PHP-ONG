<?php

namespace Model;
use Model\Sql;
use \Exception;
use Model\Model;

class Animal extends Model{
    private $nome;
    private $idade;
    private $sexo;
    private $raca;
    private $especie;
    private $chip;
    private $situacao;
    private $descricao;
    private $peso;


    //Getters and Setters...

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

        
        /**
         * Get the value of situacao
         */ 
        public function getSituacao(){
            return $this->situacao;
        }

        /**
         * Set the value of situacao
         *
         * @return  self
         */ 
        public function setSituacao($situacao){
            $this->situacao = $situacao;

            return $this;
        }

            /**
         * Get the value of descricao
         */ 
        public function getDescricao(){
            return $this->descricao;
        }

        /**
         * Set the value of descricao
         *
         * @return  self
         */ 
        public function setDescricao($descricao){
            $this->descricao = $descricao;

            return $this;
        }

            /**
         * Get the value of peso
         */ 
        public function getPeso(){
            return $this->peso;
        }

        /**
         * Set the value of peso
         *
         * @return  self
         */ 
        public function setPeso($peso){
            $this->peso = $peso;

            return $this;
        }
    
    //...Getters and Setters

    //Select methods...

        public function selectAll(){
            
            try{

                $results = $this->sql->select("SELECT * FROM tb_animal");
                return $results;

            }catch(Exception $e){

                return[
                    "success" => false,
                    "error" => $e->getMessage()
                ];
                
            }

        } 


        public function loadData(){
            
            $data = array(
                'nome' => $this->getNome(),
                'idade' => $this->getIdade(),
                'sexo' => $this->getSexo(),
                'raca' => $this->getRaca(),
                'especie' => $this->getEspecie(),
                'chip' => $this->getChip(),
                'situacao' => $this->getSituacao(),
                'descricao' => $this->getDescricao(),
                'peso' => $this->getPeso()
            );

            return $data;

        }

    //...Select methods

    //Fedding methods...

        //Método de alimentação por banco de dados
        protected function loadByChip($id_animal){
            
            try{

                $sql = new Sql();

                $results = $sql->select("SELECT * FROM tb_animal WHERE chip = :CHIP",array(
                    ":CHIP" => $id_animal)
                );
                $animal = $results[0];

                if(count($animal) > 0){
                    $this->setNome($animal['nome']);
                    $this->setIdade($animal['idade']);
                    $this->setSexo($animal['sexo']);
                    $this->setRaca($animal['raca']);
                    $this->setEspecie($animal['especie']);
                    $this->setChip($animal['chip']);
                    $this->setSituacao($animal['situacao']);
                    $this->setDescricao($animal['descricao']);
                    $this->setPeso($animal['peso']);
                }

            }catch(Exception $e){
                return[
                    "success" => false,
                    "error" => $e->getMessage()
                ];
            }
        }

        //Método para alimentação da classe por metodos como insert ou update
        protected function feed_class($nome,$idade,$sexo,$raca,$especie,$situacao,$descricao,$peso){
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
            $this->setRaca($raca);
            $this->setEspecie($especie);
            $this->setSituacao($situacao);
            $this->setDescricao($descricao);
            $this->setPeso($peso);
        }

    //...Fedding methods

    //Execution methods...

        public function insert($raw_nome,$raw_idade,$raw_sexo,$raw_raca,$raw_especie,$raw_situacao,$raw_descricao,$raw_peso){

            try{

                $this->feed_class($raw_nome,$raw_idade,$raw_sexo,$raw_raca,$raw_especie,$raw_situacao,$raw_descricao,$raw_peso);
                $data = $this->loadData();
                extract($data);
                
                $stmt =" INSERT INTO tb_animal (nome,idade,sexo,raca,especie,situacao,descricao,peso) 
                    VALUES('$nome',$idade,$sexo,'$raca','$especie',$situacao,'$descricao',$peso)
                ";

                $results = $this->sql->execTransaction([$stmt]);

                return $results;

            }catch(Exception $e){
                return[
                    "success" => false,
                    "error" => $e->getMessage()
                ];
            }
        }

        public function update($id_animal,$raw_nome,$raw_idade,$raw_sexo,$raw_raca,$raw_especie,$raw_situacao,$raw_descricao,$raw_peso){

            

            try{

                $this->feed_class($raw_nome,$raw_idade,$raw_sexo,$raw_raca,$raw_especie,$raw_situacao,$raw_descricao,$raw_peso);
                $data = $this->loadData();
                extract($data);

                $this->sql->execQuery("UPDATE tb_animal SET nome = '$nome', idade = $idade, sexo = $sexo, raca = '$raca', especie = '$especie', situacao = $situacao ,descricao = '$descricao',peso = $peso WHERE chip = $id_animal");

                return [
                    "success" => true
                ];

            }catch(Exception $e){

                return [
                    "success" => false,
                    "error" => $e->getMessage()
                ];

            }

        }

        public function delete($id){

            try{

                $this->sql->execQuery("DELETE FROM tb_animal where chip=$id");

                return [
                    "success" => true
                ];

            }catch(Exception $e){

                return [
                    "success" => false,
                    "error" => $e->getMessage()
                ];

            }

        }

    //...Execution methods


}

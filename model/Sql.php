<?php

class Sql extends PDO{

    private $conn;

    public function __construct(){

        $this->conn = new PDO("mysql:host=localhost; dbname=db_petcare", "root", "");
    }

    private function setParams($statement, $parameters = array()){
        foreach ($parameters as $key => $value) {
            $this->setParam($statement, $key, $value);
        }
    }

    private function setParam($statement, $key, $value){

        $statement->bindParam($key, $value);
    }

    public function execQuery($rawQuery, $params = array()){
        //echo $rawQuery;
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        //echo 'chegou';
        return $stmt;
    }

    public function select($rawQuery, $params = array()): array{

        $stmt = $this->execQuery($rawQuery, $params);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function execTransaction($statements){
        try {

            $this->conn->beginTransaction();

                foreach($statements as $stmt){
                    var_dump($stmt);
                    echo "<br>";
                }

            $this->conn->commit();
        } catch (\Exception $e) {
        }
        
    }
}

$teste = new Sql();
$teste->execTransaction(array(
    "INSERT INTO tb_animal(nome) VALUES(teste)",
    "INSERT INTO tb_animal(nome) VALUES(teste)",
    "INSERT INTO tb_animal(nome) VALUES(teste)"
));

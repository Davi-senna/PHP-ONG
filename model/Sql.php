<?php

class Sql extends PDO{

    public $conn;

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
        echo $rawQuery;
        var_dump($params);
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;
    }

    public function select($rawQuery, $params = array()): array{

        $stmt = $this->execQuery($rawQuery, $params);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    //Metodo para transações
    public function execTransaction($statements){

        try {

            $this->conn->beginTransaction();

                $ids=[];

                foreach($statements as $stmt){
                    /*var_dump($stmt);
                    echo "<br>";*/

                    $this->execQuery($stmt);
                    $id = $this->conn->lastInsertId();
                    array_push($ids,$id);

                }

                $this->conn->commit();

            return (array(
               "success" => 1,
               "ids" => $ids
            ));

        } catch (\Exception $e) {

            $this->conn->rollBack();

            return (array(
                "success" => 0,
                "error" => $e->getMessage()
            ));
        }
        
    }
}
/*
$teste = new Sql();
var_dump($teste->execTransaction(array(
    "INSERT INTO tb_animal(nome) VALUES('teste')",
    "INSERT INTO tb_animal(noe) VALUES('teste1')",
    "INSERT INTO tb_animal(nome) VALUES('teste2')"
)));*/

<?php


class Image{

    private $source_image;
    private $id_animal;
    private $id;
    private $sql;


    /**
     * Get the value of source_image
     */
    public function getSource_image(){
        return $this->source_image;
    }

    /**
     * Set the value of source_image
     *
     * @return  self
     */
    public function setSource_image($source_image){
        $this->source_image = $source_image;
        return $this;
    }

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

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
        return $this;
    }

    public function loadById_animal($value){


        $results = $this->sql->select(
            "SELECT * FROM tb_img_source WHERE id_animal = :ID_ANIMAL",
            array(
                ":ID_ANIMAL" => $value
            )    );
        $image = $results[0];

        if (count($image) > 0) {
            $this->setSource_image($image["source_image"]);
            $this->setId_animal($image["id_animal"]);
            $this->setId($image["id_image"]);

            return [

                "source" => $this->getSource_image($image["source_image"]),
                "id_animal" => $this->getId_animal($image["id_animal"]),
                "id" => $this->getId($image["id_image"]),

            ];
        }
    }

    // Metodo de alimentação geral
    public function feedClass($user_data){

        $this->setSource_image($user_data["source_image"]);
        $this->setId_animal($user_data["id_animal"]);
    }

    //Metodo de alimentação por valores para metodos como insert ou update
    private function pushFeedClass($source_image, $id_animal){

        $user_data = array(
            "source_image" => $source_image,
            "id_animal" => $id_animal,
        );

        $this->feedClass($user_data);
    }


    public function pushInsert($id_animal, $source_image){

        $this->pushFeedClass($source_image, $id_animal);

        $stmt = "INSERT INTO tb_img_source(source_image,id_animal) 
        Values (
            :SOURCE_IMAGE,
            :ID_ANIMAL
        )";

        $parameters =  array(
            ":SOURCE_IMAGE" => $this->getSource_image(),
            ":ID_ANIMAL" => $this->getId_animal()    );

        $results = $this->transaction($stmt, $parameters);

        return $results;
    }

    //Método para fazer transação
    public function transaction($stmt, $parameters){

        $results = $this->sql->execTransaction(
            $statements = [$stmt],
            $parameters
        );

        return $results;
    }

    public function delete($id_animal){

        $this->sql->execQuery(" DELETE from tb_img_source where id_animal = $id_animal
        ");
    }

    public function __construct(){
        $this->sql = new Sql();
    }
}

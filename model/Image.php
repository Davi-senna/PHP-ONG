<?php


class Image{

    private $source_image;
    private $id_animal;
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

    public function loadById_animal($value){
        

        $results = $this->sql->select("SELECT * FROM tb_img_source WHERE id_animal = :ID_ANIMAL",array(
            ":ID_ANIMAL" => $value)
        );
        $image = $results[0];

        if(count($image) > 0){
            $this->setSource_image($image["source_image"]);
            $this->setId_animal("id_animal");
  
        }
    }

    // Metodo de alimentação geral
    public function feedClass($user_data){

        if (count($user_data) != 0) {

        $this->setSource_image($user_data["image"]);
        $this->setId_animal($user_data["id_animal"]);
        
        }else{
            throw new Exception($message = "Responsável não existe");
        }
    
    }

    //Metodo de alimentação por valores para metodos como insert ou update
    private function pushFeedClass($source_image,$id_animal){

        $user_data = array(
            "source_image" => $source_image,
            "id_animal" => $id_animal,
        );

        $this->feedClass($user_data);
    }


    public function pushInsert($source_image,$id_animal){

        $this->pushFeedClass($source_image,$id_animal);

        $this->sql->execQuery("INSERT INTO tb_img_souce(source_image,id_animal) 
        Values (
            :SOURCE_IMAGE,
            :ID_ANIMAL,
        )
        ", array(
            ":SOURCE_IMAGE" => $this->getSource_image(),
            ":ID_ANIMAL" => $this->getId_animal(),
        ));
    }

    public function delete($id_image,$id_animal){

        $this->conn->execQuery(" DELETE from tb_img_souce where id_image = $id_image and id_animal = $id_animal
        ");

    }

    public function __construct(){
        $this->sql = new Sql();
   }

    
}
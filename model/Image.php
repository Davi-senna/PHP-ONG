<?php


class Image{

    private $source_image;
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

    public function __construct(){
         $this->sql = new Sql();
    }

    // Metodo de alimentação geral
    public function feedClass($user_data){

        if (count($user_data) != 0) {

        $this->setSource_image($user_data["image"]);
        
        }else{
            throw new Exception($message = "Imagem não existe");
        }
    
    }

    //Metodo de alimentação por valores para metodos como insert ou update
    private function pushFeedClass($source_image){

        $user_data = array(
            "source_image" => $source_image,
        );

        $this->feedClass($user_data);
    }


    public function pushInsert($source_image){

        $this->pushFeedClass($source_image);

        $this->sql->execQuery("INSERT INTO source_image(source_image) 
        Values (
            :SOURCE_IMAGE,
        )
        ", array(
            ":SOURCE_IMAGE" => $this->getSource_image(),
        ));
    }

    public function delete($id_image,$id_animal){

        $this->conn->execQuery(" DELETE from cv.imagens_portfolio where id_image = $id_image and id_animal = $id_animal
        ");

    }


    
}
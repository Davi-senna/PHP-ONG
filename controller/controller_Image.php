<?php

class Controller_Image{

    private $objectImage;

    public function __construct($id_usuario){
        $this->objectImage = new Image($id_usuario);
    }


    public function deleteImage($id,$id_animal){
        $file = $this->objectImage->loadById_animal($id_animal);
        $this->objectImage->delete($id,$id_animal);
        $nameFile =  $file["image_source"];
        unlink($nameFile);
        

    }

    public function addImage($user_data, $image){
        extract($user_data);

        $dir = "../img/animals";
        $file = $image["image"];
        $image_source = $dir . md5(rand() . date("d-m-Y H:i:s")) . $file["name"];

        $this->objectImage->pushInsert($nome, $image_source);

        if(!is_dir($dir)){
            mkdir($dir);
        }

        if(move_uploaded_file($file["tmp_name"],$image_source)){
            return 1;
        }else{
            return 0;
        };


    }
}

?>

<?php

/*

class Controller_Image{

    private $objectImage;

    public function __construct($id_usuario){
        $this->objectImage = new Image($id_usuario);
    }

    public function selectAll(){

        return $this->objectImage->selectAllByUserId();
    }

    public function deleteImage($id){
        $this->objectImage->delete($id);
        $nameFile =  $file["image_source"];
        unlink($nameFile);
        

    }

    public function addImage($user_data, $image){
        extract($user_data);

        $dir = "images/";
        $file = $image["image"];
        $image_source = $dir . md5(rand() . date("d-m-Y H:i:s")) . $file["name"];

        $this->objectImage->pushInsert($nome, $image_source, $link);

        if(!is_dir($dir)){
            mkdir($dir);
        }

        if(move_uploaded_file($file["tmp_name"],$image_source)){
            return 1;
        }else{
            return 0;
        };


    }
}*/
?>

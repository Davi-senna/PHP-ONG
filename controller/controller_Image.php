<?php

class Controller_Image{

    private $objectImage;

    public function __construct(){
        $this->objectImage = new Image();
    }


    public function deleteImage($id_animal){
        $file = $this->objectImage->loadById_animal($id_animal);
        $this->objectImage->delete($id_animal);
       
        
        if($file["source"] != "animal_sem_foto.png"){

            $nameFile =  "../img/animals/".$file["source"];
            unlink($nameFile);

        }        

    }

    public function addImage($id_animal, $image){
        

        if($image["size"] != 0){

            $dir = "../img/animals/";
            $file = $image;
            $image_source = md5(rand() . date("d-m-Y H:i:s")) . $file["name"];

            $results = $this->objectImage->pushInsert($id_animal, $image_source);

            //var_dump($results);

            if(!is_dir($dir)){
                mkdir($dir);
            }

            if(move_uploaded_file($file["tmp_name"], $dir . $image_source)){
                return 1;
            }else{
                return 0;
            };

        }else{

            $results = $this->objectImage->pushInsert($id_animal,"animal_sem_foto.png");
            return $results["success"];
            

        }

        
    }

    public function updateImage($id_animal, $image_data){

        try{
            $this->deleteImage($id_animal);
            $this->addImage($id_animal, $image_data); 

            return [
                "success" => true,
            ];
        }catch(Exception $e){
            
            return [
                "success" => false,
                "error" => $e->getMessage,
            ];

        }
        
    }

    public function selectImage($id_animal){
        $this->objectImage->loadById_animal($id_animal);
        return [
            "source" => $this->objectImage->getSource_image(),
            "id" => $this->objectImage->getId(),
            "id_animal" => $this->objectImage->getId_animal(),
        ];
    }
}

?>

<?php

require_once("../model/Sql.php");
require_once("../model/Image.php");
require_once("../controller/controller_Image.php");



function insertImage($resultsAnimal,$image_data){
    
    $instanceControllerImage = new Controller_Image();
    $resultsImage = $instanceControllerImage->addImage($resultsAnimal["ids"][0], $image_data);
    return($resultsImage);

}

function deleteImage($id,$id_animal){

    $instanceControllerImage = new Controller_Image();
    $resultsImage = $instanceControllerImage->deleteImage($id,$id_animal);

}





?>
<?php

use Controller\controller_Image;



function insertImage($resultsAnimal, $image_data){

    $instanceControllerImage = new Controller_Image();
    $resultsImage = $instanceControllerImage->addImage($resultsAnimal["ids"][0], $image_data);
    return ($resultsImage);
}

function deleteImage($id_animal){

    $instanceControllerImage = new Controller_Image();
    $resultsImage = $instanceControllerImage->deleteImage($id_animal);
}

function updateImage($id_animal, $image_data){
    if ($image_data["size"] != 0) {
        $instanceControllerImage = new Controller_Image();
        $resultsImage = $instanceControllerImage->updateImage($id_animal, $image_data);
        return $resultsImage;
    }else{
        return[
            "success" => true,
        ];
    }
}

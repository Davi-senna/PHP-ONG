<?php

header("Content-Type: application/json");

require_once("../model/Sql.php");
require_once("../model/Animal.php");
require_once("../controller/controller_Animal.php");
require_once("view_image.php");


extract($_POST);


// echo (json_encode("FOI"));


$animal_data = array(
    "nome" => $nome,
    "idade" => $idade,
    "sexo" => $sexo,
    "especie" => $especie,
    "raca" => $raca,
    "situacao" => $situacao,
    "descricao" => $descricao,
    "peso" => $peso
);
 


$instanceControllerAnimal =  new Controller_Animal();

$stmt = $_GET["stmt"];
// echo(json_encode($stmt));

switch ($stmt) {

    case 'insert':
        
        try {
            $resultsAnimal = $instanceControllerAnimal->insertAnimal($animal_data);
 
            if ($resultsAnimal["success"] == 1) {
                
                $image_data = $_FILES["image"];
                
                $resultsImage = insertImage($resultsAnimal, $image_data);
                
                if($resultsImage == 1){

                    $results = array(
                        "success" => "Upload concluído com sucesso",
                        "id_animal" => $resultsAnimal["ids"][0] 
                    );
                    
                    echo(json_encode($results));

                }else{

                    throw new Exception($message = "Não foi possível adicionar essa imagem");

                }

            } else {
                throw new Exception($message = "Não foi possível adicionar esse animal");
            }

            //var_dump($resultsResponsavel_animal);
        } catch (\Exception $e) {
            $results = array(
                "error" => $e->$message
            );

            echo(json_encode($results));
        }

        break;
}


// //var_dump($animal_data);
// //var_dump($responsavel_animal_data);
// //var_dump($image_data);

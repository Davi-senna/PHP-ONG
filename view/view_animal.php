<?php

header("Content-Type: application/json");

require_once("../model/Sql.php");
require_once("../model/Animal.php");
require_once("../controller/controller_Animal.php");
require_once("view_image.php");


if(count($_POST) != 0) {

    extract($_POST);

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
    
}
 


$instanceControllerAnimal =  new Controller_Animal();

$stmt = $_GET["stmt"];

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

        } catch (\Exception $e) {
            $results = array(
                "error" => $e->$message
            );

            echo(json_encode($results));
        }

        break;

    case 'delete':
        
        var_dump($_GET);

        // deleteImage($_GET['id'],$_GET['id_animal']);
        $results = $instanceControllerAnimal->delete($_GET['id_animal']);

        var_dump($results);
        
        break;
}



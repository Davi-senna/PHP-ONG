<?php

header("Content-Type: application/json");

require_once("../model/Sql.php");
require_once("../model/Animal.php");
require_once("../controller/controller_Animal.php");
require_once("../model/Responsavel_animal.php");
require_once("../controller/controller_Responsavel_animal.php");
require_once("../model/Image.php");
require_once("../controller/controller_Image.php");

extract($_POST);


// echo json_encode($_FILES);



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

$instanceControllerResponsavel_animal = new Controller_Responsavel_animal();

$stmt = $_GET["stmt"];
//echo(json_encode($stmt));
if($stmt == 'insert'){
    echo(json_encode("bADA"));
}
switch($stmt){

    case 'insert':
        // echo(json_encode("a"));
        // try {
        //     $resultsAnimal = $instanceControllerAnimal->insertAnimal($animal_data);
        //     if($resultsAnimal["success"] == 1){

        //         $responsavel_animal_data = array(
        //             "cidade" => $cidade,
        //             "estado" => $estado,
        //             "email" => $email,
        //             "telefone" => $telefone,
        //             "id_animal" => $resultsAnimal["ids"][0]
        //         );
                
        //         $resultsResponsavel_animal = $instanceControllerResponsavel_animal->insert($responsavel_animal_data);


        //         if($resultsResponsavel_animal["success"] == 1){

        //             $instanceControllerImage = new Controller_Image();
        //             $image_data = $_FILES["image"];

        //             $resultsImage = $instanceControllerImage->addImage($resultsAnimal["ids"][0],$image_data);
        //             if($resultsResponsavel_animal["success"] == 1){
        //                 $results = array(
        //                     "success" => "Upload concluído com sucesso"
        //                 );
        //                 //var_dump(json_encode($results));
        //             }else{
        //                 throw new Exception($message = "Não foi possível adicionar esse animal");
        //             }
                    
        //         }else{
        //             throw new Exception($message = "Não foi possível adicionar esse animal");
        //         }


        //     }else{
        //         throw new Exception($message = "Não foi possível adicionar esse animal");
        //     }
        //     //var_dump($resultsResponsavel_animal);
        // } catch (\Exception $e) {
        //     $results = array(
        //         "error" => $e->$message
        //     );

        //     // var_dump(json_encode($results));
        //     echo(json_encode("a"));
        // }

    break;

}


// //var_dump($animal_data);
// //var_dump($responsavel_animal_data);
// //var_dump($image_data);




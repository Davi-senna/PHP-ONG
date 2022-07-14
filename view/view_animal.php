<?php

header("Content-Type: application/json");

require_once("../model/Sql.php");
require_once("../model/Animal.php");
require_once("../controller/controller_Animal.php");
require_once("view_image.php");
require_once("view_responsavel.php");


if (count($_POST) != 0) {

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


if (isset($_GET["stmt"])) {
    $instanceControllerAnimal =  new Controller_Animal();

    $stmt = $_GET["stmt"];

    switch ($stmt) {

        case 'insert':

            try {
                $resultsAnimal = $instanceControllerAnimal->insertAnimal($animal_data);

                if ($resultsAnimal["success"] == 1) {

                    $image_data = $_FILES["image"];

                    $resultsImage = insertImage($resultsAnimal, $image_data);

                    if ($resultsImage == 1) {

                        $results = array(
                            "success" => "Upload concluído com sucesso",
                            "id_animal" => $resultsAnimal["ids"][0]
                        );

                        echo (json_encode($results));
                    } else {

                        throw new Exception($message = "Não foi possível adicionar essa imagem");
                    }
                } else {
                    throw new Exception($message = "Não foi possível adicionar esse animal");
                }
            } catch (\Exception $e) {
                $results = array(
                    "error" => $e->$message
                );

                echo (json_encode($results));
            }

            break;

        case 'delete':

            try {

                deleteImage($_GET['id'], $_GET['id_animal']);
                deleteResponsavel($_GET['id_animal']);
                $instanceControllerAnimal->delete($_GET['id_animal']);

                header("Location: public/admin/pg_admin.php?success=Animal Deletado com sucesso");
            } catch (Exception $e) {
                header("Location: public/admin/pg_admin.php?success=Não foi possivel deletar esse animal");
            }
            // 

            break;

        case 'update':

            try {
                $resultsAnimal = $instanceControllerAnimal->insertAnimal($animal_data);

                if ($resultsAnimal["success"] == 1) {

                    $image_data = $_FILES["image"];

                    $resultsImage = insertImage($resultsAnimal, $image_data);

                    if ($resultsImage == 1) {

                        $results = array(
                            "success" => "Upload concluído com sucesso",
                            "id_animal" => $resultsAnimal["ids"][0]
                        );

                        echo (json_encode($results));
                    } else {

                        throw new Exception($message = "Não foi possível adicionar essa imagem");
                    }
                } else {
                    throw new Exception($message = "Não foi possível adicionar esse animal");
                }
            } catch (\Exception $e) {
                $results = array(
                    "error" => $e->$message
                );

                echo (json_encode($results));
            }

            break;
        default:

            $results = array(
                "success" => false,
                "error" => "Comando invalido"
            );

            echo (json_encode($results));

            break;
    }
}

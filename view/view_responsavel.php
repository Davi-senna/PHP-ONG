<?php

header("Content-Type: application/json");

require_once("../model/Sql.php");
require_once("../model/Responsavel_animal.php");
require_once("../controller/controller_Responsavel_animal.php");

extract($_POST);

echo(json_encode("entrou"));
/*

$responsavel_animal_data = array(
    "cidade" => $cidade,
    "estado" => $estado,
    "email" => $email,
    "telefone" => $telefone,
    "id_animal" => $resultsAnimal["ids"][0]
);

$stmt = $_GET["stmt"];

switch ($stmt) {

    case 'insert':
        
        try {

            $instanceControllerResponsavel_animal = new Controller_Responsavel_animal();
            $resultsResponsavel_animal = $instanceControllerResponsavel_animal->insert($responsavel_animal_data);
            echo(json_encode($resultsResponsavel_animal));

        } catch (\Exception $e) {
            $results = array(
                "error" => $e->$message
            );

            echo(json_encode($results));
        }

        break;

    default:
    
        $results = array(
            "error" => "Responsavel invalido"
        );

        echo(json_encode($results));

    break;
}
*/

?>


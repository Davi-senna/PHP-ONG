<?php

use LDAP\Result;

require_once("../model/Sql.php");
require_once("../model/Responsavel_animal.php");
require_once("../controller/controller_Responsavel_animal.php");

                // require_once("view_reponsavel_animal");

                // $responsavel_animal_data = array(
                //     "cidade" => $cidade,
                //     "estado" => $estado,
                //     "email" => $email,
                //     "telefone" => $telefone,
                //     "id_animal" => $resultsAnimal["ids"][0]
                // );

                // $resultsResponsavel_animal = insertResponsavel_animal($responsavel_animal_data);

function insertResponsavel_animal($responsavel_animal_data){

    $instanceControllerResponsavel_animal = new Controller_Responsavel_animal();
    $resultsResponsavel_animal = $instanceControllerResponsavel_animal->insert($responsavel_animal_data);

    return($resultsResponsavel_animal);
}

?>


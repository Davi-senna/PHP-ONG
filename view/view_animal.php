<?php

require_once("../model/Animal.php");
require_once("../controller/controller_Animal.php");
require_once("../model/Responsavel.php");
require_once("../controller/controller_Responsavel.php");
extract($_POST);
var_dump($_FILES);
var_dump($_POST);

$animal_data = array(
    $name,
    $age,
    $genre,
    $specie,
    $breed,
    $image => $_FILES["image"]
);

$responsavel_data = array(
    $cidade,
    $estado,
    $email,
    $telefone
);

$instanceAnimal =  new Animal();
$instanceResponsavel = new Responsavel();







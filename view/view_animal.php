<?php

require_once("../model/Sql.php");
require_once("../model/Animal.php");
require_once("../controller/controller_Animal.php");
require_once("../model/Responsavel_animal.php");
require_once("../controller/controller_Responsavel_animal.php");
require_once("../model/Image.php");
require_once("../controller/controller_Image.php");

extract($_POST);

$animal_data = array(
    $nome,
    $idade,
    $sexo,
    $especie,
    $raca,
    $situacao,
    $descricao,
    $peso
);

$responsavel_animal_data = array(
    $cidade,
    $estado,
    $email,
    $telefone
);

//var_dump($animal_data);
//var_dump($responsavel_animal_data);

$image_data = $_FILES["image"];

//var_dump($image_data);


$instanceAnimal =  new Animal();
$instanceResponsavel_animal = new Responsavel_animal();







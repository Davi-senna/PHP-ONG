<?php

class controller_Animal{

    private $instanceModel;
    
    public function __construct($id = "Em processo de criação"){
        $this->instanceModel = new Animal();
    }

    public function insertAnimal($data){

        extract($data);
        //var_dump($data);

        $results = $this->instanceModel->insert($nome,$idade,$sexo,$raca,$especie,$situacao,$descricao,$peso);

        return $results;
    }

}

/*
$dir = "../img/animals/";
extract($_POST);

$image = $_FILES["image"];

if(!is_dir($dir)){
    mkdir($dir);
}

$source_image = $dir.md5(date('d/m/Y H:i:s').rand())."_".$image["name"];

if(move_uploaded_file($image["tmp_name"],$source_image)){

    header("Location: ../pages/admin/pg_admin.php?sucess='Animal iserido com sucesso'");

}else{

    header("Location: ../pages/admin/admin_animal/form_animal.php?error='Animal não foi cadastrado'");


    

}



*/
/*
var_dump($_FILES["image"]);
echo "<br>";
echo($image["error"]);
*/

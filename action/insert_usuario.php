<?php

require_once("../config.php");

extract($_POST);

$usuario = new Usuario($nome,$cpf,$tel,$cep,$rua,$cidade,$estado);

try{

$usuario->register();

header("Location: ../pages/pg_index_usuario.php");
}catch(Exception $e){
    header("Location: ../pages/pg_cadastro_usu.php?error=y");
}
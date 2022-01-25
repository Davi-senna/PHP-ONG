<?php

require_once("config.php");

// $teste = new Sql();
$teste = new Usuario();
$teste->cadastrar();
echo $teste;
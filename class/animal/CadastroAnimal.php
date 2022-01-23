<?php

require_once("Animal.php");

class CadastroAnimal extends Animal{
    public function __toString(){
       return "funcionou"; 
    }
}
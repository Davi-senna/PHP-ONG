<?php

//Função para incluir um arquivo ao instanciar a classe
spl_autoload_register(function ($class_name) {

    $fileName ="class".DIRECTORY_SEPARATOR. $class_name . ".php";

    function searchFile($fileName,$flag,$class_name){

        switch ($fileName) {

            case file_exists($fileName) == false && $flag == 1:
    
                $fileName ="class".DIRECTORY_SEPARATOR."admin".DIRECTORY_SEPARATOR.$class_name . ".php";
                
                if(file_exists($fileName) == false){
                    searchFile($fileName,$flag=2,$class_name);
                }else{
                    require_once($fileName);
                    break;
                }
            break;
            
            case file_exists($fileName) == false && $flag == 2:

                $fileName ="class".DIRECTORY_SEPARATOR."client".DIRECTORY_SEPARATOR.$class_name . ".php";
                if(file_exists($fileName) == false){
                    searchFile($fileName,$flag=3,$class_name);
                }else{
                    require_once($fileName);
                    break;
                }
            break;
            
                case file_exists($fileName) == false && $flag == 3:

                    $fileName ="class".DIRECTORY_SEPARATOR."animal".DIRECTORY_SEPARATOR.$class_name . ".php";
                    if(file_exists($fileName) == false){
                        echo 'Arquivo não encontrado';
                    }else{
                        require_once($fileName);
                        break;
                    }
                break;

            default:
                break;
        }
    }

    if(file_exists($fileName)){
        require_once($fileName);
    }else{
        searchFile($fileName,$flag=1,$class_name);
    }


});


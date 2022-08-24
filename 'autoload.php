<?php

$path = "";

spl_autoload_register(function($className){
    global $path;
    require_once $path . $className . '.php';
});

?>
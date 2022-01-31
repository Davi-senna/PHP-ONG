<?php

require_once("config.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo-icon.png" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>PetCare</title>
</head>
<body>
    <header>

        <figure id="content-logo">
            <img src="img/logo.png" alt="Logo da PetCare">
        </figure>

        <nav>
            <ul>
                <li>

                    <a href="#">
                    Home
                    </a>

                </li>
                <li>

                    <a href="#">
                    Adoção
                    </a>

                </li>
                <li>
                    
                    <a href="#">
                        Sobre
                    </a>

                </li>
            </ul>
        </nav>

        <a href="#" id="button-login">
             <h3>
                Entrar
             </h3>

            <img src="img/Login-icon.png" alt="Ícone de login">
        </a>

    </header>

    <section id="content-home">

    <div id="home-text">
        <h1>
            Que tal adotar?
        </h1>

        <h2>
            Diz que sim!
        </h2>

        <a href="#" class="button-empty" id="button-blue">
            Sim!
        </a>

    </div>

    <div id="home-image">

        <img src="img/fundo2.png" alt="Imagem de fundo do site">
        
    </div>

    </section>
    
</body>
</html>
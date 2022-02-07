<?php

require_once("config.php");

?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo-icon.png" type="image/x-icon" />
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

    <section id="content-adoption">

        <div id="adoption-image">

            <div class="content-animal">
                <img src="img/bob.png" alt="Imagem de animal">
                <h1>Bob</h1>
            </div>

            <div class="content-animal">
                <img src="img/bartolomeu.png" alt="Imagem de animal">
                <h1>Bartolomeu</h1>
            </div>

            <div class="content-animal">
                <img src="img/stuart.png" alt="Imagem de animal">
                <h1>Stuart</h1>
            </div>

            <div class="content-animal">
                <img src="img/caramelo.png" alt="Imagem de animal">
                <h1>Caramelo</h1>
            </div>

        </div>

        <div id="adoption-text">

            <h1>
                Faça sua parte
            </h1>

            <h1>
                e escolha já
            </h1>

            <h1>
                seu pet!
            </h1>

            <a href="#" class="button-empty" id="button-yellow">
                Ver mais
            </a>

        </div>


    </section>

    <section id="about">

        <h1>Sobre o projeto:</h1>

        <p>Esse projeto foi construido com o intuito de desenvolvimento profissional.<br> A ideia foi reproduzir um projeto pequeno, tal qual, foi meu primeiro projeto em console,<br> agora sendo implantado com front-end e back-end.</p>

        <h1 id="about-tec">Tecnologias usadas:</h1>


        <div id="about-image">
            <div id="image-info">

                <figure class="image-tec" id="tec-design">

                    <h2 class="tec-title">Design:</h2>

                    <img src="img/xd.png" alt="Imagem da logo do adobe xd">

                    <img src="img/photoshop.png" alt="Imagem da logo do photoshop">

                </figure>

                <figure class="image-tec">

                    <h2 class="tec-title">Front-end:</h2>

                    <img src="img/html.png" alt="Imagem da logo do photoshop">

                    <img src="img/css.png" alt="Imagem da logo do photoshop">

                    <img src="img/javascript.png" alt="Imagem da logo do photoshop">

                </figure>

                <figure class="image-tec">

                    <h2 class="tec-title">Back-end:</h2>

                    <img src="img/php.png" alt="Imagem da logo do photoshop">

                    <img src="img/mysql.png" alt="Imagem da logo do photoshop">
                </figure>

            </div>
            <figure id="fundoDog">
                <img src="img/fundoDog.png" alt="Imagem de fundo de um cachorro">
            </figure>
        </div>

    </section>

</body>

</html>
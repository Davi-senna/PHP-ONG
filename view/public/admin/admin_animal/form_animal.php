<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../../img/logo-icon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="../../../../index.css">
    <script type="text/javascript" src="../../../../js/script.js"></script>

    <title>PetCare</title>
</head>

<body id="admin">
    <div id="pg-admin">
        <nav class="menu-lateral" id="menu-admin">

            <figure id="logo-menu-lateral">
                <img src="../../../../img/logoMaior.png" alt="Logo Petcare">
            </figure>

            <ul id="container-link">
                <li>
                    <a href="../pg_admin.php">
                        <div class="link-menu-lateral  link-activated">

                            <figure>
                                <img src="../../../../img/icon-dog.png" alt="Ícone de cachorro">
                            </figure>
                            <span>Animais</span>

                        </div>
                    </a>
                </li>
                <li>
                    <a href="../admin_user/index_user.php">
                        <div class="link-menu-lateral">

                            <figure id="user-icon">
                                <img src="../../../../img/user-icon.png" alt="Ícone de usuario">
                            </figure>
                            <span>Usuarios</span>

                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="link-menu-lateral">

                            <figure id="logo-icon">
                                <img src="../../../../img/logo-icon.png" alt="Ícone de editar">
                            </figure>
                            <span>Adoções</span>

                        </div>
                    </a>
                </li>

            </ul>

        </nav>
        <div class="conteudo-admin">

            <form class="hidden-inativo" action="../../../view_animal.php" method="POST" enctype="multipart/form-data">

                <div class="card-admin ">

                    <div class="card-header">
                        <span>Dados do animal</span>
                    </div>

                    <div class="container-form-admin">


                        <div class="row">

                            <div class="column">

                                <div class="form-group">
                                    <label for="nome">Nome do animal:</label>
                                    <input class="input-form-admin" type="text" required placeholder="Digite o nome do animal" name="nome" id="nome">
                                </div>
                                <div class="form-group">
                                    <label for="idade">Idade do animal:</label>
                                    <input class="input-form-admin" type="number" required placeholder="Digite a idade do animal" name="idade" id="idade">
                                </div>
                                <div class="form-group">
                                    <label for="especie">Nome da espécie animal:</label>
                                    <input class="input-form-admin" required type="text" placeholder="Digite o nome da espécie animal" name="especie" id="especie">
                                </div>
                                <div class="form-group">
                                    <label for="raca">Nome da raça animal:</label>
                                    <input class="input-form-admin" required type="text" placeholder="Digite o nome da raça do animal" name="raca" id="raca">
                                </div>
                                <div class="form-group">
                                    <label for="peso">Peso do animal (kg): </label>
                                    <input class="input-form-admin" required type="number" placeholder="Digite o nome da raça do animal" name="peso" id="peso">
                                </div>

                                <div class="form-group-options">

                                    <div class="container-form-options">

                                        <label for="sexo">Sexo do animal:</label>

                                        <div class="row container-checkbox margin-checkbox">

                                            <input required type="radio" value="1" name="sexo" id="sexo">
                                            <span class="span-checkbox">Macho</span>

                                        </div>

                                        <div class="row container-checkbox">

                                            <input required type="radio" value="0" name="sexo" id="sexo">
                                            <span class="span-checkbox">Fêmea</span>

                                        </div>

                                    </div>

                                    <div class="container-form-options">

                                        <label for="situacao">Situacao:</label>

                                        <div class="row container-checkbox margin-checkbox">

                                            <input required type="radio" value="1" name="situacao" id="situacao">
                                            <span class="span-checkbox">Vivo</span>

                                        </div>

                                        <div class="row container-checkbox">

                                            <input required type="radio" value="0" name="situacao" id="situacao">
                                            <span class="span-checkbox">Morto</span>

                                        </div>

                                    </div>

                                </div>

                            </div>


                            <div class="column">

                                <div class="form-group">

                                    <textarea class="description" required name="descricao" id="description-animal" cols="55" rows="10" placeholder="Descrição"></textarea>

                                </div>


                                <div class="form-group">

                                    <input type="file" name="image" id="input-image">

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="container-etapa">

                    <div class="figure-etapa">
                        <div class="figure-circle circle-ativo"></div>
                        <div class="figure-circle circle-inativo"></div>
                    </div>

                    <div class="container-button-etapa">
                        <button class="button-empty-admin" type="submit">
                            <span>
                                Proxima etapa >
                            </span>
                        </button>

                    </div>
                </div>
            </form>


            <form class="hidden-ativo" action="../../../view_animal.php" method="POST" enctype="multipart/form-data">
                <div class="card-admin">

                    <div class="card-header">
                        <span>Dados do Responsável</span>
                    </div>

                    <div class="container-form-admin">


                        <div class="row">

                            <div class="column">

                                <div class="form-group">
                                    <label for="cidade">Cidade:</label>
                                    <input class="input-form-admin" required type="text" placeholder="Digite o nome da cidade onde o animal se encontra" name="cidade" id="cidade">
                                </div>
                                <div class="form-group">
                                    <label for="estado">Estado:</label>
                                    <input class="input-form-admin" required type="text" placeholder="Digite o nome do estado onde o animal se encontra" name="estado" id="estado">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input class="input-form-admin" required type="email" placeholder="Digite o email do responsável" name="email" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="telefone">Telefone</label>
                                    <input class="input-form-admin" required type="text" placeholder="Ex: (71) 9278-4526" name="telefone" id="telefone">
                                </div>

                            </div>


                        </div>

                    </div>

                </div>
            </form>
        </div>
    </div>



    <!--<?php
        if (isset($_GET['error'])) {
            $erro = $_GET['error'];
            echo "<script>alert($erro)</script>";
        }
        ?>-->
</body>

</html>
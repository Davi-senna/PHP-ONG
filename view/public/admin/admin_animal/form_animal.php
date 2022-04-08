<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../../img/logo-icon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="../../../../index.css">
    <script type="text/javascript" src="../../../../script.js"></script>

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
            <form action="../../../../action/insert_animal.php" method="post" enctype="multipart/form-data">

                <div class="card-admin">

                    <div class="card-header">
                        <spam>Dados do animal</spam>
                    </div>

                    <div class="container-form-admin">


                        <div class="row">

                            <div class="column">

                                <div class="form-group">
                                    <label for="name">Nome do animal:</label>
                                    <input class="input-form-admin" type="text" placeholder="Digite o nome do animal" name="name" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="age">Idade do animal:</label>
                                    <input class="input-form-admin" type="text" placeholder="Digite a idade do animal" name="age" id="age">
                                </div>
                                <div class="form-group">
                                    <label for="genre">Sexo do animal:</label>
                                    <input class="input-form-admin" type="text" placeholder="Digite o sexo do animal" name="genre" id="genre">
                                </div>
                                <div class="form-group">
                                    <label for="specie">Nome da espécie animal:</label>
                                    <input class="input-form-admin" type="text" placeholder="Digite o nome da espécie animal" name="specie" id="specie">
                                </div>
                                <div class="form-group">
                                    <label for="breed">Nome da raça animal:</label>
                                    <input class="input-form-admin" type="text" placeholder="Digite o nome da raça do animal" name="breed" id="breed">
                                </div>


                            </div>

                            <div class="column">

                                <div class="form-group">

                                    <textarea class="description" name="description-animal" id="description-animal" cols="55" rows="10" placeholder="Descrição"></textarea>

                                </div>


                                <div class="form-group">

                                    <input type="file" name="image" id="input-image">

                                </div>

                            </div>

                        </div>


                    </div>




                </div>

                <div class="card-admin">

                    <div class="card-header">
                        <spam>Dados do Responsável</spam>
                    </div>

                    <div class="container-form-admin">


                        <div class="row">

                            <div class="column">

                                <div class="form-group">
                                    <label for="cidade">Cidade:</label>
                                    <input class="input-form-admin" type="text" placeholder="Digite o nome da cidade onde o animal se encontra" name="cidade" id="cidade">
                                </div>
                                <div class="form-group">
                                    <label for="estado">Estado:</label>
                                    <input class="input-form-admin" type="text" placeholder="Digite o nome do estado onde o animal se encontra" name="estado" id="estado">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input class="input-form-admin" type="email" placeholder="Digite o email do responsável" name="email" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="telefone">Telefone</label>
                                    <input class="input-form-admin" type="text" placeholder="Digite o telefone do resposável" name="telefone" id="telefone">
                                </div>

                            </div>


                        </div>

                    </div>


                </div>

                <input type="submit" value="Enviar">

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
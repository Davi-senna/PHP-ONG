<?php
require_once("../../../autoload.php");
use Controller\controller_Animal;
use Controller\controller_Image;

?>

<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../img/logo-icon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="../../../index.css">
    <script type="text/javascript" src="../../../js/script.js"></script>

    <title>PetCare</title>
</head>

<body id="admin">

    <div id="pg-admin">

        <nav class="menu-lateral" id="menu-admin">

            <figure id="logo-menu-lateral">
                <img src="../../../img/logoMaior.png" alt="Logo Petcare">
            </figure>

            <ul id="container-link">
                <li>
                    <a href="#">
                        <div class="link-menu-lateral link-activated">

                            <figure>
                                <img src="../../../img/icon-dog.png" alt="Ícone de cachorro">
                            </figure>
                            <span>Animais</span>

                        </div>
                    </a>
                </li>
                <li>
                    <a href="admin_user/index_user.php">
                        <div class="link-menu-lateral">

                            <figure id="user-icon">
                                <img src="../../../img/user-icon.png" alt="Ícone de usuario">
                            </figure>
                            <span>Usuarios</span>

                        </div>
                    </a>
                </li>
                <li>
                    <a href="admin_animal/index_adoption.php">
                        <div class="link-menu-lateral">

                            <figure id="logo-icon">
                                <img src="../../../img/logo-icon.png" alt="Ícone de editar">
                            </figure>
                            <span>Adoções</span>

                        </div>
                    </a>
                </li>

            </ul>

        </nav>

        <div class="conteudo-admin">

            <h1>Lista de animais</h1>

            <div id="filter-admin">

                <span id="filter-text">Todos os animais</span>
                <a href="#">
                    <span>Filtro</span>
                    <figure>
                        <img src="../../../img/filter-icon.png" alt="Editar">
                    </figure>
                </a>

            </div>
            <hr>
            <a class="button-empty-admin" href="admin_animal/form_animal.php">
                <span>
                    Adicionar +
                </span>
            </a>
            <div id="container-list-admin">

                <?php

                $controllerAnimal = new controller_Animal();
                $animais = $controllerAnimal->getAll();
                
                foreach ($animais as $animal) {

                    $controllerImage = new Controller_Image();
                    $image = $controllerImage->selectImage($animal['chip']);

                    if ($animal["situacao"] == 1) {
                        $situacao = "situation-ativo";
                    } else {
                        $situacao = "situation-inativo";
                    }

                ?>
                    <div class="list-admin">

                        <div class="list-bar <?php echo $situacao ?>"></div>

                        <figure>
                            <img src="<?php echo "../../../img/animals/" . $image['source'] ?>" alt="">
                        </figure>

                        <div class="container-list-admin-situation">

                            <span class="list-admin-name"><?php echo $animal["nome"] ?></span>

                            <div class="situation <?php echo $situacao ?>">

                                <?php
                                if ($animal["situacao"] == 1) {
                                    echo "Ativo";
                                } else {
                                    echo "Inativo";
                                }
                                ?>

                            </div>
                        </div>

                        <div class="container-info-animal">

                            <div class="info-animal">
                                <span>Idade:</span>
                                <div class="info-animal-value">
                                    <span><?php echo $animal["idade"] ?> anos</span>
                                </div>
                            </div>

                            <div class="info-animal">
                                <span>Sexo:</span>
                                <div class="info-animal-value">
                                    <span><?php if ($animal["sexo"] == 1) {
                                                echo "Maxo";
                                            } else {
                                                echo "Fêmea";
                                            } ?></span>
                                </div>
                            </div>



                        </div>

                        <div class="container-actions">
                            <div class="button-action-admin button-action-admin-edit">
                                <a href="admin_animal/form_update_animal.php?id_animal=<?php echo $animal["chip"]?>">
                                    <img src="../../../img/edit-icon.png" alt="Editar">
                                </a>
                            </div>

                            <div class="button-action-admin button-action-admin-delete">
                                <a href="../../view_animal.php?stmt=delete&&id=<?php echo $image['id']."&&id_animal=".$image['id_animal']?>">
                                    <img src="../../../img/delete-icon.png" alt="Deletar">
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
    <?php

    if (isset($_GET)) {
        if (isset($_GET["success"])) { ?>

            <div class="alert alert-success">

                <div class="header-alert">

                    <span><img src="../../../img/success-icon.png" alt="Sucesso"> Alert!</span>
                    <a href="javascript:fechar()" class="close">×</a>
                </div>
                <span><?php echo ($_GET["success"]) ?></span>
            </div>

        <?php
        }
        if (isset($_GET["error"])) {
        ?>
            <div class="alert alert-success">

                <div class="header-alert">

                    <span><img src="../../../img/success-icon.png" alt="Sucesso"> Alert!</span>
                    <a href="#" class="close">×</a>
                </div>
                <span></span>
            </div>
    <?php
        }
    } ?>


</body>

</html>
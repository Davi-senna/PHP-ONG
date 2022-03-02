<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/logo-icon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="../../index.css">
    <script type="text/javascript" src="../../script.js"></script>

    <title>PetCare</title>
</head>

<body id="admin">
    <div id="pg-admin">

        <nav class="menu-lateral" id="menu-admin">

            <figure id="logo-menu-lateral">
                <img src="../../img/logoMaior.png" alt="Logo Petcare">
            </figure>

            <ul id="container-link">
                <li>
                    <a href="#">
                        <div class="link-menu-lateral link-activated">

                            <figure>
                                <img src="../../img/icon-dog.png" alt="Ícone de cachorro">
                            </figure>
                            <span>Animais</span>

                        </div>
                    </a>
                </li>
                <li>
                    <a href="pg_admin_user.php">
                        <div class="link-menu-lateral">

                            <figure id="user-icon">
                                <img src="../../img/user-icon.png" alt="Ícone de usuario">
                            </figure>
                            <span>Usuarios</span>

                        </div>
                    </a>
                </li>
                <li>
                    <a href="pg_admin_adoption.php">
                        <div class="link-menu-lateral">

                            <figure id="logo-icon">
                                <img src="../../img/logo-icon.png" alt="Ícone de editar">
                            </figure>
                            <span>Adoções</span>

                        </div>
                    </a>
                </li>

            </ul>

        </nav>

        <div id="conteudo-admin">
            
            <h1>Lista de animais</h1>

            <div id="filter-admin">
                Todos os animais
                <figure>
                    <img src="../../img/edit-icon.png" alt="Editar">
                </figure>
            </div>
        </div>
    </div>
</body>

</html>
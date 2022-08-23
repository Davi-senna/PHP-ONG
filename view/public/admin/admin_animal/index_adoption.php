<!DOCTYPE html>
<html lang="pt-bt">

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
                        <div class="link-menu-lateral">

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
                        <div class="link-menu-lateral link-activated">

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
            
        <div class="row" id="conteudo-admin-header">
                <h1>Lista de adoções</h1>
                <div id="container-menu">
                    <a href="javascript:activate('container-menu-mobile')">
                        <div class="item-menu"></div>
                        <div class="item-menu"></div>
                        <div class="item-menu"></div>
                    </a>
                </div>
            </div>

            <div id="filter-admin">
                
                <span id="filter-text">Todos as adoções</span>
                <a href="#">
                    <span>Filtro</span>
                    <figure>
                        <img src="../../../../img/filter-icon.png" alt="Editar">
                    </figure>
                </a>
                
            </div>
        </div>
    </div>

    <div id="container-menu-mobile" class="hidden-ativo">
        <div onclick="inactivate('container-menu-mobile')" id="back-menu"></div>
        <div id="menu-mobile">
            <figure id="logo-menu-lateral">
                <img src="../../../../img/logoMaior.png" alt="Logo Petcare">
            </figure>
            <nav id="nav-mobile">
                <ul>
                    <li>
                        <a href="../pg_admin.php">
                            <img class="arrow-menu" src="../../../../img/arrow-left.png" alt="Ir para animais">
                            <span>Animais</span>
                        </a>
                    </li>
                    <li>
                        <a href="../admin_user/index_user.php">
                            <img class="arrow-menu" src="../../../../img/arrow-left.png" alt="Ir para usuarios">
                            <span>Usuários</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="arrow-menu" src="../../../../img/arrow-left.png" alt="Ir para adoções">
                            <span>Adoções</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <figure id="container-close-menu">
                <a href="javascript:inactivate('container-menu-mobile')">
                    <img src="../../../../img/close.png" alt="Fechar menu">
                </a>
            </figure>
        </div>
    </div>
</body>

<style>

body {  
    position: relative;
    overflow: hidden;
}

</style>

</html>

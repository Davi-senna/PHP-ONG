<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/logo-icon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="../index.css">
    <script type="text/javascript" src="../script.js"></script>

    <title>PetCare</title>
</head>

<body id="pg_cadastro">

    <section id="cadastro-usu">

        <form class="form_usu" id="form_login_usu" action="../action/valid_login.php" method="post">

            <span>Fazer login</span>
            <div id="container-login">
                <div class="container-input-dados">
                    <input class="input-dados" type="text" required name="cpf" id="cpf">
                    <label class="label-animado" for="cpf">Cpf ou login</label>
                </div>

                <div class="container-input-dados">
                    <input class="input-dados" type="password" required name="senha" id="senha">
                    <label class="label-animado" for="senha">Senha</label>
                </div>
            </div>
            <div class="container-button-dados">
            <button id="button-dados" type="submit" >Entrar</button>
            </div>

        </form>
    </section>

    <section id="pg-cadastro-fundo">
        <figure>
            <img src="../img/fundo.png" alt="">
        </figure>
    </section>
</body>

<?php

if(isset($_GET['error'])){
    $erro = $_GET['error'];
    echo "<script>alert($erro)</script>";
}

?>

</html>
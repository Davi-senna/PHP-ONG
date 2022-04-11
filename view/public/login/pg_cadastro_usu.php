<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../img/logo-icon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="../../../index.css">
    <script type="text/javascript" src="../../../script.js"></script>

    <title>PetCare</title>
</head>

<body id="pg_cadastro">

    <section id="cadastro-usu">

        <form class="form_usu" id="form_cadastro_usu" action="../../view_usuario.php" method="post">

            <span>Faça seu cadastro</span>

            <div id="login">

                <div class="container-input-dados ">
                    <input class="input-dados" type="text" required name="nome" id="nome">
                    <label class="label-animado" for="nome">Nome</label>
                </div>

                <div class="container-input-dados">
                    <input class="input-dados" type="number" required name="cpf" id="cpf">
                    <label class="label-animado" for="cpf">Cpf</label>
                </div>

                <div class="container-input-dados">
                    <input class="input-dados" type="password" required name="senha" id="senha">
                    <label class="label-animado" for="senha">Senha</label>
                </div>

                <div class="container-input-dados">
                    <input class="input-dados" type="tel" required name="tel" id="tel">
                    <label class="label-animado" for="tel">Telefone</label>
                </div>

                <div class="container-input-dados">
                    <input class="input-dados" required type="text" name="cep" id="cep">
                    <label class="label-animado" for="cep">Cep</label>
                </div>

                <div class="container-input-dados">
                    <input class="input-dados" required type="text" name="rua" id="rua">
                    <label class="label-animado" for="rua">Rua</label>
                </div>

                <div class="container-input-dados">
                    <input class="input-dados" required type="text" name="cidade" id="cidade">
                    <label class="label-animado" for="cidade">Cidade</label>
                </div>

                <div class="container-input-dados">
                    <input class="input-dados" required type="text" name="estado" id="estado">
                    <label class="label-animado" for="estado">Estado</label>

                    <input type="hidden" name="stmt" value="insert">
                </div>
            </div>
            <div class="container-button-dados">
                <button class="button-dados" type="submit" >Fazer cadastro</button>
                <a href="pg_login.php">Já tenho uma conta</a>
            </div>

        </form>
    </section>

    <section id="pg-cadastro-fundo">
        <figure>
            <img src="../../../img/fundo-cadastro.png" alt="Imagem de fundo">
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
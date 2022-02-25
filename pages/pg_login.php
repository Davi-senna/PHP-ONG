

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

        <form id="form_cadastro_usu" action="../action/insert_usuario.php" method="post">

            <span>Fazer loginaaa</span>

                <div class="container-input-dados">
                    <input class="input-dados" type="number" required name="cpf" id="cpf">
                    <label class="label-animado" for="cpf">Cpf</label>
                </div>

                <div class="container-input-dados">
                    <input class="input-dados" type="password" required name="senha" id="senha">
                    <label class="label-animado" for="tel">Senha</label>
                </div>

            <div class="container-button-dados">
                <input id="button-dados" type="submit" value="Fazer cadastro">
                <a href="pg_login.php">Já tenho uma conta</a>
            </div>

        </form>
    </section>

    <section id="pg-cadastro-fundo">
        <figure>
            <img src="../img/fundo.png" alt="">
        </figure>
    </section>
</body>

</html>
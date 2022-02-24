<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <title>Document</title>
</head>

<body id="pg_cadastro">

    <section id="cadastro-usu">

        <form id="form_cadastro_usu" action="#" method="post">

            <span>Faça seu cadastro</span>

            <div id="login">

                <div class="container-input-dados ">
                    <input class="input-dados" type="text" required name="nome" id="nome">
                    <label class="label-animado" for="nome">Nome</label>
                </div>

                <div class="container-input-dados">
                    <input class="input-dados" type="text" required name="cpf" id="cpf">
                    <label class="label-animado" for="cpf">Cpf</label>
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
                </div>
            </div>
            <div class="container-button-dados">
                <input id="button-dados" type="submit" value="Fazer cadastro">
                <a href="#">Já tenho uma conta</a>
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
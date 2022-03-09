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
<body id="admin">
    <form action="../../../action/insert_animal.php" method="post" enctype="multipart/form-data">

        <input type="text" name="name" id="name">
        <input type="file" name="image" id="image">

        <input type="submit" value="Enviar">

    </form>

    <?php
        if(isset($_GET['error'])){
            $erro = $_GET['error'];
            echo "<script>alert($erro)</script>";
        }
    ?>
</body>
</html>


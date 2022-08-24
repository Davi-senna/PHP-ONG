<?php

require_once("../vendor/autoload.php");
use Controller\controller_Usuario;

extract($_POST);


if (isset($stmt)) {

    switch ($stmt) {

        /*case 'delete':

            try {
                $objectController = new Controller_Usuario();
                $objectController->deleteUser($id);
                header("Location:public/user/usuario.php?success=Usuário deletado com sucesso");
            } catch (\Throwable $th) {
                header("Location:public/user/usuario.php?error=Não foi possivel deletar esse usuario");
            }

            break;*/

        case 'insert':

            try {
                $objectController = new Controller_Usuario();
                $objectController->add_user($_POST);
                header("Location:public/user/pg_index_usuario.php?success=Usuário cadastrado com sucesso");
            } catch (\Throwable $th) {
                header("Location:public/login/pg_cadastro_usu.php?error=Não foi possivel cadastrar esse usuario");
            }

            break;

        /*case 'update':

            try {
                $objectController = new Controller_Usuario($id);
                $objectController->updateUser($_POST);
                header("Location:public/user/usuario.php?success=Usuário atualizado com sucesso");
            } catch (\Throwable $th) {
                header("Location:public/user/usuario.php?error=Não foi possivel atualizar esse usuario");
            }

            break;*/
    }
} else {
    header("Location:public/user/usuario.php?error=Comando invalido");
}

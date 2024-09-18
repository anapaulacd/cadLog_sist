<?php
// requer arquivo 'user.php que contem o model user com as função para a maipulação de dados do usuarios
require_once 'models/user.php';

class AuthController
{
    // Criar função reponsavel pelo processo de login
    public function login()
    {
        // Verificar se a requisição http é do tipo POST, ou seja, se o formulário foi enviado
if($_SERVER['request_method'] == 'post'){

}
    }
}
?>
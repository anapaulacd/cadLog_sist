<?php
// requer arquivo 'user.php que contem o model user com as função para a maipulação de dados do usuarios
require_once 'models/user.php';

class AuthController
{
    // Criar função reponsavel pelo processo de login
    public function login()
    {
        // Verificar se a requisição http é do tipo POST, ou seja, se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $user = User::findByEmail($email);
            
            if ($user && password_verify($senha, $user['senha'])) {
                session_start();
                //
                $_SESSION['usuario_id']    = $user['id'];
                $_SESSION['perfil']        = $user['perfil'];

                header('location: index.php?action=dashboard');
            } else {
                echo "Email ou senha incorretos";
            }
        } else {
            // Se a requisição não for post (por exemplo, get), carrega a página de registro
            include 'views/login.php';
        }
    }
    public function logout(){
        session_start();
        session_destroy();
        header('location: index.php');
    }
}
?>
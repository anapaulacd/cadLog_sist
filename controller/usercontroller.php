<?php
// Definição da classe UserCcontroler, reponsáver por gerenciar as ações realacionadas aos usuarios 
class UserController{
        // Função responsável por cadastrar o usuário.
    public function  register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => password_hash($_POST['senha'],  PASSWORD_DEFAULT), // = criptografa a senha
                'perfil' => $_POST['perfil']
            ];
 
            User::create($data);
        } else {
            // Se a requisição não for POST (por exemplo se for GET), carrega a pagina de resgistro.
            include 'views/register.php';
        }
    }
}
 
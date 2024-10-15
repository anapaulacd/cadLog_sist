<?php
// Inclui arquivos de controlador para lidar com diferentes ações
require 'controller/autocontroller.php'; // inclui o controlador de autenticação
require 'controller/usercontroller.php'; // inclui o controlador de usuário
require 'controller/dashboardcontroller.php'; // inclui o controlador de dashboard
 
// Cria instâncias dos controladores para utilizar seus métodos
$authController = new AuthController(); // Instancia o controlador de autenticação
$userController = new UserController();
$dashboardController = new dashboardcontroller();
 
// Coleta a ação da URL, se não houver definida, usa 'login' por padrão
$action = $_GET['action'] ?? 'login'; // Usa operador de coalescência nula (??) para definir 'login' se 'action' não estiver presente
 
// Verifica a ação solicitada e chama o método apropriado do controlador
switch($action){
    case 'login':
        $authController->login(); // chama o método login do controlador de autenticação
        break;
    case 'register':
        $userController->register();
        break;
        case 'logout':
            $authController ->logout();
            break;
    default:
        $authController->login(); // chama o método login do controlador de autenticação
        break;

}
?>

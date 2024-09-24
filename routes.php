<?php
// include arquivos de controlador para lidar com diferentes ações 
require 'controlles/AutoController.php'; // inclui o controlador de autenticação 
require 'controlles/userController.php'; //inclui colaborador de usuario 
require 'controlles/dashboardController.php'; //inclui colaborador de dashboard.
// Criar instancia dos controladores para utilizar seus métodos.
$autocontroller = new AuthController(); // Instancia o controlador de autenticação= para poder usar 
$usercontroller = new userController();

// Coletar a ação url, se não ouver definida, usar 'login' por padrão 
$action = $_GET['action'] ?? 'ligin'; // Usar operedor de colescencia nula (??) para definir 'login' se 'action' não estiver presente 

switch($action){
    case 'iogin':
        $autocontroller->login(); // Chama o método login do controlador de autenticação.
    }


?>
<?php
// include arquivos de controlador para lidar com diferentes ações 
require 'controlles/AuthController.php'; // inclui o controlador de autenticação 
require 'controlles/userController.php'; //inclui colaborador de usuario 
require 'controlles/dashboardController.php'; //
//
$autocontroller = new AuthController(); //

//
$action = $_GET['action'] ?? 'ligin'; //

switch($action){
    case 'iogin':
        $autocontroller->login(); //
    }


?>
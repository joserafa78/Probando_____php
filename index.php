<?php
require_once 'vendor/autoload.php';

//FRONCONTROLER
$page = $_GET['page'] ?? null;

switch ($page) {
    case 'home':
        //require("src/vistas/index.php");
        //require("src/vistas/home.php");
        require("src/vistas/bootstrap.php");
        break;
    case 'contact':
        require("src/vistas/contact.php");
        break;
    case 'services':
        require("src/vistas/services.php");
        break;
    case 'error':
        require("src/vistas/404.php");
        break;
        deafult:
        require("src/vistas/404.php");
        break;
}

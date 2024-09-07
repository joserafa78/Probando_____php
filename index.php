<?php
require_once 'vendor/autoload.php';

//FRONCONTROLER
$page = $_GET['page'] ?? null;

switch ($page) {
    case 'home':
        require("src/vistas/index.php");
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

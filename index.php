<?php
    require_once "config/database.php";
    $connect = Database::connect();

    if (isset($_GET['controller'], $_GET['action']))
    {
        $controller = $_GET['controller'];
        $action = $_GET['action'];
    }
    else
    {
        $controller = 'home';
        $action  = 'index';
    }

//        var_dump($controller,$action);
    require_once 'views/layout.php';
?>
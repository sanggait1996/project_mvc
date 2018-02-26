<?php

require_once 'controllers/'.$controller.'.php';

switch ($controller)
{
    case 'home';
    $controller = new Home();
    break;

    case 'nhanvien';
    $controller = new Nhanvien();
    break;
}

$controller->{$action}();
?>
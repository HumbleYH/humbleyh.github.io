<?php
    $defaultClass = 'home';
    $defaultMethod = 'index';

    $url = isset($_GET['url']) ? $_GET['url'] : null;

    $controller = "controlleur".ucfirst($defaultClass);
    $action = ucfirst($defaultMethod);

    require_once ("controlleur/$controller.php");
    $controller::$action();
?>
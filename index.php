<?php
require_once 'config.php';
require_once 'helpers.php';

require_once 'Classes/Conexion.php';
require_once 'Classes/Mysql.php';
require_once 'Classes/Controllers.php';
require_once 'Classes/Views.php';
require_once 'controllers/Errors.php';
$error = new Errors();

$url = isset($_GET['url']) ? $_GET['url'] : 'login';
$arrUrl = explode('/', $url);
$controller = $arrUrl[0];

$method = $controller;
$itemId = '';

if (isset($arrUrl[1]) && $arrUrl[1] != '') {
    $method = $arrUrl[1];
}

if (isset($arrUrl[2]) && $arrUrl[2] != '') {
    $itemId = $arrUrl[2];
}

$ctrl = ucfirst($controller);
$ctrlFile = 'controllers/' . $ctrl . '.php';

if (!file_exists($ctrlFile)) {
    $error->notFound();
} else {
    require_once $ctrlFile;
    $controller = new $ctrl($itemId);

    !method_exists($controller, $method)
    ? $error->errors()
    : $controller->{$method}();
}

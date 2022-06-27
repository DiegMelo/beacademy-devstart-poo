<?php

include '../vendor/autoload.php';

use App\Controller\IndexController;
use App\Controller\ProductController; 
use App\Controller\ErrorController; 
$url = explode('?', $_SERVER['REQUEST_URI'])[0];
echo $url;

function creatRoute(string $controllerName, string $methodName){
    return [
        'controller' => $controllerName,
        'method' => $methodName,
    ];
}

$routes =[
    '/' => createRoute(IndexController::class, 'indexAction'), 
    '/produtos' => createRoute(ProductController::class, 'listAction'),        'controller' => ProductController :: class,
    '/produtos/novo' => createRoute(ProductController::class, 'addAction'),        'controller' => ProductController :: class,
      
];

if (false === isset($routes[$url])){
    (new ErrorController())-> notFoundAction();
    exit;
}

$controllerName = $routes['url']['controller'];
$methodName = $routes[$url]['method'];

(new $controllerName()) -> $methodName();

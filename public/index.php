<?php 

require_once __DIR__ . "/../vendor/autoload.php";

use MVC\PHP\App\Router;
use MVC\PHP\Controller\HomeController;
use MVC\PHP\Controller\LoginController;
use MVC\PHP\Controller\ProductController;
use MVC\PHP\Middleware\AuthMiddleware;

Router::add('GET', '/login', LoginController::class, 'index');
Router::add('GET', '/register','RegisterController', 'register');
Router::add('GET', '/home', HomeController::class, 'index', [AuthMiddleware::class]);

Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class,'categories');


Router::run();
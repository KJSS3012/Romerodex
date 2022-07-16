<?php

use Cfhjk\Romerodex\App\Router;

$router = new Router;

$router->get('/lista', '/Views/list.php');
$router->get('/list', '/Views/list.php');

$router->get('/register', '/Views/Auth/register.php');
$router->post('/register', '/Views/Auth/register.php');
$router->get('/registro', '/Views/Auth/register.php');
$router->post('/registro', '/Views/Auth/register.php');

$router->get('/login', '/Views/auth/login.php');
$router->post('/login', '/Views/auth/login.php');
$router->get('/logar', '/Views/auth/login.php');
$router->post('/logar', '/Views/auth/login.php');

$router->get('/about', '/Views/owners.php');
$router->get('/sobre', '/Views/owners.php');

$router->get('/home', '/Views/home.php', true);
$router->get('/', '/Views/home.php', true);
$router->post('/logout', '/Views/auth/logout.php', true);

return $router;

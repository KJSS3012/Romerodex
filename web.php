<?php

use Cfhjk\Romerodex\App\Router;

$router = new Router;

$router->get('/lista', '/Views/list.php', true);
$router->get('/list', '/Views/list.php', true);

$router->get('/register', '/Views/Auth/register.php');
$router->post('/register', '/Views/Auth/register.php');
$router->get('/registro', '/Views/Auth/register.php');
$router->post('/registro', '/Views/Auth/register.php');

$router->get('/login', '/Views/Auth/login.php');
$router->post('/login', '/Views/Auth/login.php');
$router->get('/logar', '/Views/Auth/login.php');
$router->post('/logar', '/Views/Auth/login.php');

$router->get('/registerRm', '/Views/register.php', true);
$router->post('/registerRm', '/Views/register.php', true);

$router->get('/about', '/Views/owners.php', true);
$router->get('/sobre', '/Views/owners.php', true);

$router->get('/home', '/Views/home.php', true);
$router->get('/', '/Views/home.php', true);
$router->post('/logout', '/Views/auth/logout.php', true);

return $router;

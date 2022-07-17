<?php

namespace Cfhjk\Romerodex\App;

use Cfhjk\Romerodex\App\Http\AuthMiddleware;

class Router
{

    protected $post; //rotas post
    protected $get; //rotas get

    public function __construct()
    {
        $this->post = array();
        $this->get = array();

        $this->get('/error', '/Views/error');
    }

    public function send()
    {

        $path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'POST') {

            //checa caminho solicitado
            if (array_key_exists($path, $this->post)) {
                if (AuthMiddleware::check($path)) {
                    //verifica se usuário está autenticado
                    AuthMiddleware::authenticated();
                }
                include(__DIR__ . '/..' . $this->post[$path]);
                exit;
            }
        } else if ($method === 'GET') {

            //checa caminho solicitado
            if (array_key_exists($path, $this->get)) {
                //checa se rota é autorizada
                if (AuthMiddleware::check($path)) {
                    //verifica se usuário está autentica
                    AuthMiddleware::authenticated();
                }
                include(__DIR__ . '/..' . $this->get[$path]);
                exit;
            }
        }

        include_once(__DIR__ . '/..' . $this->get['/error'] . '.php');
        exit;
    }

    //definir rotas get
    public function get($path, $file, $auth = false)
    {
        $this->get[$path] = $file;
        if ($auth) {
            AuthMiddleware::auth($path);
        }
    }


    //definir rotas posts
    public function post($path, $file, $auth = false)
    {
        $this->post[$path] = $file;
        if ($auth) {
            AuthMiddleware::auth($path);
        }
    }
}

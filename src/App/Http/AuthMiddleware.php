<?php

namespace Cfhjk\Romerodex\App\Http;

class AuthMiddleware
{

    protected static $auth = array();

    static function auth($path)
    {
        self::$auth[] = $path;
    }

    static function check($path)
    {
        return in_array($path, self::$auth);
    }

    /**
     * Função que avalia se um usuário está com sessão ativa
     * 
     */
    static function authenticated()
    {

        session_start();

        if (!isset($_SESSION['id'])) {
            session_unset();
            session_destroy();
            header("Location: /login", 301);
            exit;
        } else {
            $session_id = session_id() . $_SESSION['user'];
            if (!($_SESSION['id'] === $session_id)) {
                session_unset();
                session_destroy();
                header("Location: /login", 301);
                exit;
            }

            return true;
        }
    }
}

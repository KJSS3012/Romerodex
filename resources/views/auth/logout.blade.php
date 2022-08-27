<?php

$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'POST') {
    //inicia ou recupera sessao atual
    session_start();
    //destrói viáveis da sessão
    session_destroy();
    //limpa os cookies gerados
    setcookie(session_name(), '', 0, '/');
    //manda pra index
    header('Location: /login');
    exit;
} else {
    header('Location: /home');
    exit;
}

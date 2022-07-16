<?php

use Cfhjk\Romerodex\Models\Model;

//registrando conexao com o banco de dados
Model::registerConection(new SQLite3(__DIR__ . '/Database/banco.db'));
Model::registerModel('CREATE TABLE IF NOT EXISTS users(username TEXT, password TEXT)');

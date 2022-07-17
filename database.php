<?php

use Cfhjk\Romerodex\Models\Model;

//registrando conexao com o banco de dados
Model::registerConection(new SQLite3(__DIR__ . '/Database/banco.db'));
Model::registerModel('CREATE TABLE IF NOT EXISTS users(nome TEXT PRIMARY KEY, senha TEXT, email TEXT)');
Model::registerModel('CREATE TABLE IF NOT EXISTS romeromons(nome TEXT, descricao TEXT, user_nome TEXT, FOREIGN KEY (user_nome) REFERENCES users (nome))');

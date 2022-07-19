<?php

use Cfhjk\Romerodex\Models\Model;

//registrando conexao com o banco de dados
Model::registerConection(new SQLite3(__DIR__ . '/Database/banco.db'));
Model::registerModel('CREATE TABLE IF NOT EXISTS users(nome TEXT PRIMARY KEY, senha TEXT, email TEXT)');
Model::registerModel('CREATE TABLE IF NOT EXISTS romeromons(nome TEXT, descricao TEXT, usernome TEXT, FOREIGN KEY (usernome) REFERENCES users (nome))');
Model::registerModel('CREATE TABLE IF NOT EXISTS pokeball(nome TEXT)');

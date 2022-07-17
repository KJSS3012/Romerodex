<?php

namespace Cfhjk\Romerodex\Models;

class Romeromon extends Model
{
    protected $username;
    protected $description;
    protected $user_nome;

    public function __construct($username, $description)
    {
        session_start();
        $this->username = $username;
        $this->description = $description;
        $this->user_nome = $_SESSION['user'];
    }

    public function save()
    {
        $statement = self::$conexao->prepare("INSERT INTO romeromons(nome, descricao, user_nome) VALUES (:u, :d, :e)");
        $statement->bindValue(':u', $this->username, SQLITE3_TEXT);
        $statement->bindValue(':d', $this->description, SQLITE3_TEXT);
        $statement->bindValue(':e', $this->user_nome, SQLITE3_TEXT);

        return $statement->execute();
    }
}

<?php

namespace Cfhjk\Romerodex\Models;

class Romeromon extends Model
{
    protected $username;
    protected $description;
    protected $usernome;

    public function __construct($username, $description)
    {
        session_start();
        $this->username = $username;
        $this->description = $description;
        $this->usernome = $_SESSION['user'];
    }

    public function save()
    {
        $statement = self::$conexao->prepare("INSERT INTO romeromons(nome, descricao, usernome) VALUES (:u, :d, :e)");
        $statement->bindValue(':u', $this->username, SQLITE3_TEXT);
        $statement->bindValue(':d', $this->description, SQLITE3_TEXT);
        $statement->bindValue(':e', $this->usernome, SQLITE3_TEXT);

        return $statement->execute();
    }
}

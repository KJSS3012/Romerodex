<?php

namespace Cfhjk\Romerodex\Models;

class Pokeball extends Model
{
    protected $username;

    public function __construct($username)
    {
        $this->username = $username;
    }

    public function save()
    {
        $statement = self::$conexao->prepare("INSERT INTO pokeball(nome) VALUES (:u)");
        $statement->bindValue(':u', $this->username, SQLITE3_TEXT);

        return $statement->execute();
    }
}

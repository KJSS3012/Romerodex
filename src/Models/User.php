<?php

namespace Cfhjk\Romerodex\Models;

class User extends Model
{
    protected $username;
    protected $password;
    protected $email;

    public function __construct($username, $password, $email)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    public function save()
    {

        $statement = self::$conexao->prepare("INSERT INTO users(nome, senha, email) VALUES (:u, :p, :e)");
        $statement->bindValue(':u', $this->username, SQLITE3_TEXT);
        $statement->bindValue(':p', $this->password, SQLITE3_TEXT);
        $statement->bindValue(':e', $this->email, SQLITE3_TEXT);

        return $statement->execute();
    }

    static function exists($username, $password)
    {

        $sttm = self::$conexao->prepare("SELECT * FROM users WHERE nome = :user;");
        $sttm->bindValue(':user', $username, SQLITE3_TEXT);

        $result = $sttm->execute();
        $row = $result->fetchArray();
        if (isset($row)) {
            return password_verify($password, $row['senha']) ? true : false;
        }

        return false;
    }
}

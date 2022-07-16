<?php

namespace Cfhjk\Romerodex\Models;

class User extends Model
{
    protected $username;
    protected $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    public function save()
    {

        $statement = self::$conexao->prepare("INSERT INTO users(username, password) VALUES (:u, :p)");
        $statement->bindValue(':u', $this->username, SQLITE3_TEXT);
        $statement->bindValue(':p', $this->password, SQLITE3_TEXT);


        return $statement->execute();
    }

    static function exists($username, $password)
    {

        $sttm = self::$conexao->prepare("SELECT * FROM users WHERE username = :user;");
        $sttm->bindValue(':user', $username, SQLITE3_TEXT);

        $result = $sttm->execute();
        $row = $result->fetchArray();
        if (isset($row)) {
            return password_verify($password, $row['password']) ? true : false;
        }

        return false;
    }
}

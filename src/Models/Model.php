<?php

namespace Cfhjk\Romerodex\Models;

class Model
{
    protected static $conexao;

    public static function registerConection($conexao)
    {
        self::$conexao = $conexao;
    }

    public static function registerModel($table)
    {
        self::$conexao->exec($table);
    }
}

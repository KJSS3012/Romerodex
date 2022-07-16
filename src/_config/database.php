<?php

$db = new SQLite3(__DIR__ . '/../Database/database.db');
$db->exec("CREATE TABLE IF NOT EXISTS Romeromons(NomeDoTreinador TEXT, NomeDoRomeromon TEXT, Descricao TEXT, ID INTEGER PRIMARY KEY)");
return $db;

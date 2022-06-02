<?php

$db = new SQLite3('database.db');

$db->exec("CREATE TABLE IF NOT EXISTS Romeromons(NomeDoTreinador TEXT, NomeDoRomeromon TEXT, Descricao TEXT, ID INTEGER PRIMARY KEY)");

$nt = $_GET['nt'];
$nr = $_GET['nr'];
$dc = $_GET['dc'];

$db->exec("INSERT INTO Romeromons(NomeDoTreinador, NomeDoRomeromon, Descricao) values('$nt','$nr','$dc')");

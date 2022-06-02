<?php

$db = new SQLite3('database.db');

$db->exec('CREATE TABLE IF NOT EXISTS Romeromons(NomeDoTreinador TEXT, NomeDoRomeromon TEXT, Descricao TEXT');

if (isset($_GET['nt']) && isset($_GET['nr']) && isset($_GET['dc'])) {
    $nt = $_GET['nt'];
    $nr = $_GET['nr'];
    $dc = $_GET['dc'];
    // $im = $_GET['im'];

    $db->exec('INSERT INTO Romeromons ("NomeDoTreinador,NomeDoRomeromon,Descricao") values("' . $nt . ',' . $nr . ',' . $dc . '")');
}

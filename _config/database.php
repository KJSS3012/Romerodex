<?php

$db = new SQLite3('database.db');

$db->exec("CREATE TABLE IF NOT EXISTS Romeromons(NomeDoTreinador TEXT, NomeDoRomeromon TEXT, Descricao TEXT, ID INTEGER PRIMARY KEY)");

$nt = $_POST['nt'];
$nr = $_POST['nr'];
$dc = $_POST['dc'];

$db->exec("INSERT INTO Romeromons(NomeDoTreinador, NomeDoRomeromon, Descricao) values('$nt','$nr','$dc')");

$result = $db->query('SELECT * FROM Romeromons');

include __DIR__ . "/../_paginas/list.php";
?>
<style>
    <?php
    include __DIR__ . "/../_paginas/style.css";
    ?>
</style>
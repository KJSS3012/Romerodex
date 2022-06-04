<?php
$nt = $_POST['nt'];
$nr = $_POST['nr'];
$dc = $_POST['dc'];

$db = require(__DIR__ . '/../_config/database.php');

try {
    $db->exec("INSERT INTO Romeromons(NomeDoTreinador, NomeDoRomeromon, Descricao) values('$nt','$nr','$dc')");
} catch (Exception $e) {
    echo $e->getMessage();
}

Header("Location:/register");
// $db->close();

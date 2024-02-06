<?php
$parola = $_GET["parola"];

$pdo = new PDO('mysql:host=192.168.2.200;dbname=hua_davide_', "hua_davide", "autobiographical.celluloid.meatloafs.");

$query = "SELECT * FROM parole WHERE parola LIKE '$parola%' ";
$stmt = $pdo->prepare($query);
$stmt->execute();
$parole = $stmt->fetchAll(PDO::FETCH_COLUMN, 1);

$parole_json = json_encode($parole);

echo $parole_json;

<?php
$parola = $_GET["parola"];

$pdo = new PDO('mysql:host=sql11.freemysqlhosting.net;dbname=sql11679361', "sql11679361", "Vi5p2tQ1mP");

$query = "SELECT * FROM parole WHERE parola LIKE '$parola%' ";
$stmt = $pdo->prepare($query);
$stmt->execute();
$parole = $stmt->fetchAll(PDO::FETCH_COLUMN, 1);

$parole_json = json_encode($parole);

echo $parole_json;

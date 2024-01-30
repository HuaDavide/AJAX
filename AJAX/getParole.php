<?php

$parola = $_GET["parola"];
$pdo = new PDO("mysql:host=localhost;dbname=prova", "root", "");

$query = "SELECT * FROM parole WHERE parola LIKE '$parola%' ";
$stmt = $pdo ->prepare($query);
$stmt->execute();
$parole = $stmt->fetchAll(PDO::FETCH_COLUMN,1);

echo("<ul>");

foreach ($parole as $p)
{
    echo("<li>$p</li>");
}
echo("</ul>");
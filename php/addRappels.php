<?php

session_start();

$data = new stdClass();

$data->notes = [];

if (isset($_SESSION['pseudo'])) {
    $bd = 'mysql:host=mysql-monrappel.alwaysdata.net;dbname=monrappel_rappel;port=3306';
    $pdo = new PDO($bd, 'monrappel_read', 'monrappel_readOnly15');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $pdo->query('SELECT * FROM Rappel WHERE user = \'' . $_SESSION['pseudo'] . '\'');
    $resultat = $query->fetchAll();
   foreach ($resultat as $array) {
       array_push($data->notes,$array);
   }
}


header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

echo json_encode($data);
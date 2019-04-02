<?php
session_start();
$data = new stdClass();

if (isset($_SESSION['pseudo']) && isset($_POST['rappel']) && isset($_POST['dateRappel'])) {
    $id = $_POST['idrappel'];
    echo ('INSERT INTO Rappel (id, rappel, user, dateajout, daterappel) VALUES (NULL, \''. $_POST['rappel'].'\', \''. $_SESSION['pseudo'].'\', \''.date('Y'.'-'.'m'.'-'.'d') .'\', \''.$_POST['dateRappel'].'\')');
    $bd = 'mysql:host=mysql-monrappel.alwaysdata.net;dbname=monrappel_rappel;port=3306';
    $pdo = new PDO($bd, 'monrappel_delete', 'monrappel_deleteMdp15');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $pdo->query('INSERT INTO Rappel (id, rappel, user, dateajout, daterappel) VALUES (NULL, \''. $_POST['rappel'].'\', \''. $_SESSION['pseudo'].'\', \''.date('Y'.'-'.'m'.'-'.'d') .'\', \''.$_POST['dateRappel'].'\')');
}

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
header('Location: ../index.html');
<?php
session_start();
$data = new stdClass();

if (isset($_POST['idrappel'])) {
    $id = $_POST['idrappel'];
    $bd = 'mysql:host=mysql-monrappel.alwaysdata.net;dbname=monrappel_rappel;port=3306';
    $pdo = new PDO($bd, 'monrappel_delete', 'monrappel_deleteMdp15');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $pdo->query('DELETE FROM Rappel WHERE Rappel.id =\'' . $id . '\'');
    if ($query === TRUE) {
        $data->reponsedelete = "OK";
    } else {
        $data->reponsedelete = "KO";
    }
}

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

echo json_encode($data);
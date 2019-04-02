<?php
session_start();

$data = new stdClass();

if (isset($_SESSION['pseudo'])) {
    $data->pseudo = $_SESSION['pseudo'];
    $data->is_connected = true;
} else {
    $data->is_connected = false;
}

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

echo json_encode($data);
?>
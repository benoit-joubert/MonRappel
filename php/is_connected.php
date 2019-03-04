<?php
session_start();

$result = false;
if (isset($_POST['login']) && isset($_POST['password'])) {
    //test code BD
    $_SESSION['user_id'] = 12;
    $result = new stdClass();
    $result->messages = "Bonjour ! ";
}

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

echo json_encode($result);
?>
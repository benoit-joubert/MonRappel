<?php
session_start();

//$result = false;
if (isset($_POST['login']) && isset($_POST['password'])) {
    $bd = 'mysql:host=mysql-monrappel.alwaysdata.net;dbname=monrappel_utilisateur;port=3306';
    $pdo = new PDO($bd, 'monrappel_read', 'monrappel_readOnly15');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $pdo->query('SELECT COUNT(*) as trouve FROM Utilisateurs WHERE pseudo =\'' . $_POST['login'] . '\' AND mdp = \'' . $_POST['password'] .'\'');
    //$_SESSION['user_id'] = 12;
    $resultat = $query->fetch();
    if ($resultat['trouve'] == 0){
        echo "Non trouvé";
    }

    else if ($resultat['trouve'] == 1){
        echo 'Bonjour ' . $_POST['login'];
    }

    else {
        echo "Erreur";
        echo $resultat;
    }
}

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

//echo json_encode($result);
?>
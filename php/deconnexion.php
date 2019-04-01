<?php
session_start();
unset($_COOKIE["user"]);
session_destroy();

echo "Vous êtes déconnecté.";

echo "<a href=\"../index.php\">Retour à l'accueil</a>";

?>
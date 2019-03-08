<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Mon Rappel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="../site.webmanifest">
    <link rel="apple-touch-icon" href="../icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta name="theme-color" content="#fafafa">
    <script src="../js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
    <script src="../js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script>
        $(document).ready(function() {
            $('#seconnecter').click(function () {
                $('#contenupage').empty();
                $('<form style="display: inline-block" action="is_connected.php" method="post"></form>')
                    .append('<input id="login" name="login" placeholder="Pseudo"><br/>')
                    .append('<input type="password" id="password" name="password" placeholder="Mot de passe"><br>')
                    .append('<button type="submit" class="btn btn-primary">Connexion</button ><br>')
                    .appendTo('#contenupage');

            });

            $('#inscription').click(function() {
                $('#contenupage').empty();
                $('<form style="display: inline-block" action="is_connected.php" method="post"></form>')
                    .append('<input id="nom" name="nom" placeholder="Nom"><br/>')
                    .append('<input id="prenom" name="prenom" placeholder="Prenom"><br/>')
                    .append('<input id="login" name="login" placeholder="Pseudo"><br/>')
                    .append('<input type="password" id="password" name="password" placeholder="Mot de passe"><br>')
                    .append('<button type="submit" class="btn btn-primary">Connexion</button ><br>')
                    .appendTo('#contenupage');

            });
        })
    </script>

</head>

<body style="text-align: center">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">MonRappel</a>
    <div id="boutonSeConnecter">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <button id="seconnecter" class="btn btn-success">Se Connecter</button>
                <button id="inscription" class="btn btn-primary">Inscription</button>
            </li>
        </ul>
    </div>
</nav>

<div id="contenupage">

</div>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
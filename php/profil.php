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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta name="theme-color" content="#fafafa">
    <script src="/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
    <script src="/js/plugins.js"></script>


</head>

<body style="text-align: center">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">MonRappel</a>
    <p>Bonjour <?php echo $_COOKIE["user"];?></p>
    <div id="contenuNavBar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <form style="display: inline-block" action="/php/deconnexion.php" method="post">
                    <button type="submit" id="deconnexion" class="btn btn-danger">Déconnexion</button>
                </form>
            </li>
        </ul>
    </div>
</nav>

<div id="contenupage">

    <?php echo $_SESSION['login']?>

</div>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>

$(document).ready(function () {
    $.ajax({
        url: 'php/is_connected.php',
        method: 'GET',
        dataType: 'json'
    }).done(function (data) {
        if (data.is_connected) {

            $('#contenuNavBar').append('<ul class="navbar-nav mr-auto">\n' +
                '            <li class="nav-item active">\n' +
                '                <form style="display: inline-block" id="formlogout" action="/php/deconnexion.php" method="post">\n' +
                '                    <button type="submit" id="deconnexion" class="btn btn-danger">Déconnexion</button>\n' +
                '                </form>\n' +
                '            </li>\n' +
                '        </ul>');
            $('#contenupage').append('test');
            
            submit_logout();
        } else {
            $('#contenuNavBar').append('<ul class="navbar-nav mr-auto">\n' +
                '            <li class="nav-item active">\n' +
                '                <button id="seconnecter" class="btn btn-success">Se Connecter</button>\n' +
                '            </li>\n' +
                '        </ul>');
            $('#contenupage').append('<form id="connected" style="display: inline-block" action="/php/connexion.php" method="post">\n' +
                '\t<input id="login" name="login" placeholder="Pseudo"><br/>\n' +
                '\t<input type="password" id="password" name="password" placeholder="Mot de passe"><br>\n' +
                '\t<button type="submit" class="btn btn-primary">Connexion</button ><br>\n' +
                '</form>');
            submit_login();
        }
        return false;
    });
    
    function submit_logout() {
        $('#formlogout').submit(function () {
            $.ajax({
                url: 'php/deconnexion.php',
                method: 'POST'
            }).done(function (data) {
            $('#contenupage').empty().append('<p>Vous êtes déconnecté</p>');
                window.location.reload(true);
            });
            return false;
        });
        
    }

    function submit_login() {
        $('#connected').submit(function () {
            $.ajax({
                url: 'php/connexion.php',
                method: 'POST',
                dataType: 'json',
                data : $(this).serialize()
            }).done(function (data) {
                if (data.status)
                    window.location.reload(true);
            });
            return false;
        });

    }
});
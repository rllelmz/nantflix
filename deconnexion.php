<!DOCTYPE html>
<html>
    <head>
        <title>Déconnexion</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="miseenpage.css" type="text/css">
    </head>
    <Font face="Arial Hebrew"><body>
        <?php
        //Ouverture de la session
        session_start();
        //destruction de la session
        session_destroy();
        echo '<center><p>Vous êtes déconnecté</p></center>';
        ?>
            <a href="bienvenue.html">
            <input type="button" id="disconnect" value="Accueil">
            </a>
        </body></Font>
</html>
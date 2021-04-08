<!DOCTYPE html>
<html>
    <head>
        <title>Se connecter</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="miseenpage.css" type="text/css">
    </head>
    <FONT face="Arial Hebrew"><body>
        <form method="post" action="traitementconnexion.php">
        <br><br><h1>Connexion</h1>
            
            <div class="connexion">
                <br><label for="email">IDENTIFIANT</label>
                <br><input type="email" id="mail" name="identifiant" placeholder="mail@example.com" required pattern="[a-zA-Z0-9._%-]+@[a-z]+.[a-z]+"size="25" autofocus="autofocus">
            
                <br><label for="name">PASSWORD</label>
                <br><input type="password" id="password" name="password" placeholder="Entrez un mot de passe" required pattern="[a-zA-Z0-9]{8,12}" size="25" autofocus="autofocus">
            
            
                <br><br><a href="traitementconnexion.php">
                    <input type="Submit" id="button" name="Login" value="Login">
                        </a>
            
            
                    <br><a href="bienvenue.html">
                        <input type="button" id="bienvenue" value="Accueil">
                        </a>
            </div>
        </form>
        </body></FONT>
</html>
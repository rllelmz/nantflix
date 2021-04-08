<!DOCTYPE html>
<html>
    <head>
        <title>Inscription</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="miseenpage.css" type="text/css">
    </head>
    <FONT face="Arial hebrew"><body>
        <form name="traitement" method="post" action="traitementinscription.php">
        <br><br><h1>INSCRIPTION</h1>
        
        <div class="inscrire">
             <br><br><label for="email">E-MAIL</label>
             <br><br><input type="email" id="mail" name="mail" placeholder="mail@example.com" required pattern="[a-zA-Z0-9._%-]+@[a-z]+.[a-z]+"size="25" autofocus="autofocus">
        
             <br><br><label for="password">PASSWORD</label>
             <br><br><input type="password" id="password" name="password" placeholder="Entrez un mot de passe"
                           required pattern="[a-zA-Z0-9]{8,12}" size="25" autofocus="autofocus">
        
             <br><br><label for="name">NOM</label>
             <br><br><input type="text" id="name" name="nom" placeholder="Entrez votre nom de famille" required size="25" autocomplete="family-name">
        
             <br><br><label for="name">PRÉNOM</label>
             <br><br><input type="text" id="firstname" name="prenom" placeholder="Entrez votre prénom" required size="25" autocomplete="given-name">
        
             <br><br><label for="birth">DATE DE NAISSANCE</label>
             <br><br><input type="text" id="birth" name="birth" placeholder="aaaa-mm-jj" required pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" size="25" autofocus="autofocus">
        
             <br><br><label for="phone">TELEPHONE</label>
             <br><br><input type="tel" id="phone" name="phone" placeholder="example:0612345678" required pattern="[0-9]{10}" size="25" autofocus="autofocus">
            
             <br><br><a href="traitementinscription.php">
                     <input type="submit" id="inscription" name="Inscrire" value="S'inscrire">
                     </a>
        
             <br><br><a href="bienvenue.html">
                     <input type="button" id="accueil" value="Accueil">
                     </a>
        </div>
        </form>
        </body></FONT>
</html>
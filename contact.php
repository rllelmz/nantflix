<?php session_start();?>
<!DOCTOTYPE html>
<html>
    <head>
        <title>Contact</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="miseenpage.css" type="text/css"/>
    </head>
    <font face="Arial Hebrew">
        <body>
            <?php 
               if(empty($_SESSION['identifiant']))
               {
                   echo '<p>Veuillez vous connecter<p>';
                   echo '<a href="seconnecter.php><input type="button" value="Connexion"></a>';
               }
               else
               {
            ?>
                <div id="contact">
                   <br><br><label for="email">E-MAIL</label>
                   <br><input type="email" id="mail" name="mail" placeholder="mail@example.com" required pattern="[a-zA-Z0-9._%-]+@[a-z]+.[a-z]+"size="25" autofocus="autofocus">
            
                   <br><br><label for="commentaire">Ecrivez votre commentaire :</label>
                   <br><input type="text" id="commentaire" name="commentaire" required size="50" autofocus="autofocus">
               </div>
        
                <br><br><a href="envoyer.php"><input type="button" id="envoyer" value="Envoyer"></a>
            
                <br><br><input type = "button" id="return" value = "Retour"  onclick = "history.go(-1)">
            <?php
               }
            ?>
        </body>
    </font>
</html>
<?php session_start(); ?>
<!DOCTOTYPE html>
<html>
    <head>
        <title>Visionner épisode</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="miseenpage.css" type="text/css">
    </head>
    <font face="Arial Hebrew"><body>
        <?php
          //si la session est vide
          if(empty($_SESSION['identifiant']))
          {
              echo '<p>Veuillez vous connecter</p>';
        ?>
          
           <a href="seconnecter.php">
           <input type="button" value="Connexion">
           </a>
          
        <?php
          }
          else
          {
            
            //si l'utilisateur a bien clique sur le bouton visionner et choisi un épisode à regarder
            if(isset($_POST['visionner']) AND isset($_POST['episode']))
            {
                    echo $_SESSION['identifiant'],', vous êtes entrain de regarder l\'épisode '.$_POST['episode'].' de la série ',$_SESSION[''],'<br>';
            ?>
                    <br><br><input type = "button" id="return" value = "Retour"  onclick = "history.go(-1)">
        <?php  
            }
            else
            {
                    echo $_SESSION['identifiant'],', vous n\'avez pas choisi d\'épisode à regarder','<br>';
                    echo '<br>','<br>','<input type = "button" value = "Retour"  onclick = "history.go(-1)">';
            }
          }
        ?>
        </body></font>
</html>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Page utilisateur</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="miseenpage.css" type="text/css">
    </head>
    <FONT face="Arial hebrew">
    <body>
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
        ?>
        
                <h2><?php echo 'Bienvenue ',$_SESSION['identifiant'];?></h2>

        
            <ul id="nav">
               <li><a href="biblioth%C3%A8que.php">Bibliothèque</a></li>
               <li><a href="profil.php">Profil</a></li>
               <li><a href="aproposde.html">A propos de</a></li>
               <li><a href="contact.php">Contact</a></li>
            </ul>
        <h4>Séries policières</h4>
        <div class="images">
               <img id="cold" src="cold%20case.jpg"/>
               <img id="criminal" src="Criminal-Minds-CBS-660x371.jpg"/>
               <img id="experts" src="experts%20miami%20.jpg"/>
               <img id="motive" src="motive.jpg"/>
         </div>
        
        <h4>Séries familiales</h4>
        <div class="imgs">
               <img id="famille" src="ma%20famille%20d'abord.jpg"/>
               <img id="malcolm" src="malcolm.jpg"/>
               <img id="saddle" src="the%20saddle%20club.jpg"/>
               <img id="nanny" src="Nanny.jpg"/>
        </div>
        
        <h4>Dessins animés</h4>
        <div class="pictures">
               <img id="foot" src="foot2rue.jpg"/>
               <img id="minis" src="Les_Minijusticiers.jpg"/>
               <img id="spies" src="totally%20spies.jpg"/>
               <img id="simpsons" src="simpsons.jpg"/>
        </div>
        
        
        <br><br><br><br><br><br><a href="deconnexion.php">
                    <input type="submit" id="deconnexion" value="Déconnexion"/>
                    </a>
        <?php
          }
        ?>   
                
     </body></FONT>
</html>
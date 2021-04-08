<!DOCTYPE html>
<html>
    <head>
       <title>Choix série</title>
       <meta charset="UTF-8"/>
       <link rel="stylesheet" href="miseenpage.css" type="text/css"/>
    </head>
    <font face="Arial Hebrew"><body>
    <form action="visionner.php" method="post">
    <div class="choisir">
        <?php
          session_start();
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
            if(isset($_POST['choix']))
            {
                
        ?>
              <h4><?php 

                      echo  $_SESSION['identifiant'],',vous avez choisi de regarder la série ',$_SESSION[''].'<br>';
                      print_r($_SESSION);
                      
                  ?>
              </h4>
        
              <br><label for="episode">Épisode</label>
              <br><input type="number" id="number" name="episode" required min="1" max="1000" autofocus="autofocus">
        
              <br><br><a href="visionner.php">
              <input type="submit" id="visionnage" value="Visionner" name="visionner">
              </a>
        
              <br><br><input type = "button" id="return" value = "Retour"  onclick = "history.go(-1)">
        
        <?php
            }
         }
        ?>    
    </div>
    </form>
        </body></font>
</html>
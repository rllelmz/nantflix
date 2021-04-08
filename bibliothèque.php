<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bibliothèque séries</title>
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

        ?>
        
        <h3><?php  echo 'Page de consultation des séries de ',$_SESSION['identifiant'].'<br>';?></h3>
       
        <form method="post" action="choisir.php" name="visionnage"> 
        
        <?php
           ini_set('display_errors','on'); 
           error_reporting(E_ALL);
           
           $servername='localhost';
           $username='root';
           $password='root';
           $dbname='Nantflix';
          //On se connecte à la base de donnée 
          $sql= new mysqli($servername,$username,$password,$dbname);
          //Verification de la connexion
          if($sql->connect_error)
          {
              die('Erreur : '.$sql->connect_error);
          }
        
             $query="SELECT IDserie, intitule,anneesortie,nbepisodes FROM serie";
             $res=$sql->query($query);
             while($data = $res->fetch_assoc())
             {
                 echo '<br>',$data['IDserie'],'<br>';
                 echo '<br>','Série : '.$data['intitule'].'<br>';
                 echo 'Sortie : '.$data['anneesortie'].'<br>';
                 echo 'Épisodes : '.$data['nbepisodes'].'<br>';   
                 $_SESSION['']=$data['intitule'];
                 session_write_close();
                 print_r($_SESSION);
                 
        ?>
          
        <br><br><a href="choisir.php">
                <input type="submit" id="choix" value="choisir" name="choix">
                </a><br>
        
        <?php
             }
              $sql->close();
          }
        ?>
        </form>
        <br><br><input type = "button" id="retour" value = "Retour"  onclick = "history.go(-1)">
        </body></font>
</html>
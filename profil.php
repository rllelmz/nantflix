<!DOCTYPE html>
<html>
    <head>
        <title>Profil utilisateur</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="miseenpage.css" type="text/css">
    </head>
    <font face="Arial Hebrew"><body>
        <?php
          //Démarrage de la session 
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
        ?>
        <div id="profile">
         <?php 
         
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
                $query="SELECT mail, nom, prenom, datenaissance, telephone FROM inscription WHERE prenom='".$_SESSION['identifiant']."'";
                $res=$sql->query($query);
                while($data = $res->fetch_array())
                {
                    echo 'Nom : '.$data['nom'].'<br>';
                    echo 'Prénom : '.$data['prenom'].'<br>';
                    echo 'Mail : '.$data['mail'].'<br>';
                    echo 'Date de naissance : '.$data['datenaissance'].'<br>';
                    echo 'Telephone : '.$data['telephone'].'<br>';
                }
            ?>
        </div>
         <br><br><input type = "button" id="return" value = "Retour"  onclick = "history.go(-1)">
        
           <?php
              $sql->close();
            }  
            ?>
        </body></font>
</html>
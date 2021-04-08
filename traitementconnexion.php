<!DOCTYPE html>
<html>
    <head>
        <title>Traitement connexion</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="miseenpage.css" type="text/css">
    </head>
    <FONT face="Arial Hebrew"><body>
        <?php
        ini_set('display_errors','on'); 
        error_reporting(E_ALL);
        //Dès que l'utilisateur appuie sur le bouton login
        if(isset($_POST['Login']))
        {
            //On vérifie si l'utilisateur a bien rentré un identifiant et un mdp 
            if(isset($_POST['identifiant']) && isset($_POST['password']))
            {
                //On récupère les données saisies par l'utilisateur 
                $identifiant=htmlspecialchars($_POST['identifiant']);
                $password=htmlspecialchars($_POST['password']);
                
                //connexion à la bdd
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
                $requete="SELECT prenom, motdepasse FROM inscription WHERE mail='".$identifiant."'";
                $result=$sql->query($requete); 
                $data=$result->fetch_assoc(); //affichage des lignes
                if($data=='') //si l'identifiant est inexistant 
                {
                    echo '<p>Vous n\'êtes pas encore inscrit,veuillez aller dans le lien ci-dessous</p>';
                    echo '<a href="inscription.php">Inscritption</a>'; 
                    echo '<br>','<br>','<input type = "button" value = "Retour"  onclick = "history.go(-1)">';
                }
                else //si identifiant est présent 
                {
                    
                    if($_POST['password'] == $data['motdepasse']) //vérifie si les 2 mdps sont identiques 
                    {
                        //Ouverture de la session 
                        session_start();
                        //Enregistrement de l'identifiant de session
                       $_SESSION['identifiant']=$data['prenom']; 
                       //redirection vers la page series.php
                       header("Location:series.php");
                       exit();
                    }
                    else
                    {
                        echo '<p>Un problème est survenu lors de la connexion au site</p>';
                        echo '<br>','<br>','<input type = "button" value = "Retour"  onclick = "history.go(-1)">';
                    }
                }
                
            }
            $sql->close();
        }
        ?>
        </body></FONT>
</html>
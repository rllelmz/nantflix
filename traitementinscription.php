<!DOCTYPE html>
<html>
    <head>
        <title>Traitement insciption</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="miseenpage.css" type="text/css">
    </head>
    <FONT face="Arial Hebrew"><body>
    <?php
     ini_set('display_errors','on'); 
     error_reporting(E_ALL);
     //On récupère les données saisies par l'utilisateur
     if(isset($_POST['mail'])) $mail=htmlspecialchars($_POST['mail']);
     else $mail="";
     if(isset($_POST['password'])) $mdp=htmlspecialchars($_POST['password']);
     else $mdp="";
     if(isset($_POST['nom'])) $nom=htmlspecialchars($_POST['nom']);
     else $nom="";
     if(isset($_POST['prenom'])) $prenom=htmlspecialchars($_POST['prenom']);
     else $prenom="";
     if(isset($_POST['birth'])) $datenaissance=htmlspecialchars($_POST['birth']);
     else $datenaissance="";
     if(isset($_POST['phone'])) $telephone=htmlspecialchars($_POST['phone']);
     else $telephone="";
    //Si l'utilisateur a appuyé sur le bouton s'inscrire 
    if(isset($_POST['Inscrire']))
    {
        //On se connecte à la base de donnée 
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
        //Creation de la requete pour insérer les données dans la table 
        $requete= "INSERT INTO inscription (mail, motdepasse, nom, prenom, datenaissance, telephone) VALUES ('$mail','$mdp','$nom','$prenom','$datenaissance','$telephone')";
        //Si la rêquete a bien été réalisée
        if($sql->query($requete))
        {
            header('Location:seconnecter.php');
            exit();
        }
        //Si un ou tous les champs n'ont pas été remplis 
        else
        {
            echo'<p> Une erreur est intervenue lors de l\'enregistrement des informations</p>';
            echo '<br>','<br>','<input type = "button" value = "Retour"  onclick = "history.go(-1)">';
        }
    $sql->close(); 
    }
    ?>
        </body></FONT>
</html>
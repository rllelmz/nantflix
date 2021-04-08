<!DOCTYPE html>
<html>
    <head>
        <title>Traitement insertion</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="miseenpage.css" type="text/css">
    </head>
    <FONT face="Arial Hebrew"><body>
    <?php
        ini_set('display_errors','on'); 
        error_reporting(E_ALL);
        //On récupère les champs saisies dans la page d'insertion
        if(isset($_POST['intitule'])) $intitule=htmlspecialchars($_POST['intitule']);
        else $intitule="";
        if(isset($_POST['nbepisodes'])) $nbepisodes=htmlspecialchars($_POST['nbepisodes']);
        else $nbepisodes="";
        if(isset($_POST['acteurs'])) $acteurs=htmlspecialchars($_POST['acteurs']);
        else $acteurs="";
        if(isset($_POST['realisateur'])) $realisateur=htmlspecialchars($_POST['realisateur']);
        else $realisateur="";
        if(isset($_POST['anneesortie'])) $anneesortie=htmlspecialchars($_POST['anneesortie']);
        else $anneesortie="";
        
        //Si on clique sur le bouton Submit
        if(isset($_POST['Submit']))
        {
            //On inclut la connexion à la bdd
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
            $query="INSERT INTO serie(intitule, nbepisodes, acteurs, realisateur, anneesortie) VALUES('$intitule','$nbepisodes','$acteurs','$realisateur','$anneesortie')";
            if($sql->query($query))
            {
                echo '<p>La série a bien été ajoutée dans la base de donnée</p>';
    ?>
                <a href="bienvenue.html"><input type="button" id="acc" value="Accueil"></a>
    <?php       
            }
            else
            {
                echo '<p>Une erreur est survenue lors de l\'enregistrement de la série</p>';
    ?>
                <br><input type = "button" value = "Retour"  onclick = "history.go(-1)">
    <?php 
            }
        $sql->close();
        }
    ?>
        </body></FONT>
</html>
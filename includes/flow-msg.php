
<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include('connexion.php');

//$req = $bdd->query('SELECT * FROM  messagerie');
$req = $bdd->query('SELECT m.*, u.couleur_personelle FROM messagerie m LEFT OUTER JOIN personnes u ON m.expediteur = u.pseudo_user');


//$messagesQuery = $bdd->query(
//'SELECT m.*, u.couleur_personelle FROM messagerie m LEFT OUTER JOIN personnes u ON m.expediteur = u.pseudo_user'
//);

while($donnees = $req->fetch()){
     echo "<div class='container'><div class='row'><div class='col-12'><div style='border: 2px solid ". $donnees["couleur_personelle"]. ";background-color: ". $donnees["couleur_personelle"] . 50 .";padding: 5px; display:block;'><span style='font-weight: bold;'>" .  $donnees["expediteur"] . "</span> : ". $donnees["messages"] . "</div><div class='col-2' style='display:inline-block;'><span class='badge badge-secondary'>" . $donnees["date_expedition"] . "</span></div></div></div></div><br>";
     }

$req->closeCursor();



//$req->execute(array($_POST['msg']));
?>


<?php require '../inc/config.php';

if (!isset($_SESSION['name'])){
	Redirect("/");
	exit();
}
$id = 0;

if(isset($_SESSION['name']))
{
    if(!$_POST['points'] OR !$_POST['pseudo'])
    {
      echo 'Veuillez insérer une valeur pour chaque champs<br /><a href="add_points_discord.php">Revenir en arrière</a>';
    }

else
    { 

        $req = $bdd->prepare('INSERT INTO dashboard_historique (pseudostaff, nbpoints, pseudouser) VALUES(:pseudostaff, :nbpoints, :pseudouser)');
        $req->execute(array(
        'pseudostaff' => $username,
        'nbpoints' => $_POST['points'],
        'pseudouser' => htmlspecialchars($_POST['pseudo'])
    
    ));
$req = $bdd->prepare('SELECT points FROM dashboard_classement WHERE pseudo = ?');
$req->execute(array($_POST['pseudo']));
$donnees = $req->fetch();

$points_actuel = $donnees['points'];
$addpoint = $points_actuel + $_POST['points'];

$req = $bdd->prepare('SELECT id FROM dashboard_classement WHERE pseudo = ?');
$req->execute(array($_POST['pseudo']));
if($donnees = $req->fetch())
{

	$req = $bdd->prepare('UPDATE dashboard_classement SET points = :addpoints WHERE pseudo = :pseudo');
    $req->execute(array(

    	'pseudo' => htmlspecialchars($_POST['pseudo']),
        'addpoints' => $addpoint 

    ));

}

else {

       $req = $bdd->prepare('INSERT INTO dashboard_classement (pseudo, points) VALUES(:pseudo, :points)');
       $req->execute(array(

       	'pseudo' => htmlspecialchars($_POST['pseudo']),
       	'points' => $_POST['points']

       ));

}

header('Location: add_points_discord.php');

    } 

}

else {

    header('Location: /');
}




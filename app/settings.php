<?php
include '../inc/config.php'; 

if (isset($_POST['exmdp']) && isset($_POST['newmdp']) && isset($_POST['newmdp2'])) {
    if (!empty($_POST['exmdp']) && !empty($_POST['newmdp']) && !empty($_POST['newmdp2'])) {
        $mdpcrypt = chiffrer($_POST['exmdp']);
        $exmdpR = $bdd->query("SELECT id FROM users WHERE username = '" . $username . "' AND password = '" . $mdpcrypt . "'");

        $count = $exmdpR->rowCount();
        if($_POST['newmdp'] == $_POST['newmdp2'])
        {

            if ($count === 1) {
                $cryptMDP = chiffrer($_POST['newmdp']);
                $req = $bdd->prepare('UPDATE users SET password = ? WHERE id = ?');
                $req->execute(array($cryptMDP, $id));
                $errorMDP = "ok";
            } else {
                $errorMDP = " L'ancien mot de passe ne correspond pas.";
            }
        }
        else
        {
            $errorMDP = "Les mots de passes ne correspondent pas.";
        }
        
    } else {
        $errorMDP = "Remplissez les champs.";
    }
}

if (isset($errorMDP))
{
    echo $errorMDP;
}
<?php 
require '../inc/config.php';
if(isset($_POST['username']) && isset($_POST['password'])){
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        if(!isset($_SESSION['name'])){
            $name = Securise($_POST['username']);
            $password = chiffrer($_POST['password']);
            $result = $bdd->prepare("SELECT id FROM users WHERE username = ? AND password = ? OR mail = ? AND password = ?");
            $result->execute(array($name, $password, $name, $password));

            $data = $result->rowCount();
            if ($data == 1) {
                $_SESSION['name'] = $name;
                $UPDATE = $bdd->prepare("UPDATE users SET ip_last = ? WHERE username = ?");
                $UPDATE->execute(array($ip, $name));
                echo "ok";
                return;
            } else {
                $erreur = "Pseudo ou mot de passe incorrect!";
            }
        } else {
            $erreur = "ok";
        }
    } else {
        $erreur = "Veuillez remplir tout les champs!";
    }
}

if(isset($erreur)){
    echo $erreur;
    return;
} else {
    echo "Oups, une erreur inconnue a été detectée.";
    return;
}
?>
<noscript>
        document.location.href="/index?error=<?=$error ?>";
</noscript>

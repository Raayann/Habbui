<?php 
require '../inc/config.php';
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['repassword']) && isset($_POST['email']) && isset($_POST['look'])){
    if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['repassword']) && !empty($_POST['email']) && !empty($_POST['look'])){
        $name = Securise($_POST['username']);
        $mdp = chiffrer($_POST['password']);
        $remdp = chiffrer($_POST['repassword']);
        $email = Securise($_POST['email']);
        $look = $_POST['look'];
        $lookGIRL = array($configL4, $configL5, $configL6);
        $lookBOY = array($configL1, $configL2, $configL3);
        $looklist = array_merge($lookBOY, $lookGIRL);
        if(!isset($_SESSION['name'])){
            if(in_array($look, $looklist)){
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        if(ctype_alnum($name)){
                            if($mdp === $remdp){
                                if(strlen($_POST['password']) > 5 && strlen($_POST['password']) < 15){
                                    if(strlen($name) > 4 && strlen($name) < 15){
                                        $req = $bdd->query("SELECT id FROM users WHERE username = '".$name."'");
                                        $count = $req->rowCount();
                                        if($count === 0){
                                            $req2 = $bdd->query("SELECT id FROM users WHERE mail = '".$email."'");
                                            $count2 = $req2->rowCount();
                                            if($count2 === 0){
                                                if(in_array($look, $lookGIRL)){
                                                    $gender = "F";
                                                } else {
                                                    $gender = "M";
                                                }
                                                $timeNow = strtotime("now");
                                                $sessionKey  = 'New user'. chiffrer(md5(time()). rand(0,9999));
                                                $req = $bdd->prepare("INSERT INTO users (`username`, `password`, `rank`, `auth_ticket`, `motto`, `account_created`, `mail`, `look`, `ip_register`, `ip_last`, `credits`, `gender`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                                                $req->execute(array($name, $mdp, "1", $sessionKey, 'Moi c\'est '.$name, $timeNow, $email, $look, $ip, $ip, "250000", $gender)) or die(print_r($req->errorInfo(), TRUE)); 
                                                $_SESSION['name'] = $name;
                                                echo "ok";
                                                return;
                                            } else {
                                                $error = "L'email est déjà utilisée!";
                                            }
                                        } else {
                                            $error = "Le pseudo est déjà pris!";
                                        }
                                    } else {
                                        $error = "Ton pseudo doit comporter entre 5 et 14 caractères !";
                                    }
                                } else {
                                    $error = "Ton mot de passe doit comporter entre 6 et 14 caractères !";
                                }
                            } else {
                                $error = "Les mots de passe ne correspondent pas !";
                            }
                        } else {
                            $error = "Le pseudo contient des caractères non-autorisé !";
                        }
                    } else {
                        $error = "Email invalide !";
                    }
            } else {
                $error = "Veuillez choisir votre look !";
            }
        } else {
            $error = "Vous êtes déjà connecté ! Rafraichissez la page";
        }
    } else {
        $error = "Veuillez remplir tout les champs !";
    }

}

if(isset($error)){
    echo $error;
    return;
} else {
    echo "Oups, une erreur inconnue a été detectée.";
    return;
}
?>
<noscript>
        document.location.href="/index?error=<?=$error ?>";
</noscript>
<?php
$access = "ban";
require 'inc/config.php';
if (!isset($username)) {
    $username = "Invité(e)";
}
$page = "Contactez-nous";
$category = "Aide";
$urlcategory = "/moi";
$subcategory = "Contactez-nous";

if(isset($_POST['reason']) && isset($_POST['content']))
{

    if (!empty($_POST['reason']) && !empty($_POST['content']))
    {
        $reason = $_POST['reason'];
        
        if (isset($_POST['emailordiscord']))
        {
            $emailordiscord = $_POST['emailordiscord'];
        }
        else
        {
            $emailordiscord = $username;
        }

        $content = $_POST['content'];
        $help = $bdd->prepare("INSERT INTO cms_help (`users_id`,`reason`,`content`,`mailordiscord`) VALUES (?,?,?,?)");
        $help->execute(array($id, $reason, $content, $emailordiscord)) or die(print_r($help->errorInfo(), TRUE)); 
        $message = "Merci, une réponse te seras apportée sous 24 heures.";
    }
    else{
        $message = "Merci de remplir tout les champs demandés.";
       }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Habbui: <?php echo $page; ?></title>
    <?php include("inc/_headerprincipal.php"); ?>

    <!--CONTENT HERE -->
    <div class="container">
        <div class="card card-custom">
            <div class="card-header">
                <h3 class="card-title">
                    Contacter notre équipe
                </h3>
            </div>
            <!--begin::Form-->
            <?php if (isset($message)) {
                echo '<div class="alert alert-info m-5" role="alert">'. $message .'</div>';
            } ?>
            <form class="form" method="POST">
                <div class="card-body">
                    <div class="form-group form-group-last">
                        <div class="alert alert-custom alert-default" role="alert">
                            <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                            <div class="alert-text">
                                Tu souhaites contacter l'équipe pour remonter un bug ? Tu as besoin d'un conseil ? Tu souhaite débanir un compte ? <br />
                                Remplis ce formulaire et une réponse sous 24 heures te seras fournis. :)
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Compte :</label>
                        <input disabled type="text" class="form-control" value="<?= $username ?>" placeholder="<?= $username ?>" />
                    </div>
                    <div class="form-group">
                        <label>Raison :</label>
                        <select class="form-control" name="reason">
                            <option value="Rapporter un bug">Rapporter un bug</option>
                            <option value="Question">Question</option>
                            <option value="Demande de conseils">Demande de conseils</option>
                            <option value="Débanir un utilisateur">Débanir un utilisateur</option>
                        </select>
                    </div>
                    <?php if ($rank == 0) { ?>
                        <div class="form-group">
                            <label>Adresse Email ou Discord :
                                <span class="text-danger">*</span></label>
                            <input type="text" name="emailordiscord" class="form-control" placeholder="Renseigne ton adresse email ou ton discord">
                        </div>
                    <?php } ?>

                    <div class="form-group mb-1">
                        <label for="content">Contenu :
                            <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="content" rows="3"></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Envoyer</button>
                </div>
            </form>
            <!--end::Form-->
        </div>
    </div>
    <!-- END CONTENT HERE -->

    <?php include("inc/_footerprincipal.php"); ?>
    </body>

</html>
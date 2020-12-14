<?php 
require 'inc/config.php';

$page = "Phrase de la semaine";
$category = $_SESSION['name'];
$subcategory = "Propose ta phrase";

if (!isset($us)) {
    Redirect("/");
}

if(isset($_POST['sentence_week']))
    {
        if(!empty($_POST['sentence_week']))
        {
            if (strlen($_POST['sentence_week']) > 10 && strlen($_POST['sentence_week']) < 1000) {
            $sentence_week = htmlentities($_POST['sentence_week']);

            $sql = "INSERT INTO cms_sentence_week (sentence_week,user_id,user_name,timestamp) VALUES (:sentence_week, :user, :username, :timestamp)";
                            $resultat = $bdd->prepare($sql);
                            $resultat->execute(array('sentence_week' => $sentence_week,'user' => $id,'username' => $username, 'timestamp' => strtotime('now'))) or die(print_r($resultat->errorInfo(), TRUE));
                            $resultat->closeCursor();

                            $validated = "Parfait, ton message à bien été prit en compte. Attends lundi pour découvrir si ta phrase a été sélectionnée! :)";
            } else {
                $error = "La phrase doit comporter entre 10 et 1000 caractères !";
            }        
        }
        else
        { 
            $error = "Veuillez saisir une phrase !";
        }
    }
    ?>
<html lang="fr">
	<head>
		<title>Habbui: Phrase de la semaine</title>
		<?php include("inc/_headerprincipal.php"); ?>

        <!--CONTENT HERE -->
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-custom gutter-b">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">
                                    La phrase de la semaine :
                                    </h3>
                                </div>
                            </div>
                            <div class="card-body">
                            <?php if(isset($error)){ ?>
                                <div class="alert alert-danger"><?php echo $error ?></div>
                            <?php } ?>

                            <?php if(isset($validated)){ ?>
                                <div class="alert alert-success" role="alert"><?php echo $validated ?></div>
                            <?php } ?>
                            <p><b>Habbui t'offre la possibilité de maximiser la visibilité d'une de tes phrases, humeurs, blagues en quelques clics!</b></p>     
                            <img class="mx-auto d-block" style="width:80%" src="/assets/media/img/phrasesemaine.png">

                            <form method="POST">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phrase de la semaine :</label>
                                    <input type="text" class="form-control" id="sentence_week" name="sentence_week" placeholder="Écris ta phrase ici">
                                    <small id="emailHelp" class="form-text text-muted">Sois original, créatif pour que ta phrase puisse être exposée sur le site dès lundi! :)</small>
                                </div>
                                <button type="submit" id="submit" name="submit" class="btn btn-success">Soumettre ma phrase</button>
                            </form>
                        </div>
                    </div>
                    <br>                    
                </div>
                <div class="col-md-4">

                    <div class="card card-custom gutter-b">
                    <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">
                                    Comment ça marche ? 
                                    </h3>
                                </div>
                            </div>                       
                        <div class="card-label bg-white">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">1. Soumettre ta phrase de la semaine via le formulaire à gauche.</li>
                                <li class="list-group-item">2. L'équipe examinera toutes les phrases de chaque utilisateur le dimanche.</li>
                                <li class="list-group-item">3. Le lundi, une nouvelle phrase apparaitra sur la page d'accueil du site (peut-être la tienne <i class="far fa-smile-wink"></i>).</li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
            </div>
            </div>
        </div>
    </div>

        <!-- END CONTENT HERE -->

		<?php include("inc/_footerprincipal.php");?>
	</body>
</html>
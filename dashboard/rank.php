<?php require '../inc/config.php';

if (!isset($_SESSION['name'])) {
    Redirect("/");
    exit();
}
if ($rank < 8)
{
die('Accès refusé.');

}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Habbui | Dashboard</title>
    <?php include('inc/_header.php') ?>

    <div class="container">
        <div class="card card-custom gutter-b">
            <div class="card-body">
                <h1>Rank un utilisateur :</h1>
                <form method="post" action="rank.php">
                    <div class="form-row mt-2">
                        <div class="form-group col-md-6">
                            <label for="rank">Rank :</label>
                            <div class="form-group">
                                <select class="form-control" id="rank" name="rank">
                                    <option value="1">Joueur</option>
                                    <option value="2">VIP</option>
                                    <option value="3">Helpeur/Guide</option>
                                    <option value="4">Croupier</option>
                                    <option value="5">Architecte</option>
                                    <option value="6">Modérateur</option>
                                    <option value="7">Animateur</option>
                                    <option value="8">Responsable</option>
                                    <option value="9">Gérant</option>
                                    <option value="10">Fondateur</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="username">Pseudo de l'utilisateur :</label>
                            <input class="form-control" type="text" id="username" name="username" />
                        </div>
                        <input type="submit" class="btn btn-primary" value="Rank l'utilisateur" />
                    </div>
                </form>
            </div>
        </div>


    <?php include('inc/_footer.php') ?>
    </body>

</html>
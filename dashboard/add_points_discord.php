<?php require '../inc/config.php';

if (!isset($_SESSION['name'])) {
    Redirect("/");
    exit();
}
if ($rank < 7)
{
    if ($username !== "Enigma")
    {
        Redirect("/");
        exit();
    }

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
                <h1>Ajout de points :</h1>
                <form method="post" action="add_points.php">
                    <div class="form-row mt-2">
                        <div class="form-group col-md-6">
                            <label for="points">Nombre de points à ajouter :</label>
                            <div class="form-group">
                                <select class="form-control" id="points" name="points">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pseudo">Pseudo de l'utilisateur :</label>
                            <input class="form-control" type="text" id="pseudo" name="pseudo" />
                        </div>
                        <input type="submit" class="btn btn-primary" value="Donner les points" />
                    </div>
                </form>
            </div>
        </div>

        <div class="card card-custom gutter-b">
            <div class="card-body">
                <h1 class="mb-4">Historique :</h1>
                <table class="table">
                    <tbody>
                        <?php
                        $req = $bdd->query('SELECT * FROM dashboard_historique ORDER BY id DESC LIMIT 15');
                        while ($donnees = $req->fetch()) {
                            echo '<tr><td>' . $donnees['pseudostaff'] . ' à donné ' . $donnees['nbpoints'] . ' point(s) à <strong>' . $donnees['pseudouser'] . ' le ' . $donnees['date'] . ' </strong></td></tr>';
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php include('inc/_footer.php') ?>
    </body>

</html>
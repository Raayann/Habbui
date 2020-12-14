<?php
require 'inc/config.php';
if (!isset($username)) {
    $username = "Invité(e)";
}

$page = "Palmares Discord";
$category = 'Informations';
$subcategory = "Classement Discord";

$classement = $bdd->prepare('SELECT * FROM dashboard_classement ORDER BY points DESC');
$classement->execute();
$count = $classement->rowCount();
$rang = 1;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Habbui.Online</title>
    <?php include("inc/_headerprincipal.php"); ?>

    <div class="container">
        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        <i class="flaticon2-menu-2"></i> Classement Discord
                    </h3>
                </div>
            </div>
            <div class="card-body">
                <p>Hey <?php echo $username ?> !</p>
                <p> Retrouve le classement des animations <strong>DISCORD</strong> sur cette page et vérifie si tu es <strong>proche de gagner une récompense</strong> mise en jeu chaque mois !</p>
                <p> Tout les mois, le premier du classement repart avec au choix :</p>
                <ul>
                    <li>Un <strong>Nitro Discord</strong>.</li>
                    <li>Un <strong>Abonnement Netflix</strong> valable 1 mois.</li>
                    <li>Un <strong>Abonnement Disney+</strong> valable 1 mois.</li>
                </ul>
                <p>Ne tarde plus et rejoins le discord pour participer a nos animations : <a href="https://discord.gg/X3d6yC6SyV"><i class="fab fa-discord icon-2x text-primary"></i></a></p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Classement</th>
                            <th>Pseudo</th>
                            <th>Points</th>
                        <tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($donnees = $classement->fetch()) {
                        ?>
                            <tr>
                                <td><?php echo $rang++; ?></td>
                                <td><?php echo $donnees['pseudo']; ?></td>
                                <td><?php echo $donnees['points']; ?></td>
                            </tr>
                        <?php
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php include("inc/_footerprincipal.php"); ?>
    </body>

</html>
<?php require '../inc/config.php';

if (!isset($_SESSION['name'])){
	Redirect("/");
	exit();
}?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Habbui | Dashboard</title>
    <?php include('inc/_header.php') ?>

    <!--CONTENT HERE -->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    Tableau des sanctions
                </h3>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-checkable dataTable no-footer dtr-inline">
                <thead>
                    <tr>
                        <th>Motifs</th>
                        <th>Sanction et Récidive 1</th>
                        <th>Récidive 2</th>
                        <th>Récidive 3</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Menace de DDOS</td>
                        <td>Bannissement 24h</td>
                        <td>Bannissement 1 an</td>
                        <td>Bannissement définitif</td>
                    </tr>
                    <tr>
                        <td>Apologie de Hack</td>
                        <td>Bannissement 24h</td>
                        <td>Bannissement 1 an</td>
                        <td>Bannissement définitif</td>
                    </tr>
                    <tr>
                        <td>Partage/menace de partage d’information privés</td>
                        <td>Bannissement 24h</td>
                        <td>Bannissement 1 an</td>
                        <td>Bannissement définitif</td>
                    </tr>
                    <tr>
                        <td>Discrimination</td>
                        <td>2 avertissements + mute 30 min</td>
                        <td>Bannissement 3h</td>
                        <td>Bannissement 1 semaine</td>
                    </tr>
                    <tr>
                        <td>Publicité (preuve à l’appui)</td>
                        <td>Bannissement définitif</td>
                        <td>Bannissement définitif</td>
                        <td>Bannissement définitif</td>
                    </tr>
                    <tr>
                        <td>Insulte (joueurs)</td>
                        <td>2 avertissements + mute 30 min</td>
                        <td>Bannissement 3h</td>
                        <td>Bannissement 1 semaine</td>
                    </tr>
                    <tr>
                        <td>Provocation</td>
                        <td>2 avertissements + mute 30 min</td>
                        <td>Bannissement 3h</td>
                        <td>Bannissement 1 semaine</td>
                    </tr>
                    <tr>
                        <td>Double compte</td>
                        <td>Bannissement définitif</td>
                        <td>Bannissement définitif</td>
                        <td>Bannissement définitif</td>
                    </tr>
                    <tr>
                        <td>Flood / Spam</td>
                        <td>2 avertissements + mute 30 min</td>
                        <td>Bannissement 3h</td>
                        <td>Bannissement 1 semaine</td>
                    </tr>
                    <tr>
                        <td>Contournement de BAN</td>
                        <td>Bannissement 24h</td>
                        <td>Bannissement 1 ans</td>
                        <td>Bannissement définitif</td>
                    </tr>
                    <tr>
                        <td>Blacklist</td>
                        <td>Bannissement définitif</td>
                        <td>Bannissement définitif</td>
                        <td>Bannissement définitif</td>
                    </tr>
                    <tr>
                        <td>Pédophilie</td>
                        <td>2 avertissements + mute 30 min</td>
                        <td>Bannissement 3h</td>
                        <td>Bannissement 1 semaine</td>
                    </tr>
                    <tr>
                        <td>Pseudo inacceptable*</td>
                        <td>2 avertissements + mute 30 min</td>
                        <td>Bannissement 3h</td>
                        <td>Bannissement 1 semaine</td>
                    </tr>
                    <tr>
                        <td>Photo de profil inaceptable</td>
                        <td>2 avertissements + mute 30 min</td>
                        <td>Bannissement 3h</td>
                        <td>Bannissement 1 semaine</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END CONTENT HERE -->

    <?php include('inc/_footer.php') ?>
    </body>

</html>
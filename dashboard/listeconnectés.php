<?php require '../inc/config.php';

if (!isset($_SESSION['name'])) {
    Redirect("/");
    exit();
}
if ($rank < 7) {
    Redirect("/");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Habbui | Dashboard</title>
    <?php include('inc/_header.php') ?>

    <!--CONTENT HERE -->
    <div class="container">
        <div class="row">
            <div class="card card-custom gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            <?php $req = $bdd->prepare('SELECT users_online FROM server_status');
                            $req->execute();
                            $online = $req->fetch(); ?>
                            Il y a actuellement : <?php echo $online[0]; ?> connectés
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <table>
                        <thead>
                            <tr>
                                <th>ID:</th>
                                <th>Pseudo</th>
                                <th>Mission</th>
                                <th>Rank</th>
                            </tr>
                        </thead>

                        <?php $liste = $bdd->prepare('SELECT * FROM users WHERE online = ?');
                        $liste->execute([1]);
                        $fetch = $liste->fetchAll();

                        for ($i = 0; $i < count($fetch); $i++) {
                            echo '
                    <tr>
                        <td>' . $fetch[$i]['id'] . '</td>
                        <td>' . $fetch[$i]['username'] . '</td>
                        <td>' . htmlentities($fetch[$i]['motto']) . '</td>
                        <td>' . $fetch[$i]['rank'] . '</td>													
                    </tr>';
                        } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT HERE -->

    <?php include('inc/_footer.php') ?>
    </body>

</html>
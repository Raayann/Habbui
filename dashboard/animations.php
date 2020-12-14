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
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">Logs des animations</h3>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th> Joueur </th>
                            <th> Action </th>
                            <th> Appart </th>
                            <th> Date </th>
                        </tr>
                    </thead>

                    <?php
                    $anim = "eventha";
                    $query5 = $bdd->prepare('SELECT * FROM cmdlogs WHERE command LIKE ?  ORDER BY ID DESC  LIMIT 0,80');
                    $query5->execute([$anim . '%']);
                    $fetch5 = $query5->fetchAll();
                    for ($i = 0; $i < count($fetch5); $i++) {
                    ?><tbody>
                            <TD> <?php echo $fetch5[$i]['user_name']; ?></TD>
                            <TD><?php echo  $fetch5[$i]['command']; ?></TD>
                            <TD><?php echo $fetch5[$i]['roomid']; ?></TD>
                            <TD>Il y a <?= timeAgo($fetch5[$i]['timestamp']); ?></TD>
                        </tbody> <?php }
                                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- END CONTENT HERE -->

    <?php include('inc/_footer.php') ?>
    </body>

</html>
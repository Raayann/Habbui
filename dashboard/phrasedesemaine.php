<?php require '../inc/config.php';

if ($rank < 7) {
    Redirect("/");
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Habbui | Dashboard</title>
    <?php include('inc/_header.php') ?>

    <!--CONTENT HERE -->
    <div class="container">
        <?php if (isset($_GET['choose_id']) && intval($_GET['choose_id']) > 0){
                    $req = $bdd->prepare("UPDATE cms_sentence_week SET active = ? WHERE id = ? AND timestamp 
                        > ?");
                    $req->execute(array("1", intval($_GET['choose_id']), strtotime('- 1 week')));

                    if ($rank >= 9 && $req->rowCount() === 1) {
                        $req2 = $bdd->prepare("UPDATE cms_sentence_week SET active = 0 WHERE id <> ?");
                        $req2->execute(array(intval($_GET['choose_id'])));
                        $success = "La phrase n°".$_GET['choose_id']." est désormais active !";
                    } else {
                        $erreur = "Une erreur est survenue lors de la requête !";
                    }
                }
        ?>
                    <?php if(isset($erreur)){ ?>
                                <div class="alert alert-danger"><?php echo $erreur ?></div>
                    <?php } ?>

                    <?php if(isset($success)){ ?>
                        <div class="alert alert-success" role="alert"><?php echo $success ?></div>
                    <?php } ?>
            <div class="card card-custom gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            Voici les phrases de la semaine disponibles :
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Phrases</th>
                                <th>Vote</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <?php 
                        $req = $bdd->prepare('SELECT * FROM cms_sentence_week WHERE timestamp > ? AND active != ?');
                        $req->execute(array(strtotime('- 1 week'), "1"));
                        
                        while ($sentence = $req->fetch()) { ?>

                            <tr>
                                <td><?=$sentence['sentence_week'] ?></td>
                                <td><?=$sentence['vote'] ?></td>
                                <td> 
                                    <a href="?vote=<?=$sentence['id'] ?>" class="btn btn-outline btn-circle green">
                                                            Voter pour cette phrase</a>
                                    <?php if ($rank >= 9) { ?>
                                        <a href="?choose_id=<?=$sentence['id'] ?>">Choisir cette phrase</a>
                                    <?php } ?>
                                </td>
                            </tr>

                        <?php } ?>
                    </table>
                </div>
            </div>
    </div>
    <!-- END CONTENT HERE -->

    <?php include('inc/_footer.php') ?>
    </body>

</html>
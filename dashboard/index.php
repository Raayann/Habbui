<?php require '../inc/config.php';

if (!isset($username) || $rank < 7) {Redirect("/");}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Habbui | Dashboard</title>
    <?php include('inc/_header.php') ?>

    <!--CONTENT HERE -->
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <?php $requete = $bdd->prepare('SELECT users_online FROM server_status');
                    $requete->execute();
                    $resultat = $requete->fetch(); ?>
                    <div class="card card-custom bg-primary bgi-no-repeat card-stretch gutter-b">
                        <div class="card-body">
                            <div class="flaticon-users-1 font-weight-bold text-white"> | Joueurs en ligne</div>
                            <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block"><?php echo $resultat['users_online']; ?></span>
                        </div>
                        <!--end::Body-->
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="card card-custom bgi-no-repeat card-stretch gutter-b">
                        <div class="card-body">
                            <i class="flaticon2-file"></i> | Joueurs inscrits
                            <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block"><?php echo $nbInscrit ?></span>
                        </div>
                        <!--end::Body-->
                        
                    </div>
                </div>
                <div class="col-xl-3">
                    <?php $requete = $bdd->prepare('SELECT * FROM bans');
                    $requete->execute();
                    $resultat = $requete->rowCount(); ?>
                    <div class="card card-custom bgi-no-repeat card-stretch gutter-b bg-danger">
                        <div class="card-body">
                            <div class="flaticon2-delete font-weight-bold text-white"> | Joueurs bannis</div>
                            <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block"><?php echo $resultat ?></span>
                        </div>
                        <!--end::Body-->
                    </div>
                </div>
                <div class="col-xl-3">
                    <?php $requete = $bdd->prepare('SELECT userpeak FROM server_status');
                    $requete->execute();
                    $resultat = $requete->fetch(); ?>
                    <div class="card card-custom bgi-no-repeat card-stretch gutter-b">
                        <div class="card-body">
                            <i class="flaticon2-chart"></i> | Records de connectés
                            <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block"><?php echo $resultat['userpeak'] ?></span>
                        </div>
                        <!--end::Body-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <?php $requete = $bdd->prepare('SELECT rooms_loaded FROM server_status');
                    $requete->execute();
                    $resultat = $requete->fetch(); ?>
                    <div class="card card-custom bg-info card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body">
                            <div class="flaticon2-reload font-weight-bold text-white"> | Appartements ouverts</div>
                            <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block"><?php echo $resultat['rooms_loaded'] ?></span>
                        </div>
                        <!--end::Body-->
                    </div>
                </div>
                <div class="col-xl-4">
                    <?php $requete = $bdd->prepare('SELECT COUNT(*) AS id FROM rooms');
                    $requete->execute();
                    $resultat = $requete->fetch(); ?>
                    <div class="card card-custom bg-success card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body">
                            <div class="flaticon2-add-1 font-weight-bold text-white"> | Appartements crées</div>
                            <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block"><?php echo $resultat['id'] ?></span>
                        </div>
                        <!--end::Body-->
                    </div>
                </div>
                <div class="col-xl-4">
                    <?php $requete = $bdd->prepare('SELECT COUNT(*) AS id FROM items');
                    $requete->execute();
                    $resultat = $requete->fetch(); ?>
                    <div class="card card-custom bg-warning card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body">
                            <div class="flaticon2-shopping-cart-1 font-weight-bold text-white"> | Mobis achetés</div>
                            <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block"><?php echo $resultat['id'] ?></span>
                        </div>
                        <!--end::Body-->
                    </div>
                </div>
            </div>
            

            <!--fin-->
            <div class="row">
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label"><i class="flaticon-users-1"></i> | Les joueurs connectés</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID:</th>
                                        <th>Pseudo</th>
                                        <th>Mission</th>
                                        <th>Rank</th>
                                    </tr>
                                </thead>
                                <tbody>
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
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
    
    <?php include('inc/_footer.php') ?>
    </body>

</html>
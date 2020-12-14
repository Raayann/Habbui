<?php
require 'inc/config.php';

$page = "Équipe";
$category = "Communauté";
$subcategory = "Équipe";

if (!isset($username)) {
    Redirect("/");
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Habbui: <?=$page ?></title>
    <style type="text/css">
    	.offline {position: absolute;right: 50px;border-radius: 50%;width: 20px;height: 20px;box-shadow: inset -2px -2px rgba(0,0,0,.3);background-color: red;}
    	.online {position: absolute;right:50px;border-radius: 50%;width: 20px;height: 20px;box-shadow: inset -2px -2px rgba(0,0,0,.3);background-color: green;}
    </style>
    <?php include("inc/_headerprincipal.php"); ?>
    <!--begin::Container-->
    <div class="container">
        <!--begin::Row Gestion-->
        <div class="row">
            <div class="col-12">
                <div class="alert alert-custom bg-danger text-center">
                    <div class="alert-text font-weight-boldest text-white"><i class="fas fa-award text-white"></i> | Pôle Gestion</div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $GESTION = $bdd->query('SELECT username,fonction,online,look FROM users WHERE `rank` IN (9,10)');
            ?>
            <div class="col-xl-4">
                <a href="#" class="card card-custom bg-danger bg-hover-state-danger card-stretch gutter-b">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mr-4 align-self-center">
                                <i class="fas fa-award icon-4x text-white"></i>
                            </div>
                            <div class="flex-grow-1">
                                <div class="text-inverse-danger font-weight-bolder font-size-h5 ">Pôle Gestion</div>
                                <div class="font-weight-bold text-inverse-danger font-size-sm">Ils ont pour but d'assurer une bonne évolutivité du projet en intégrant diverses stratégies.</div>
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Stats Widget 13-->
            </div>
            <?php while ($GE = $GESTION->fetch()) { ?>
                <div class="col-xl-4">
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body d-flex align-items-center py-0 m-5">
                            <div><img src="https://www.habbui.online/dcr/habbo-imaging/avatarimage.php?figure=<?php echo $GE['look']; ?>&headonly=1&size=l&head_direction=2" width="59px" height="62px" /></div>
                            <div class="d-flex flex-column flex-grow-1 py-2 py-lg-5">
                                <a href="#" class="card-title font-weight-bolder text-dark-75 font-size-h5 mb-2 text-hover-primary"><?= $GE['username'] ?></a>
                                <span class="font-weight-bold text-muted font-size-lg"><?= $GE['fonction'] ?></span>
                            </div>
                            <?php if ($GE['online'] == 1) {
                                echo '<img src="https://www.habbui.online/assets/media/img/online.png">';
                            } else {
                                echo '<img src="https://www.habbui.online/assets/media/img/offline.png">';
                            } ?>
                        </div>
                        <!--end::Body-->
                    </div>
                </div>
            <?php } ?>
        </div>
        <!--end::Row-->

        <!--begin::Row Responsables-->
        <div class="row">
            <div class="col-12">
                <div class="alert alert-custom alert-white bg-warning text-center">
                    <div class="alert-text font-weight-boldest text-white"><i class="fas fa-eye text-white"></i> | Pôle Responsables</div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $GESTION = $bdd->query("SELECT username,fonction,online,look FROM users WHERE `rank` ='8' OR `username` = 'Enigma'");
            ?>
            <div class="col-xl-4">
                <a href="#" class="card card-custom bg-warning bg-hover-state-danger card-stretch gutter-b">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mr-4 align-self-center">
                                <i class="fas fa-eye icon-4x text-white"></i>
                            </div>
                            <div class="flex-grow-1">
                                <div class="text-inverse-danger font-weight-bolder font-size-h5 ">Pôle Responsables</div>
                                <div class="font-weight-bold text-inverse-danger font-size-sm">Ils ont pour mission de gérer leur pôle à la perfection.</div>
                            </div>
                        </div>
                    </div>

                </a>
            </div>
            <?php while ($GE = $GESTION->fetch()) { ?>
                <div class="col-xl-4">
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body d-flex align-items-center py-0 m-3">
                            <div><img src="https://www.habbui.online/dcr/habbo-imaging/avatarimage.php?figure=<?php echo $GE['look']; ?>&headonly=1&size=l&head_direction=2" width="59px" height="62px" /></div>
                            <div class="d-flex flex-column flex-grow-1 py-2 py-lg-5">
                                <a href="#" class="card-title font-weight-bolder text-dark-75 font-size-h7 mb-2 text-hover-primary"><?= $GE['username'] ?></a>
                                <span class="font-weight-bold text-muted"><?= $GE['fonction'] ?></span>
                            </div>
                            <?php if ($GE['online'] == 1) {
                                echo '<img src="https://www.habbui.online/assets/media/img/habbo_online_anim.gif">';
                            } else {
                                echo '<img src="https://www.habbui.online/assets/media/img/habbo_offline.gif">';
                            } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!--end::Row-->

        <!--begin::Row Developpement -->
        <div class="row">
            <div class="col-12">
                <div class="alert alert-custom alert-white bg-primary text-center">
                    <div class="alert-text font-weight-boldest text-white"><i class="fas fa-code text-white"></i> | Pôle Développement</div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $GESTION = $bdd->query("SELECT username,fonction,online,look FROM users WHERE rank = 12");
            ?>
            <div class="col-xl-4">
                <a href="#" class="card card-custom bg-primary bg-hover-state-danger card-stretch gutter-b">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mr-4 align-self-center">
                                <i class="fas fa-code icon-4x text-white"></i>
                            </div>
                            <div class="flex-grow-1">
                                <div class="text-inverse-danger font-weight-bolder font-size-h5 ">Pôle Développement</div>
                                <div class="font-weight-bold text-inverse-danger font-size-sm">Grace au pôle Développement, de nouvelles fonctionnalités voient le jour.</div>
                            </div>
                        </div>
                    </div>

                </a>
            </div>
            <?php while ($GE = $GESTION->fetch()) { ?>
                <div class="col-xl-2">
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body d-flex align-items-center py-0">
                            <div class="d-flex flex-column flex-grow-1 py-2 py-lg-5">
                                <a href="#" class="card-title font-weight-bolder text-dark-75 font-size-h5 mb-2 text-hover-primary"><?= $GE['username'] ?></a>
                                <span class="font-weight-bold text-muted"><?= $GE['fonction'] ?></span>
                            </div>
                            <?php if ($GE['online'] == 1) {
                                echo '<img class="ml-5" src="https://www.habbui.online/assets/media/img/habbo_online_anim.gif">';
                            } else {
                                echo '<img class="ml-5" src="https://www.habbui.online/assets/media/img/habbo_offline.gif">';
                            } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!--end::Row-->

 <!--begin::Row Responsables-->
 <div class="row">
            <div class="col-12">
                <div class="alert alert-custom alert-white bg-danger text-center">
                    <div class="alert-text font-weight-boldest text-white"><i class="fas fa-lock text-white"></i> | Pôle Modérations</div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $GESTION = $bdd->query("SELECT username,fonction,online,look FROM users WHERE `rank` ='6'");
            ?>
            <div class="col-xl-4">
                <a href="#" class="card card-custom bg-danger bg-hover-state-danger card-stretch gutter-b">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mr-4 align-self-center">
                                <i class="fas fa-lock icon-4x text-white"></i>
                            </div>
                            <div class="flex-grow-1">
                                <div class="text-inverse-danger font-weight-bolder font-size-h5 ">Pôle Modérations</div>
                                <div class="font-weight-bold text-inverse-danger font-size-sm">Ils ont pour mission de surveiller l'hôtel.</div>
                            </div>
                        </div>
                    </div>

                </a>
            </div>
            <?php while ($GE = $GESTION->fetch()) { ?>
                <div class="col-xl-4">
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body d-flex align-items-center py-0 m-3">
                            <div><img src="https://www.habbui.online/dcr/habbo-imaging/avatarimage.php?figure=<?php echo $GE['look']; ?>&headonly=1&size=l&head_direction=2" width="59px" height="62px" /></div>
                            <div class="d-flex flex-column flex-grow-1 py-2 py-lg-5">
                                <a href="#" class="card-title font-weight-bolder text-dark-75 font-size-h7 mb-2 text-hover-primary"><?= $GE['username'] ?></a>
                                <span class="font-weight-bold text-muted"><?= $GE['fonction'] ?></span>
                            </div>
                            <?php if ($GE['online'] == 1) {
                                echo '<img src="https://www.habbui.online/assets/media/img/habbo_online_anim.gif">';
                            } else {
                                echo '<img src="https://www.habbui.online/assets/media/img/habbo_offline.gif">';
                            } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!--end::Row-->


        <!--begin::Row Developpement & Discord -->
        <div class="row">
            <div class="col-12">
                <div class="alert alert-custom alert-white bg-success text-center">
                    <div class="alert-text font-weight-boldest text-white"><i class="fas fa-certificate text-white"></i> | Pôle Animations</div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $GESTION = $bdd->query("SELECT username,fonction,online,look FROM users WHERE rank = 7");
            ?>
            <div class="col-xl-3">
                <a href="#" class="card card-custom bg-success bg-hover-state-danger card-stretch gutter-b">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mr-4 align-self-center">
                                <i class="fas fa-certificate icon-4x text-white"></i>
                            </div>
                            <div class="flex-grow-1">
                                <div class="text-inverse-danger font-weight-bolder font-size-h5 ">Pôle Animations</div>
                                <div class="font-weight-bold text-inverse-danger font-size-sm">Ils sont présents pour vous divertir et communiquer le plus possible.</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php while ($GE = $GESTION->fetch()) { ?>
                <div class="col-xl-3">
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body d-flex align-items-center py-0 m-5">
                            <div><img src="https://www.habbui.online/dcr/habbo-imaging/avatarimage.php?figure=<?php echo $GE['look']; ?>&headonly=1&size=l&head_direction=2" width="59px" height="62px" /></div>
                            <div class="d-flex flex-column flex-grow-1 py-2 py-lg-5">
                                <a href="#" class="card-title font-weight-bolder text-dark-75 font-size-h7 mb-2 text-hover-primary"><?= $GE['username'] ?></a>
                                <span class="font-weight-bold text-muted"><?= $GE['fonction'] ?></span>
                            </div>
                            <?php if ($GE['online'] == 1) {
                                echo '<img src="https://www.habbui.online/assets/media/img/habbo_online_anim.gif">';
                            } else {
                                echo '<img src="https://www.habbui.online/assets/media/img/habbo_offline.gif">';
                            } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="col-xl-3">
                <div class="card card-custom card-stretch gutter-b">
                    <!--begin::Body-->
                    <div class="card-body d-flex align-items-center py-0 m-5 d-flex justify-content-center">
                        <a href="https://discord.gg/5AD4mgPs5D" class="btn btn-light-success font-weight-bold mr-2">Poste à Pourvoir</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Row-->
        <div class="row">
            <div class="col-12">
                <div class="alert alert-custom alert-white text-center">
                    <div class="alert-text font-weight-boldest">Equipe Secondaire</div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $SECOND = $bdd->query("SELECT username,fonction,online,look FROM `users` WHERE `rank` LIKE '4' OR `is_pubeur` LIKE '4' OR `is_discord` LIKE '%1%' OR `is_baw` LIKE '%1%' OR `is_graph` LIKE '%1%' OR `is_guide` LIKE '%1%'");
            ?>
            <?php while ($GE = $SECOND->fetch()) { ?>
                <div class="col-xl-4">
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body d-flex align-items-center py-0 m-5">
                            <div><img src="https://www.habbui.online/dcr/habbo-imaging/avatarimage.php?figure=<?php echo $GE['look']; ?>&headonly=1&size=l&head_direction=2" width="59px" height="62px" /></div>
                            <div class="d-flex flex-column flex-grow-1 py-2 py-lg-5">
                                <a href="#" class="card-title font-weight-bolder text-dark-75 font-size-h5 mb-2 text-hover-primary"><?= $GE['username'] ?></a>
                                <span class="font-weight-bold text-muted"><?= $GE['fonction'] ?></span>
                            </div>
                            <?php if ($GE['online'] == 1) {
                                echo '<img src="https://www.habbui.online/assets/media/img/habbo_online_anim.gif">';
                            } else {
                                echo '<img src="https://www.habbui.online/assets/media/img/habbo_offline.gif">';
                            } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!--end::Container-->
    <?php include("inc/_footerprincipal.php"); ?>
    </body>

</html>
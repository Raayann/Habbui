<?php
require 'inc/config.php';

/* if (!isset($username)){Redirect("/");} */

if (!isset($username)){$username = "Invité(e)";}

$page = "Le classement des Habbui's";
$category = "Communauté";
$subcategory = "Palmares";

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Habbui.online</title>
    <?php include("inc/_headerprincipal.php"); ?>

    <!--CONTENT HERE -->
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <!--begin::List Widget 2-->
                <div class="card card-custom bg-light-warning card-stretch gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-warning">Crédits</h3>
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body pt-2">
                        <!--begin::Item-->
                        <?PHP $ClassementCredits = $bdd->prepare("SELECT * FROM users WHERE id ORDER BY credits DESC LIMIT 10");
                        $ClassementCredits->execute();
                        while ($credits = $ClassementCredits->fetch()) {
                        ?>
                            <div class="d-flex align-items-center mb-10">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40 symbol-light-white mr-5">
                                    <div class="symbol-label">
                                        <img src="https://habbui.online/dcr/habbo-imaging/avatarimage.php?figure=<?PHP echo htmlspecialchars(htmlentities(trim($credits['look']))); ?>&direction=3&size=n&action=std,crr=47&headonly=1" class="h-200 align-right" alt="" />
                                    </div>
                                </div>
                                <!--end::Symbol-->

                                <!--begin::Text-->
                                <div class="d-flex flex-column font-weight-bold">
                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg"><?PHP echo htmlspecialchars(htmlentities(trim($credits['username']))); ?></a>
                                    <span class="text-muted"><?PHP echo htmlspecialchars(trim($credits['credits'])); ?> crédits</span>
                                </div>
                                <!--end::Text-->
                            </div>
                        <?php } ?>
                        <!--end::Item-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::List Widget 2-->
            </div>
            <div class="col-xl-4">
                <!--begin::List Widget 2-->
                <div class="card card-custom bg-light-info card-stretch gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-info">Habbui'z</h3>
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body pt-2">
                        <!--begin::Item-->
                        <?PHP $ClassementCredits = $bdd->prepare("SELECT * FROM users WHERE id ORDER BY jetons DESC LIMIT 10");
                        $ClassementCredits->execute();
                        while ($credits = $ClassementCredits->fetch()) {
                        ?>
                            <div class="d-flex align-items-center mb-10">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40 symbol-light-white mr-5">
                                    <div class="symbol-label">
                                        <img src="https://habbui.online/dcr/habbo-imaging/avatarimage.php?figure=<?PHP echo htmlspecialchars(htmlentities(trim($credits['look']))); ?>&direction=3&size=n&action=std,crr=47&headonly=1" class="h-200 align-right" alt="" />
                                    </div>
                                </div>
                                <!--end::Symbol-->

                                <!--begin::Text-->
                                <div class="d-flex flex-column font-weight-bold">
                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg"><?PHP echo htmlspecialchars(htmlentities(trim($credits['username']))); ?></a>
                                    <span class="text-muted"><?PHP echo htmlspecialchars(trim($credits['jetons'])); ?> habbui'z</span>
                                </div>
                                <!--end::Text-->
                            </div>
                        <?php } ?>
                        <!--end::Item-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::List Widget 2-->
            </div>
            <div class="col-xl-4">
                <!--begin::List Widget 2-->
                <div class="card card-custom bg-light-success card-stretch gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-success">Points Gamers</h3>
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body pt-2">
                        <!--begin::Item-->
                        <?PHP $ClassementCredits = $bdd->prepare("SELECT * FROM users WHERE id ORDER BY game_points_month DESC LIMIT 10");
                        $ClassementCredits->execute();
                        while ($credits = $ClassementCredits->fetch()) {
                        ?>
                            <div class="d-flex align-items-center mb-10">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40 symbol-light-white mr-5">
                                    <div class="symbol-label">
                                        <img src="https://habbui.online/dcr/habbo-imaging/avatarimage.php?figure=<?PHP echo htmlspecialchars(htmlentities(trim($credits['look']))); ?>&direction=3&size=n&action=std,crr=47&headonly=1" class="h-200 align-right" alt="" />
                                    </div>
                                </div>
                                <!--end::Symbol-->

                                <!--begin::Text-->
                                <div class="d-flex flex-column font-weight-bold">
                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg"><?PHP echo htmlspecialchars(htmlentities(trim($credits['username']))); ?></a>
                                    <span class="text-muted"><?PHP echo htmlspecialchars(trim($credits['game_points_month'])); ?> points gamers</span>
                                </div>
                                <!--end::Text-->
                            </div>
                        <?php } ?>
                        <!--end::Item-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::List Widget 2-->
            </div>
        </div>
    </div>
    <!-- END CONTENT HERE -->

    <?php include("inc/_footerprincipal.php"); ?>
    </body>

</html>
<?php
require 'inc/config.php';

if (!isset($_SESSION['name'])) {
    Redirect("/");
}

$page = "Mes paramètres";
$category = $_SESSION['name'];
$urlcategory = "/moi";
$subcategory = "Mes paramètres";
if(isset($_POST['mail'])) 
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Habbui: <?=$subcategory ?></title>
    <?php include("inc/_headerprincipal.php"); ?>

    <!--CONTENT HERE -->

    <div class=" container ">
        <!--begin::Profile Change Password-->
        <div class="d-flex row">
            <!--begin::Aside-->
            <div class="flex-row-auto col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" id="kt_profile_aside">
                <!--begin::Profile Card-->
                <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Body-->
                    <div class="card-body pt-4">

                        <!--begin::User-->
                        <div class="d-block align-items-center">
                            <div class="text-white opacity-90 font-weight-bolder font-size-base d-none d-md-inline mr-4">
                                <img src="https://habbui.online/dcr/habbo-imaging/avatarimage.php?figure=<?php echo $avatar['look']; ?>&direction=3&size=l&action=std,crr=47&headonly=1" />
                            </div>
                            <div>
                                <a href="#" class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">
                                    <?= $username ?>
                                </a>
                                <div class="text-muted">
                                    <?= $fonction ?>
                                </div>
                            </div>
                        </div>
                        <!--end::User-->

                        <!--begin::Contact-->
                        <div class="py-9">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="font-weight-bold mr-2">Email:</span>
                                <a href="#" class="text-muted text-hover-primary"><?= $email ?></a>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="font-weight-bold mr-2">Discord:</span>
                                <a href="#" class="text-muted text-hover-primary"><?= $discord ?></a>
                            </div>
                        </div>
                        <!--end::Contact-->

                        <!--begin::Nav-->
                        <div class="navi navi-bold navi-hover navi-active navi-link-rounded">
                            <div class="navi-item mb-2">
                                <a id="gotomdpform" href="#" class="navi-link py-4 active">
                                    <span class="navi-icon mr-2">
                                        <span class="svg-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Shield-user.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
                                                    <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3" />
                                                    <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon--></span> </span>
                                    <span class="navi-text font-size-lg">
                                        Changer de mot de passe
                                    </span>
                                </a>
                            </div>
                            <div class="navi-item mb-2">
                                <a id="gotomailform" href="#" class="navi-link py-4">
                                    <span class="navi-icon mr-2">
                                        <span class="svg-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3" />
                                                    <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon--></span> </span>
                                    <span class="navi-text font-size-lg">
                                        Changer d'e-mail
                                    </span>
                                </a>
                            </div>
                            <?php if ($discordVerify <= 0) {?>
                            <div class="navi-item mb-2">
                                <a id="verifydiscord" href="#" class="navi-link py-4">
                                    <span class="navi-icon mr-2">
                                        <i class="icon-xl fab fa-discord"></i>
                                    </span>
                                    <span class="navi-text font-size-lg">
                                        Lier mon discord
                                    </span>
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Profile Card-->
            </div>
            <!--end::Aside-->

            <!--begin::Content-->
            <div class="flex-row-fluid col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <!--begin::Card-->


                <form id="password-change-form" method="POST" class="form">
                    <div class="card card-custom gutter-b card-stretch">
                        <!--begin::Header-->
                        <div class="card-header py-3">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder text-dark">Changer le mot de passe</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">Changer le mot de passe de mon compte</span>
                            </div>
                            <div class="card-toolbar">
                                <button type="submit" class="btn btn-success mr-2">Sauvegarder</button>
                            </div>
                        </div>
                        <!--end::Header-->

                        <!--begin::Form-->
                        <div class="card-body">
                        <div id="response"></div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-alert">Mot de passe actuel</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input id="oldpassword" type="password" class="form-control form-control-lg form-control-solid mb-2" value="" placeholder="Mot de passe actuel" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-alert">Nouveau mot de passe</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input id ="newpassword" type="password" class="form-control form-control-lg form-control-solid" name="newpass" value="" placeholder="Nouveau mot de passe" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-alert">Vérification de nouveau mot de passe</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input id ="newpassword2" type="password" class="form-control form-control-lg form-control-solid" name="newpass_v" value="" placeholder="Vérification nouveau mot de passe" />
                                </div>
                            </div>
                        </div>
                        <!--end::Form-->
                    </div>
                </form>

                <form id="email-change-form" method="POST" class="form" style="display:none;">
                    <div class="card card-custom gutter-b card-stretch">
                        <!--begin::Header-->
                        <div class="card-header py-3">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder text-dark">Changer votre email</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">Changer l'adresse e-mail de votre compte.</span>
                            </div>
                            <div class="card-toolbar">
                                <button type="submit" class="btn btn-success mr-2">Sauvegarder</button>
                            </div>
                        </div>
                        <!--end::Header-->

                        <!--begin::Form-->
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-alert">Votre nouvelle adresse email:</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="email" name="mail" class="form-control form-control-lg form-control-solid" placeholder="exemple@habbui.online" />
                                </div>
                            </div>
                        </div>
                        <!--end::Form-->
                    </div>
                </form>

            </div>
            <!--end::Content-->
        </div>
    </div>
    <!-- END CONTENT HERE -->

    <?php include("inc/_footerprincipal.php"); ?>
    </body>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="<?=$sURL?>/assets/js/app.js/settings_.js"></script>
</html>
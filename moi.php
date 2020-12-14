<?php
require 'inc/config.php';

$page = "Moi";
$category = $username;
$subcategory = "Mes informations";

if (!isset($us)) {
    Redirect("/");
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Habbui: <?= $username ?></title>
    <style type="text/css">
        .item-slide{display: none;}
    </style>
    <?php include("inc/_headerprincipal.php"); ?>

    <!--CONTENT HERE -->

    <div class="d-flex flex-column-fluid">

        <!--begin::Container-->
        <div class="container">
            <?php if (get('discord') && $discordVerify < 1) {?>
            
            <div class="alert pt-30 pt-md-25 pb-15 px-5 text-center alert-custom alert-light-<?php if(get('discord') === "error" || verify($discordID, $discordUserTag, $discordToken)){echo "danger";}else{echo "primary";} ?> fade show mb-5" role="alert">
                <div class="alert-text"><h5><?php if (get('discord') === "error" || $discordVerify > 0){?>
                    <p><i class="flaticon-warning text-danger icon-5x"></i></p>
                    <p>Une erreur est survenue vérifiez les points suivant et réessayer:</p>
                    <br />
                    <p>• Vérifiez que vous n'êtes pas connecté(e) à l'Hôtel.</p>
                    <br />
                    <p>• Vérifiez que le compte que vous avez essayé(e) de lier, ne l'est déjà pas avec un autre compte.</p>
                    <?php } else {
                    echo "Hey ".$username.", pour lier ton compte discord à habbui il ne te reste plus qu'une petite étape.<br /><br /> Copie, puis colle le texte ci-dessous dans le salon commande sur le discord!"; ?> 
                    <div class="d-flex flex-column-fluid flex-center">
                            <form class="form fv-plugins-bootstrap fv-plugins-framework">
                                <br /><br />
                                <div class="form-group fv-plugins-icon-container">
                                    <input id="txtctc" class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="text" value="h!verify <?php echo $discordToken; ?>" disabled>
                                </div>
                                <div></div></form>

                        

                    </div>

                    <a id="copyToClipboard" href="#" class="btn btn-primary btn-shadow font-weight-bold mr-2">Copier</a>

                <?php } ?></h5></div>
            </div>

            <?php } ?>
            <!--begin::Dashboard-->

            <!--begin::Row-->
            <div class="row">
                <div class="col-xl-4">

                    <!--begin::Tiles Widget 1-->
                    <div class="card card-custom gutter-b card-stretch">

                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <div class="card-title">
                                <div class="card-label">


                                    <img src="https://habbui.online/dcr/habbo-imaging/avatarimage.php?figure=<?=$look?>&direction=2&action=std,crr=47" />


                                    <div class="font-weight-bolder"><?= $username ?></div>
                                    <div class="font-size-sm text-muted mt-2">Description : <?= $motto ?></div>
                                    <div class="font-size-sm text-muted mt-2">Discord : <?=$discord ?></div>

                                </div>
                            </div>
                            <div class="card-toolbar">
                                    <div class="dropdown dropdown-inline">
                                                        <a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ki ki-bold-more-hor"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right" style="">
                                                            <!--begin::Navigation-->
                                                            <ul class="navi navi-hover py-5">
                                                                <li class="navi-item">
                                                                    <a href="parametres" class="navi-link">
                                                                        <span class="navi-icon">
                                                                            <i class="fa fa-cog"></i>
                                                                        </span>
                                                                        <span class="navi-text">Paramètres</span>
                                                                    </a>
                                                                </li>
                                                                <li class="navi-item">
                                                                    <a href="logout" class="navi-link">
                                                                        <span class="navi-icon">
                                                                            <i class="fa fa-power-off text-danger"></i>
                                                                        </span>
                                                                        <span class="navi-text text-danger">Déconnexion</span>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                            <!--end::Navigation-->
                                                        </div>
                                                    </div>
                            </div>
                        </div>

                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column px-0">

                            <!-- begin::Items-->
                            <div class="flex-grow-1 card-spacer-x">
                                <div class="separator separator-dashed mb-5"></div>
                                <!--begin::Item-->
                                <div class="d-flex align-items-center justify-content-between mb-10">
                                    <div class="d-flex align-items-center mr-2">
                                        <div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
                                            <div class="symbol-label">
                                                <img src="assets/media/img/coins.gif" alt="" class="h-50" />
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Nombre
                                                de crédits :</a>
                                        </div>
                                    </div>
                                    <div class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-h5">
                                        <?= $credits ?></div>
                                </div>

                                <!--end::Item-->

                                <!--begin::Item-->
                                <div class="d-flex align-items-center justify-content-between mb-10">
                                    <div class="d-flex align-items-center mr-2">
                                        <div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
                                            <div class="symbol-label">
                                                <img src="assets/media/img/habbuiz.png" alt="" class="h-50" />
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Nombre
                                                d'Habbui'z :</a> </div>
                                    </div>
                                    <div class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-h5">
                                        <?= $jetons ?></div>
                                </div>

                                <!--end::Item-->

                                <!--begin::Item-->
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center mr-2">
                                        <div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
                                            <div class="symbol-label">
                                                <img src="assets/media/img/game.gif" alt="" class="h-50" />
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Nombre
                                                de points jeux :</a> </div>
                                    </div>
                                    <div class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-h5">
                                        <?= $gamepoints ?></div>

                                </div>


                                <!--end::Item-->
                            </div>


                            <!--end::Items-->
                        </div>

                        <!--end::Body-->
                    </div>

                    <!--end::Tiles Widget 1-->

                </div>
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-xl-3">

                            <!--begin::Tiles Widget 3-->
                            <div class="card card-custom bgi-no-repeat bgi-no-repeat bgi-size-cover gutter-b" style="height: 150px; background-image: url(assets/media/bg/bg-19.jpg)">

                                <!--begin::Body-->
                                <div class="card-body d-flex flex-column">

                                    <!--begin::Title-->
                                    <a href="#" class="text-dark-75 text-hover-primary font-weight-bolder font-size-h3">
                                        <p>Nombre d'inscrits</p>
                                        <p><?= $nbInscrit ?></p>
                                    </a>

                                    <!--end::Title-->
                                </div>

                                <!--end::Body-->
                            </div>

                            <!--end::Tiles Widget 3-->

                        </div>
                        <div class="col-xl-9">

                            <!--begin::Mixed Widget 10-->
                            <div class="card card-custom gutter-b" style="height: 150px">

                                <!--begin::Body-->
                                <div class="card-body d-flex align-items-center justify-content-between flex-wrap">
                                    <div class="mr-2">
                                        <h3 class="font-weight-bolder">La phrase de la semaine</h3>
                                        <div class="text-dark-50 font-size-lg mt-2">Habbui c'est comme un cadeau de Noël.<br/> Tu ne sais pas ce qu'il y a dedans... <br/>Et quand tu l'ouvres tu es surpris
                                            -Montage203</div>
                                    </div>
                                    <a href="phrasedesemaine" class="btn btn-primary font-weight-bold py-3 px-6">Proposes ta phrase</a>
                                </div>

                                <!--end::Body-->
                            </div>

                            <!--end::Mixed Widget 10-->

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">

                            <!--begin::Tiles Widget 13-->
                            <div class="card card-custom bgi-no-repeat gutter-b" style="height: 175px; background-color: #4b4d98; background-position: calc(100% + 0.5rem) 100%; background-size: 100% auto; background-image: url(assets/media/svg/patterns/hotel.png)">

                                <!--begin::Body-->
                                <div class="card-body d-flex align-items-center">
                                    <div>
                                        <h3 class="text-white font-weight-bolder line-height-lg mb-5">Tu veux
                                            <br />enfin t'amuser ?
                                        </h3>
                                        <a href=# onclick="Hotel()" class="btn btn-lg btn-success font-weight-bold  px-6 py-3">REJOINDRE
                                            L'HÔTEL</a>
                                    </div>
                                </div>

                                <!--end::Body-->
                            </div>
                            <!--end::Tiles Widget 13-->
                            <div class="row">
                                <div class="col-xl-6">
                                    <!--begin::Tiles Widget 11-->
                                    <a href="https://discord.gg/bm9bRThpsM" target=_blank>
                                        <div class="card card-custom gutter-b" style="height: 150px;background-color: #7289DA">
                                            <div class="card-body">
                                                <span class="ml-n2">
                                                    <i class="fab fa-discord icon-5x text-white"></i>

                                                    <!--end::Svg Icon-->
                                                </span>
                                                <div class="text-inverse-primary font-weight-bolder font-size-h3 mt-3">
                                                    Discord</div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Tiles Widget 11-->
                                </div>
                                <div class="col-xl-6">

                                    <!--begin::Tiles Widget 12-->
                                    <a href="https://www.instagram.com/habbui.online/" target=_blank>
                                        <div class="card card-custom gutter-b" style="height: 150px;background-color: #E1306C">
                                            <div class="card-body">
                                                <span class="ml-n2">
                                                    <i class="fab fa-instagram icon-5x text-white"></i>

                                                    <!--end::Svg Icon-->
                                                </span>
                                                <div class="text-inverse-primary font-weight-bolder font-size-h3 mt-3">
                                                    Instagram</div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Tiles Widget 12-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <!--begin::Mixed Widget 14-->
                            <?php $news = $bdd->query('SELECT * FROM cms_news ORDER BY id DESC LIMIT 0, 5');
                            while ($data = $news->fetch()) { ?>
                                <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b card-stretch item-slide"style="background-image: url(<?php echo $data['image']; ?>) ;background-position: right center;">
                                    <!--begin::Body-->
                                    <div class="card-body d-flex flex-column align-items-start justify-content-start">
                                        <div class="p-4 flex-grow-1">
                                            <h2>
                                                <div class="text-white font-weight-boldest line-height-lg mb-5" style="text-transform:uppercase; text-shadow: 2px 2px 4px rgba(0,0,0, 0.5); position: absolute; bottom: 20px; left: 15px;">
                                                    <?php echo $data['title']; ?>
                                                </div>
                                            </h2>
                                        </div>
                                        <a href="news/view/<?php echo $data['id']; ?>" class="btn btn-link btn-link-warning font-weight-boldest" style="position: absolute; bottom: 10px; left: 15px;">Plus d'informations
                                        </a>
                                    </div>
                                    <!--end::Body-->
                                </div>
                            <?php } ?>
                            <!--end::Mixed Widget 14-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Row-->
            <!--end::Dashboard-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
    <!-- END CONTENT HERE -->

    <?php include("inc/_footerprincipal.php"); ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    </body>

</html>
<script type='text/javascript'>
    var slideIndex = 0;

    function currentShow() {
        var slides = $(".item-slide");
        for (var i = 0; i < slides.length; i++) {
            $(slides[i]).slideUp(500);
        }

        slideIndex++;

        if (slideIndex > slides.length) {
            slideIndex = 1;
        }

        $(slides[slideIndex - 1]).delay(550).slideDown(500);
        setTimeout(currentShow, 6000);
    }

    currentShow();

    <?php if (get('discord') && $discordVerify < 1) {?>

    $( '#copyToClipboard' ).click( function(r)
 {
    r.preventDefault();
    var clipboardText = "";
    clipboardText = $( '#txtctc' ).val(); 
    copyToClipboard( clipboardText );
    Swal.fire({position: 'top-end',icon: 'success',title: 'Le texte a bien été copié dans le presse papier!',showConfirmButton: false,timer: 1500});
 });

    function copyToClipboard(text) {

       var textArea = document.createElement( "textarea" );
       textArea.value = text;
       document.body.appendChild( textArea );       
       textArea.select();

       try {
          var successful = document.execCommand( 'copy' );
          var msg = successful ? 'successful' : 'unsuccessful';
          console.log('Copying text command was ' + msg);
       } catch (err) {
          console.log('Oops, unable to copy',err);
       }    
       document.body.removeChild( textArea );
    }
<?php } ?>
</script>
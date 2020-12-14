<?php require '../inc/config.php';

if (!isset($username) || $rank < 0) {Redirect("/");}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Habbui | Dashboard</title>
    <?php include('inc/_header.php') ?>

    <!--CONTENT HERE -->

    <div class="card card-custom">
        <div class="card-header">
            <h3 class="card-title">
                Upload d'images
            </h3>
        </div>
        <!--begin::Form-->
        <form class="form" action="uploadphoto.php" method="post" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group form-group-last">
                    <div class="alert alert-custom alert-default" role="alert">
                        <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                        <div class="alert-text">
                            Sur cette page il est possible d'upload des images facilement pour l'équipe de Habbui.<br/>
                            <strong>Note:</strong> Seuls les formats .jpg, .jpeg, .jpeg, .gif, .png sont autorisés jusqu'à une taille maximale de 10 Mo. </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Importer une image :</label>
                    <div></div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="photo" id="fileUpload"/>
                        <label class="custom-file-label" for="customFile">Choisir un fichier</label>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" name="submit" class="btn btn-primary mr-2" value="Envoyer">
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </form>
        <!--end::Form-->
    </div>
    <!-- END CONTENT HERE -->

    <?php include('inc/_footer.php') ?>
    </body>

</html>
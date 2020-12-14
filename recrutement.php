<?php

require 'inc/config.php';
$page = "Recrutements";

if (!isset($_SESSION['name'])){
	Redirect("/");
	exit();
}

$page = "Moi";
$category = $_SESSION['name'];
$subcategory = "Recrutements";

?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Habbui.online</title>
		<?php include("inc/_headerprincipal.php"); ?>

        <!--CONTENT HERE -->
        <div class="container">
        <div class="flex-grow-1 p-20 pb-40 card-rounded flex-grow-1 bgi-no-repeat" style="background-color: #FFFFFF; background-position: calc(100% + 0.5rem) bottom; background-size: 50% auto; background-image: url(assets/media/svg/humans/custom-10.svg)">

<h2 class="text-black pb-5 font-weight-bolder">La page <?php echo $subcategory ?> est actuellement en Maintenance</h2>

<p class="text-black pb-5 font-size-h5">
    Reviens dans quelques jours pour voir cette nouvelle page <?php echo $subcategory ?>.
</p>

<a href="moi.php" class="btn btn-danger font-weight-bold font-size-h3 px-12 py-5">Retour à l'accueil</a>
</div>
</div>
        <!-- END CONTENT HERE -->

		<?php include("inc/_footerprincipal.php");?>
	</body>
</html>
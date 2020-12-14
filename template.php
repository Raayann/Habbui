<?php
require 'inc/config.php';

$page = "Moi";
$category = $_SESSION['name'];
$subcategory = "Mes informations";

if (!isset($username)){
	Redirect("/");
}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Habbui: <?=$page ?></title>
		<?php include("inc/_headerprincipal.php"); ?>

		<!--CONTENT HERE -->
		<div class="container">
			<div class="card">
				<div class="card-header">
				</div>	
			</div>
		</div>
        <!-- END CONTENT HERE -->

		<?php include("inc/_footerprincipal.php");?>
	</body>
</html>
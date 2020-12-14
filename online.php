<?php
require 'inc/config.php';

$page = "Equipe";
$category = "Communauté";
$subcategory = "L'Équipe Habbui";
?>



<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Habbui.online</title>
		<?php include("inc/_headerprincipal.php"); ?>

<?php $query = $bdd->query('SELECT id,username,figure FROM `users` INNER JOIN `messenger_friendships` ON `users`.`id` = `messenger_friendships`.`user_one_id` WHERE `messenger_friendships`.`user_two_id` = ? AND `users`.`online` = ?');
	$query->execute([$user->get('id'), "1"]);
	$fetch = $query->fetchAll();

                        if (count($fetch) < 1) { ?>
	
<?php include("inc/_footerprincipal.php");?>

    </body>
    
     </html>
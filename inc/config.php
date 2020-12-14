<?php
ini_set('display_errors', 1);
define( 'SCRIPT_DEBUG', true );
error_reporting(E_ALL);
@session_start();

date_default_timezone_set('Europe/Paris');

require 'pdo.php';
require 'functions.php';

// Redirection automatique HTTP ==> HTTPS
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
} 

// CONFIG SITE 
$sURL = "//www.habbui.online/"; // short url
$lien = "https://www.habbui.online"; // URL complete
$maintenance = "non"; // oui = activer

// ADMIN
$rankMinAdmin = "5"; // Rank Minimum pour accéder à l'administration du site

 
# <- Look ->
#Garçon
$configL1 = "lg-275-92.wa-2001-62.ea-1406-62.hd-190-1382.fa-1205-62.hr-3021-49-60.ch-3185-1190";
$configL2 = "sh-290-62.ch-9458024-95.hr-201402-31-31.ca-9320-62-62.hd-787588-1361.lg-2608796-78";
$configL3 = "sh-3016-1189.lg-275-92.ch-255-110.ea-741232702-62-62.hr-151832-1050.hd-190-3";
#Fille
$configL4 = "hr-987462909-37-37.hd-3100-1390.ch-660-73.sh-725-73.lg-50858737-1336";
$configL5 = "ha-987462891-63-63.ch-630-92.hr-987462867-1073.sh-905-63.hd-3106-4.he-987462840-92.lg-710-1208";
$configL6 = "sh-3016-1323.hd-600-10.he-3229-1305.ch-987462838-109.lg-3023-1189.fa-6147086-62.hr-3047335-45";
#<-! /Look ->


//Variable
$ip = $_SERVER['REMOTE_ADDR'];

# Nombre d'Inscrits req
$nbInscritreq = $bdd->query('SELECT id FROM users');
$nbInscrit = $nbInscritreq->rowCount();


// Récuperation des informations de l'utilisateur
if (isset($_SESSION['name'])) {
	$user = $_SESSION['name'];
 	$req = $bdd->prepare('SELECT * FROM users WHERE username = ? OR mail = ?');
  	$req->execute(array($user, $user));
  	$reqC = $req->rowCount();
	if ($reqC === 1) {
		$us 				= 			$req->fetch();
		$motto				= 			htmlspecialchars($us['motto']);
		$rank 				= 			intval($us['rank']);
		$genre 				= 			htmlspecialchars($us['gender']);
		$look 				= 			htmlspecialchars($us['look']);
		$username 			=			htmlspecialchars($us['username']);
		$id 				=			intval($us['id']);
		$credits			=			intval($us['credits']);
		$jetons				=			intval($us['jetons']);
		$gamepoints			=			intval($us['game_points']);
		$email 				=			htmlspecialchars($us['mail']);
		$fonction			=			htmlspecialchars($us['fonction']);
		$discordID 			=			intval($us['discord_id']);
		$discordUserTag 	=			htmlspecialchars($us['discord_usertag']);
		$discordToken		=			htmlspecialchars($us['discord_token']);
		$discordVerify		=			intval($us['discord_verify']);

		if ($discordVerify > 0) {
			  $discord = $discordUserTag;
		}
		else {
			$discord = "Non verifiée";
		}

    } else {
		@session_destroy();
		unset($_SESSION["name"]);
        echo "<div style='color:red;'>Une erreur interne, est intervenu.</div> Merci de cliquer <a href=''>ici</a>";
        exit;
	}
} else {
    $rank = 0;
    $id = 0;
}


// Maintenance
if($maintenance === "oui"){
	if(!isset($_SESSION['beta']) && $page !== "beta"){
		Redirect($lien.'/commingsoon/index.php');
		exit("Actuellement en maintenance");
	}
}

// Système de ban 
		$BanUsername = isset($username) ? $username : "";

		$sql = $bdd->prepare("SELECT * FROM bans WHERE value = ? OR value = ? ORDER BY id DESC LIMIT 1");
		$sql->execute(array($BanUsername, $ip));

		if ($sql->rowCount() > 0) {
			$b = $sql->fetch();

			$stamp_now = strtotime("now");
			$stamp_expire = $b['expire'];

			if($stamp_now < $stamp_expire){
				$expire = $b['expire'] > 0 ? "le ".date('d/m/Y', $b['expire'])." à ".date('H:i:s', $b['expire']) : "";
				$reason = strlen($b['reason']) > 1 ? htmlspecialchars($b['reason']) : "Aucune";
				$added_by = strlen($b['added_by']) > 1 ? htmlspecialchars($b['added_by']) : "Admin";
				$added_date = $b['added_date'] > 0 ? "le ".date('d/m/Y', $b['added_date'])." à ".date('H:i:s', $b['added_date']) : "";

				if(!isset($access) || $access !== "ban"){
					Redirect("/ban/");
				}
			}
		}


?>
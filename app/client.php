<?php
require '../inc/config.php'; 

if(!isset($us)){Redirect("/");}

$timeNow = strtotime("now");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Habbui: Hôtel</title>
		<link rel="icon" type="image/png" href="<?=$lien ?>/assets/media/logos/favicon.png" />
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="<?=$lien ?>/assets/js/app.js/client_flash.js?v=<?=$timeNow ?>" type="text/javascript"></script>
		
			<style>
				html, body {height:100%;overflow: hidden;margin:auto;border:none;}
                .max-h{max-height: 80px !important;}
           </style> 
	</head>

	<body style="background: black;">
		<div style="text-align: center;">
			<div id="client-ui">
				<div id="client" style='position:absolute; left:0; right:0; top:0; bottom:0; overflow:hidden; height:100%; width:100%;color: white;font-family: Roboto;'>
					<div style="position: absolute;left:0; right:0; top:10%; bottom:0;">
						<img class="max-h" src="<?=$lien ?>/assets/media/logos/logo_habbui.png"><br><br>
						<p style="color: #1BC5BD;">Pour pouvoir jouer à Habbui suivez ces étapes :</p><br/><br><br>
						<b>*WINDOWS / LINUX / MAC*<br/></b>
						<p style="color: #1BC5BD;">Merci de mettre la dernière version d'Adobe Flash Player en cliquant <a href="//get.adobe.com/flashplayer/?loc=f/" style="text-decoration: none;color: #6993FF;font-weight: bold;" target="_blank">ici<br/><img src="<?=$lien ?>/assets/media/img/flash.png" style="width: 256px;"></a></p><br><br>
						<b>*TABLETTE / TÉLÉPHONE*<br/></b>
						<p style="color: #1BC5BD;">- Installer l'application <b>Puffin</b> disponible sur le <b>Apple Store</b>, ou encore sur le <b>Play Store</b></p>
					</div>
				</div>

				<script type="text/javascript">
					var Client = new SWFObject("<?=$lien ?>/dcr/gordon/R_64/Habbui.swf", "client", "100%", "100%", "11.1.0");
					Client.addVariable("client.allow.cross.domain", "0"); 
					Client.addVariable("connection.info.host", "51.178.1.177");
					Client.addVariable("connection.info.port", "30010");
					Client.addVariable("site.url", "<?=$lien ?>");
					Client.addVariable("url.prefix", "<?=$lien ?>"); 
					Client.addVariable("client.reload.url", "<?=$lien ?>");
					Client.addVariable("client.fatal.error.url", "<?=$lien ?>");
					Client.addVariable("client.connection.failed.url", "<?=$lien ?>");
					Client.addVariable("external.variables.txt", "<?=$lien ?>/dcr/gamedata/vars.txt");
					Client.addVariable("external.texts.txt", "<?=$lien ?>/dcr/gamedata/texts.txt"); 
					Client.addVariable("productdata.load.url", "<?=$lien ?>/dcr/gamedata/productdata.txt"); 
					Client.addVariable("furnidata.load.url", "<?=$lien ?>/dcr/gamedata/furnidata.txt");
					Client.addVariable("use.sso.ticket", "1"); 
					Client.addVariable("sso.ticket", "<?php if($id > 0) { $base = ""; for($i = 1; $i <= 3; $i++): { $base = $base . rand(0,4545); $base = uniqid($base); } endfor; $base = $base . ""; $TU = $bdd->prepare('UPDATE users SET auth_ticket = ? WHERE id = ?'); $TU->execute(array($base, $id)); echo $base; } ?>");
					Client.addVariable("processlog.enabled", "0");
					Client.addVariable("client.starting", "Chargement...");
                    Client.addVariable("client.starting.revolving", "Nous faisons avancer la science/Chargement des messages amusants...Veuillez patienter./ça te dirait des frites avec ça ?/Suis le canard jaune./Le temps est juste une illusion./On est bientôt arrivés ?!/J'adore ton t-shirt./Regarde à gauche, regarde à droite, cligne des yeux deux fois et voilà !/Ce n'est pas toi, c'est moi./Chuut ! J'essaie de me concentrer là-haut./Chargement de l'univers pixélisé.");
					Client.addVariable("flash.client.url", "<?=$lien ?>/dcr/gordon/R_64/"); 
					Client.addVariable("flash.client.origin", "popup");
					Client.addVariable("has.identity", "0");
					Client.addVariable("nux.lobbies.enabled", "true");
					Client.addVariable("country_code", "FR");
					Client.addParam('base', "<?=$lien ?>/dcr/gordon/R_64/");
					Client.addParam('allowScriptAccess', 'always');
					Client.addParam('menu', false);
					Client.addParam('wmode', "opaque");
					Client.write('client');
					
					FlashExternalInterface.signoutUrl = "<?=$lien ?>/logout";
                </script>
                
			</div>
		</div>
		<div id=app></div>
	</body>
</html>
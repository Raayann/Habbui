<?php
require 'inc/config.php'; 

if(!isset($_SESSION['name'])){
    Redirect("/");
    exit();
}
$timeNow = strtotime("now");
$page = "client";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="turbolinks-cache-control" content="no-cache">
		<title>Habbui: Hôtel</title>
		<link rel="icon" type="image/png" href="assets/media/logos/favicon.png" />
		<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<style>
			html, body {height:100%;overflow: hidden;margin:auto;border:none;}
			/* .menu_hotel {
				background: #ffb900;
				width: 85px;
				height: 20px;
				padding: 18px;
				border: 1px solid #ffea00;
				font-size: 14px;
				float: left;
				font-weight: 100;
				display: block;
				white-space: nowrap;
				position:fixed;
				font-family: 'Raleway',sans-serif;
				border-radius: 5px;
				filter: alpha(opacity=90);
			} */

			.client__buttons {
				left: 12px;
				position: absolute;
				top: 12px;
				z-index: 630;
			}
			.client__buttons .client__fullscreen {
				padding-left: 6px;
				padding-right: 6px;
			}
			.client__buttons .client__close, .client__buttons button {
				line-height: 1.2;
				color: #000;
				font-size: 12px;
				border-style: solid;
				margin-bottom: 4px;
				text-transform: uppercase;
				text-align: center;
			}
			.client__buttons button {
				outline: none;
				cursor: pointer;
				box-shadow: 0 3px 0 1px rgba(0,0,0,.3);
				background-color: #dfb5fc;
				border-color: #4a4c95;
				padding: 6px 12px;
				display: block;
				border-radius: 5px;
				float: left;
			}
			.client__buttons .client__close, .client__buttons button {
				line-height: 1.2;
				text-align: center;
				color: #000;
				font-size: 12px;
				border-style: solid;
				margin-bottom: 4px;
				text-transform: uppercase;
			}
			.icon {
				display: inline-block;
				font-style: normal;
			}
			.client__fullscreen__icon {
				display: block;
			}
			.icon--fullscreen {
				background-image: url(https://images.habbo.com/habbo-web/america/fr/assets/images/sprite.56f427a4.png);
				background-position: -511px -447px;
				width: 15px;
				height: 14px;
			}
			.client__buttons .client__close {
				display: inline-block;
				background-color: #dfb5fc;
				border-color: #4a4c95;
				border-radius: 0 5px 5px 0;
				border-width: 2px 2px 2px 1px;
				filter: drop-shadow(-1px 4px 0 rgba(0, 0, 0, .3));
				box-shadow: none;
				position: relative;
				margin-left: 14px;
				padding: 5px 6px;
			}
			.client__buttons .client__close, .client__buttons button {
				line-height: 1.2;
				text-align: center;
				color: #000;
				font-size: 12px;
				border-style: solid;
				margin-bottom: 4px;
				text-transform: uppercase;
			}
			.client__buttons .client__close:before {
				border-width: 15px;
				top: -2px;
				border-color: transparent #4a4c95 transparent transparent;
				left: -31px;
			}
			.client__buttons .client__close:after, .client__buttons .client__close:before {
				content: '';
				position: absolute;
				display: block;
				border-style: solid;
			}

			.client__buttons .client__close:after {
				border-width: 13px;
				top: 0;
				border-color: transparent #dfb5fc transparent transparent;
				left: -26px;
			}
			.client__buttons .client__close:after, .client__buttons .client__close:before {
				content: '';
				position: absolute;
				display: block;
				border-style: solid;
			}
			.client__close__icon {
				float: left;
			}
			.icon--habbo {
				background-image: url(https://images.habbo.com/habbo-web/america/fr/assets/images/sprite.56f427a4.png);
				background-position: -511px -413px;
				width: 16px;
				height: 16px;
			}
			.client__close__expand {
				transition: width .15s ease-out;
				float: left;
				overflow: hidden;
			}
			.client__close__text {
				color: white;
				line-height: 16px;
				padding-left: 6px;
			}
			.client__buttons button:last-child, .client__buttons button:not(:first-child):not(:last-child) {
				border-bottom-left-radius: 0;
				border-top-left-radius: 0;
			}
           </style> 
	</head>

	<body style="background: black;">
		<iframe id="habbuicms" src="<?=$sURL?>/moi" marginheight="0" frameborder="0" scrolling="auto" allowtransparency="true" style="height:100%;width:100%;border:none;padding:0;margin:0;display:none;"></iframe>
		<iframe id="habbuihotel" src="<?=$sURL?>/app/client.php?hotel" marginheight="0" frameborder="0" scrolling="auto" allowtransparency="true" style="height:100%;width:100%;border:none;padding:0;margin:0;"></iframe>
		<div style="text-align: center;">
			<div id="client-ui">
			<div id="btnHotel" class="client__buttons">
				<button id="WebBtn" onclick="toggleHotel()" class="client__close"><i class="client__close__icon icon icon--habbo"></i><div class="client__close__expand" style="width: 0px;"><div class="client__close__text" translate="CLIENT_TO_WEB_BUTTON">Web</div></div></button>
				<button class="client__fullscreen" onclick="Fullscreen()" style="margin-left:3px;"><i class="client__fullscreen__icon icon icon--fullscreen"></i><i class="client__fullscreen__icon icon icon--fullscreen-back ng-hide"></i></button>
			</div>	
			<!--<div id="fullbtn" class="menu_hotel" style="margin-top: -40px;top:12px;left: 150px;" onclick="Fullscreen();"><div id="pleinecrantxt" style="margin-top:15px">Plein écran</div></div><div class="menu_hotel" style="margin-top: -40px;top:12px;left: 15px;" onclick="toggleHotel();"><div id="websitetxt" style="margin-top:15px">Web</div><button ngsf-toggle-fullscreen="" class="client__fullscreen" onclick="Fullscreen()" style="height: 30px;width: 33px;"><i show-if-fullscreen="false" class="client__fullscreen__icon icon icon--fullscreen"></i> <i show-if-fullscreen="" class="client__fullscreen__icon icon icon--fullscreen-back ng-hide"></i></button><i show-if-fullscreen="" class="client__fullscreen__icon icon icon--fullscreen-back ng-hide"></i></div> -->
			</div>
		</div>
	</body>
	<script type="text/javascript">
					$('#WebBtn').hover(function(){$( ".client__close__expand" ).animate({width: "33px"}, 50, function() {return false;});}).mouseleave(function(){$( ".client__close__expand" ).animate({width: "0px"}, 50, function() {return false;});});function toggleHotel(){var display = $("#habbuicms").css('display');if(display == "none"){$('#btnHotel').fadeOut(20);$('#habbuicms').fadeIn(1500);$('#fullbtn').fadeOut(200);$("#habbuihotel").css("visibility", "hidden");} else {$('#habbuicms').fadeOut(1500);$("#habbuihotel").css("visibility", "visible");$('#fullbtn').show();$('#btnHotel').show();}}function Fullscreen(){"Plein écran"==jQuery("#pleinecrantxt").text()?jQuery("#pleinecrantxt").text("Plein écran"):jQuery("#pleinecrantxt").text("Plein écran"),document.fullscreenElement||document.mozFullScreenElement||document.webkitFullscreenElement?document.cancelFullScreen?document.cancelFullScreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitCancelFullScreen&&document.webkitCancelFullScreen():document.documentElement.requestFullscreen?document.documentElement.requestFullscreen():document.documentElement.mozRequestFullScreen?document.documentElement.mozRequestFullScreen():document.documentElement.webkitRequestFullscreen&&document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT)}function makeFullScreen(a){a.requestFullscreen?a.requestFullscreen():a.msRequestFullscreen?a.msRequestFullscreen():a.mozRequestFullScreen?a.mozRequestFullScreen():a.webkitRequestFullscreen?a.webkitRequestFullscreen():console.log("Fullscreen API is not supported")};
	</script>
</html>

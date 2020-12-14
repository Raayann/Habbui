<?php include("database.php"); 

if(isset($_POST['emailsub']))
{
	if(!empty($_POST['emailsub']))
	{
	$emailsub = $_POST['emailsub'];
		$sql = "INSERT INTO cms_subscribe (emailaddress) VALUES (:emailadd)";
		$resultat = $bdd->prepare($sql);
		$resultat->execute(array('emailadd' => $emailsub)) or die(print_r($resultat->errorInfo(), TRUE));
		$resultat->closeCursor();
		
		$validated ="Ton adresse email a bien été ajoutée.";
	}
	else { $error1 = "Champs vides";
	}
}
##################
# HABBUI PROJECT #
##################
# Create by jaye's for Habbui Project.
# Update : 02/10/2020
##################

?>
<!DOCTYPE html>
<html class="no-js" lang="fr">
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Soon on your Screen</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.png"/>
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
	<!-- Ico Font CSS -->
	<link rel="stylesheet" href="css/icofont.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body class="bg-img body-bg">	
	<!-- Preloader Starts -->
	<div class="preloader-wrap">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!--/Preloader Ends -->

	<!-- main container starts -->
	<div class="bg-img color-blue main-container">

		<!-- Main Header Starts -->
		<header class="fixed fixed-top xs-no-positioning main-header">
			<div class="container-fluid">
				<div class="row clearfix">
					<div class="pull-right clearfix col-xs-6 exs-full-width">
						<div class="pull-right header-right">
							<ul class="list-inline social-icons">
								<li><a href="https://www.facebook.com/pg/Habbuicom-101194348256337" target="_blank"><i class="icofont icofont-social-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/habbui_com/" target="_blank"><i class="icofont icofont-social-instagram"></i></a></li>						</div>
					</div><!-- /end col- -->
				</div><!-- /end row -->
			</div><!-- /end container-fluid -->
		</header>
		<!-- /Main Header Ends -->

		<!-- Main Body Starts -->
		<div class="fixed fixed-middle xs-no-positioning main-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="tab-container">

							<ul class="pull-left tab-controller xs-no-positioning tab-style-two" role="tablist">
								<li role="presentation" class="active">
									<a href="#home" aria-controls="home" role="tab" data-toggle="tab">Accueil</a>
								</li>

								<li role="presentation">
									<a href="#about" aria-controls="about" role="tab" data-toggle="tab">A propos</a>
								</li>

								<li role="presentation">
									<a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">Contactez-nous</a>
								</li>

							</ul><!-- /tab controlls -->

							<div class="tab-content">

								<!-- Single tab content starts -->
								<div role="tabpanel" class="tab-pane fade in active text-center home-tab" id="home">
									<div class="tab-heading">
										<h1 class="primary-title">Habbui arrive!</h1>
										<p class="text-light">Habbui sera prochainement disponible sur vos écrans...</p>
									</div><!-- /end tab-heading -->

									<?php if(isset($error1)){ ?>
										<div class="alert alert-danger" role="alert"><?php echo $error1 ?></div>
									<?php } ?>

									<?php if(isset($validated)){ ?>
										<div class="alert alert-success" role="alert"><?php echo $validated ?></div>
									<?php } ?>

									<div class="tab-body">
										<div class="ptb-50 countdown-timer">
											<input type="hidden" id="count-down-date" name="count-down-date" value="17 Oct, 2020 22:00:00">
											<h2 class="expired-text hidden">Habbui est en maintenance</h2>
											<ul class="list-inline count-down-list" id="countdown-boxes">
												<li class="gray-bg-1" id="years"><span class="years"></span><span>Années</span></li>
												<li class="gray-bg-1" id="months"><span class="months"></span><span>Mois</span></li>
												<li class="gray-bg-1" id="days"><span class="days"></span><span>Jours</span></li>
												<li class="gray-bg-1" id="hours"><span class="hours"></span><span>Heures</span></li>
												<li class="gray-bg-1" id="minutes"><span class="minutes"></span><span>Minutes</span></li>
												<li class="gray-bg-1" id="seconds"><span class="seconds"></span><span>Secondes</span></li>
											</ul>
										</div><!-- /end countdown-timer -->

										<div class="subscribe-form">
											<h4>Soit au courant des nouveautés :</h4>
											<form method="POST" action="index.php" class="form-inline">
												<input type="email" name="emailsub" id="emailsub" class="form-control btn-rounded" placeholder="Adresse E-mail">
												<button type="submit" class="btn btn-cyan btn-round">S'inscrire</button>
											</form>											  
										</div><!-- /end subscribe-form -->
                                        <div class="subscribe-form">
											<h4>Et rejoins nous sur discord :</h4>
											<a href="https://discord.gg/VHKHVwk"><img style="width:100px;" src="https://habbui.online/commingsoon/img/discord.png"></img></a>	  
										</div><!-- /end subscribe-form -->
									</div><!-- /end tab-body -->
								</div>
								<!-- /Single tab content ends -->

								<!-- Single tab content starts -->
								<div role="tabpanel" class="tab-pane fade about-tab" id="about">
									<div class="tab-heading">
										<h2 class="primary-title">A propos</h2>
									</div><!-- /end tab-heading -->

									<div class="tab-body">
										<p>C’est simple, Habbui est un jeu virtuel où l’inscription est gratuite.</p>
										<p>Ton personnage pourra être à ton effigie ou bien arborer un look plus original.</p>
										<p>Laisse parler ta créativité en confectionnant des appartements haut en couleurs.</p> 
										<p>Mais ne t’inquiètes pas, tu ne seras pas tout seul. En participant aux nombreuses animations proposées par l’équipe, tu pourras parler à la communauté Habbui et ainsi te faire de nouveaux amis !</p>
									</div><!-- /end tab-body -->
								</div>
								<!-- /Single tab content ends -->

								<!-- Single tab content starts -->
								<div role="tabpanel" class="tab-pane fade text-center contact-tab" id="contact">
									<div class="tab-heading">
									<div class="alert alert-warning" role="alert">
									Le formulaire n'est pas encore opérationnel.
									</div>
									
										<h1 class="primary-title">Contactez-nous</h1>
										<p>Besoin d'informations? Une question? Une demande ?</p>
									</div><!-- /end tab-heading -->
																		<div class="tab-body">
										<div class="pt-70 contact-form">
											<form id="contact-form" action="index.html" class="clearfix">
												<!-- IF MAIL SENT SUCCESSFULLY -->
												<div class="success">Ton message message a bien été envoyé.</div>
												<!-- IF MAIL SENDING UNSUCCESSFULL
												-->
												<div class="error">Le nom et l'adresse e-mail doivent être valide et le message doit comporter plus d'un caractère..</div>
												<div class="pull-left form-field field-half-width">
													<input type="text" id="name" name="name" class="form-control" placeholder="Ton Nom">
													<i class="icofont icofont-user"></i>
												</div>
												<div class="pull-right form-field field-half-width">
													<input type="email" id="email_address" name="email" class="form-control" placeholder="Ton adresse e-mail">
													<i class="icofont icofont-envelope"></i>
												</div>
												<div class="pull-right form-field field-full-width">
													<textarea id="message" name="message" class="form-control" placeholder="Ton message"></textarea>
												</div>
												<button type="submit" id="submit" name="submit" class="btn btn-cyan btn-big">Envoyer</button>
											</form><!-- /end contact-form -->
										</div><!-- /end contact-form -->
									</div><!-- /end tab-body -->
								</div>
								<!-- /Single tab content ends -->

							</div><!-- /tab-content -->
						</div>
					</div><!-- /end col-md-12 -->
				</div><!-- /end row -->
			</div><!-- /end container-fluid -->
		</div>
		<!-- /Main Body Ends -->

	</div>
	<!-- /main container ends -->

	<!-- jQuery -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- scripts -->
	<script src="js/scripts.js"></script>
</body>
</html>

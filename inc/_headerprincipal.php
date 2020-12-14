<?php if(!isset($page)||!isset($sURL)||!isset($category)||!isset($username)){header('Location: /index');exit;} ?>
<base href="">
<meta charset="utf-8" />
<meta name="description" content="Updates and statistics" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
<link href="<?=$sURL?>/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
<link href="<?=$sURL?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<link href="<?=$sURL?>/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
<link href="<?=$sURL?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?=$sURL?>/assets/media/logos/favicon.png" />
<script src="http://sd-1.archive-host.com/membres/up/3347790973941088/snowstorm-min.js" type="text/javascript">

//<![CDATA[

snowStorm.snowColor = '#49BDF8'; // Choisissez la couleur des flocons.
snowStorm.flakesMaxActive = 100; // Indiquez le nombre maximal de flocons qui tombent sur l'écran en même temps.
snowStorm.followMouse = false; // Le vent ne suit pas les mouvements de la souris : la neige tombe dans un seul sens.  Effacez la ligne pour éviter cet effet.
snowStorm.useTwinkleEffect = true; // La neige scintille. Effacez la ligne pour arrêter le scintillement.

//]]></script>

</head>

<body id="kt_body" style="background-image: url(<?=$sURL?>/assets/media/bg/bg-21.jpg)"
	class="page-loading-enabled page-loading quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">

	<!--begin::Page loader-->
	<div class="bg-dark page-loader page-loader-logo">
		<img alt="Habbui" class="max-h-50px" src="<?=$sURL?>/assets/media/logos/H_Loader.png" />
		<div class="spinner spinner-white"></div>
	</div>

	<!--end::Page Loader-->

	<!--begin::Main-->

	<!--begin::Header Mobile-->
	<div id="kt_header_mobile" class="header-mobile">

		<!--begin::Logo-->
		<a href="index.html">
			<img alt="Logo" src="<?=$sURL?>/assets/media/logos/logo-letter-1.png" class="logo-default max-h-30px" />
		</a>

		<!--end::Logo-->

		<!--begin::Toolbar-->
		<div class="d-flex align-items-center">
			<button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
				<span></span>
			</button>
			<button class="btn btn-icon btn-hover-transparent-white p-0 ml-3" id="kt_header_mobile_topbar_toggle">
				<span class="svg-icon svg-icon-xl">

					<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
						height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<polygon points="0 0 24 0 24 24 0 24" />
							<path
								d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
								fill="#000000" fill-rule="nonzero" opacity="0.3" />
							<path
								d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
								fill="#000000" fill-rule="nonzero" />
						</g>
					</svg>

					<!--end::Svg Icon-->
				</span>
			</button>
		</div>

		<!--end::Toolbar-->
	</div>

	<!--end::Header Mobile-->

	<div class="d-flex flex-column flex-root">

		<!--begin::Page-->
		<div class="d-flex flex-row flex-column-fluid page">

			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">


				<!--begin::Header-->
				<div id="kt_header" class="header header-fixed">

					<!--begin::Container-->
					<div class="container d-flex align-items-stretch justify-content-between">

						<!--begin::Left-->
						<div class="d-flex align-items-stretch mr-3">

							<!--begin::Header Logo-->
							<div class="header-logo">
								<a href="moi.php">
									<img alt="Logo" src="<?=$sURL?>/assets/media/logos/logo_habbui.png"
										class="logo-default max-h-80px" /> </a>
							</div>

							<!--end::Header Logo-->

							<!--begin::Header Menu Wrapper-->
							<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">

								<!--begin::Header Menu-->
								<div id="kt_header_menu"
									class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">

									<!--begin::Header Nav-->
									<ul class="menu-nav">
										<li class="menu-item menu-item-submenu menu-item-rel"
											data-menu-toggle="click" aria-haspopup="true">
											<a href="#" class="menu-link menu-toggle">
												<span class="menu-text"><?=$username ?></span>
												<i class="menu-arrow"></i>
											</a>
											<?php if ($rank > 0) : ?>
											<div class="menu-submenu menu-submenu-classic menu-submenu-left">
												<ul class="menu-subnav">
													<li class="menu-item" aria-haspopup="true">
														<a href="moi" class="menu-link">
															<span class="menu-text">Mon avatar</span>
															<span class="menu-desc"></span>
														</a>
													</li>
												</ul>
												<ul class="menu-subnav">
													<li class="menu-item menu-item" aria-haspopup="true">
														<a href="parametres" class="menu-link">
															<span class="menu-text">Paramètres</span>
															<span class="menu-desc"></span>
														</a>
													</li>
												</ul>
											</div>
										<?php endif; ?>
										</li>
										<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click"
											aria-haspopup="true">
											<a class="menu-link menu-toggle">
												<span class="menu-text">Communauté</span>
												<span class="menu-desc"></span>
												<i class="menu-arrow"></i>
											</a>
											<div class="menu-submenu menu-submenu-classic menu-submenu-left">
												<ul class="menu-subnav">
													<li class="menu-item" aria-haspopup="true">
														<a href="news" class="menu-link">
															<span class="menu-text">Les nouveautés</span>
														</a>
													</li>
													<li class="menu-item" aria-haspopup="true">
														<a href="equipe" class="menu-link">
															<span class="menu-text">L'équipe</span>
														</a>
													</li>
												</ul>
											</div>
										</li>
										<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click"
											aria-haspopup="true">
											<a href="palmares" class="menu-link">
												<span class="menu-text">Palmarès</span>
												<span class="menu-desc"></span>
												<i class="menu-arrow"></i>
											</a>
										</li>
										<?php if($rank > 0): ?>
										<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click"
											aria-haspopup="true">
											<a href="boutique" class="menu-link">
												<span class="menu-text">Boutique</span>
												<span class="menu-desc"></span>
												<i class="menu-arrow"></i>
											</a>
										</li>
										<li class="menu-item menu-item-submenu" data-menu-toggle="click"
											aria-haspopup="true">
											<a href="recrutement" class="menu-link">
												<span class="menu-text">Recrutements</span>
												<span class="menu-desc"></span>
												<i class="menu-arrow"></i>
											</a>
										</li>
										<?php endif; ?>
										<?php if($rank >= $rankMinAdmin){  ?>
											<li class="menu-item menu-item-submenu">
												<a href="/dashboard/" class="menu-link">
													<span class="menu-text text-danger">Administration</span>
													<span class="menu-desc"></span>
													<i class="menu-arrow"></i>
												</a>
											</li>
											<?php } ?>
									</ul>

									<!--end::Header Nav-->
								</div>

								<!--end::Header Menu-->
							</div>

							<!--end::Header Menu Wrapper-->
						</div>

						<!--end::Left-->

						<!--begin::Topbar-->
						<div class="topbar">

							<!--end::Languages-->

							<!--begin::User-->
							<div class="dropdown">
								<!--begin::Toggle-->
								<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
									<div class="btn btn-icon btn-hover-transparent-white d-flex align-items-center btn-lg px-md-2 w-md-auto"
										id="kt_quick_user_toggle">
										<span
											class="text-white opacity-70 font-weight-bold font-size-base d-none d-md-inline mr-1">Bonjour
										</span>
										<span
											class="text-white opacity-90 font-weight-bolder font-size-base d-none d-md-inline mr-4"><?=$username ?></span>
											<?php if($rank > 0) :
											$req = $bdd->prepare('SELECT look FROM users WHERE username = ?'); 
											$req->execute(array($username));
											$avatar = $req->fetch();
											?>
										<img
											src="https://habbui.online/dcr/habbo-imaging/avatarimage.php?figure=<?php echo $avatar['look']; ?>&direction=3&size=n&action=std,crr=47&headonly=1" />
										<?php endif; ?>
									</div>
								</div>
								<!--end::Toggle-->
								<div
									class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
									<?php if($rank >0): ?>
										<ul class="navi navi-hover py-4">
											<li class="navi-item">
												<a href="parametres" class="navi-link">
													<span class="mr-3">
														<i class="fa fa-cog"></i>
													</span>
													<span class="navi-text">Paramètres</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="logout" class="navi-link">
													<span class="mr-3">
														<i class="fa fa-power-off text-danger"></i>
													</span>
													<span class="navi-text text-danger">Déconnexion</span>
												</a>
											</li>

										</ul>
									<?php else : ?>
										<a class="dropdown-item" href="index">SE CONNECTER</a>
									<?php endif; ?>
								</div>
							</div>

							<!--end::User-->
						</div>

						<!--end::Topbar-->
					</div>

					<!--end::Container-->
				</div>

				<!--end::Header-->
				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!--begin::Subheader-->
					<div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
						<div
							class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">

							<!--begin::Info-->
							<div class="d-flex align-items-center flex-wrap mr-1">

								<!--begin::Heading-->
								<div class="d-flex flex-column">

									<!--begin::Title-->
									<h2 class="text-white font-weight-bold my-2 mr-5"><?=$page ?></h2>

									<!--end::Title-->

									<!--begin::Breadcrumb-->
									<div class="d-flex align-items-center font-weight-bold my-2">

										<!--begin::Item-->
										<a href="/" class="opacity-75 hover-opacity-100">
											<i class="flaticon2-shelter text-white icon-1x"></i>
										</a>

										<!--end::Item-->

										<!--begin::Item-->
										<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
										<a href="<?php if(isset($urlcategory) && !empty($urlcategory)){echo $urlcategory;}else{echo "#";} ?>"
											class="text-white text-hover-white opacity-75 hover-opacity-100"><?=$category ?></a>

										<!--end::Item-->
										<?php if(isset($subcategory) && !empty($subcategory)){?>
										<!--begin::Item-->
										<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
										<a href=""
											class="text-white text-hover-white opacity-75 hover-opacity-100"><?=$subcategory ?></a>
										<!--end::Item-->
										<?php } ?>
									</div>

									<!--end::Breadcrumb-->
								</div>

								<!--end::Heading-->
							</div>

							<!--end::Info-->

							<!--begin::Toolbar-->
							<div class="d-flex align-items-center">

								<!--begin::Button-->
								<a <?php if($rank>0): ?>href="#hotel" onclick="Hotel()"<?php else: ?>href="index"<?php endif; ?> style="background: #00813e;font-size: 1.4em;text-align: center;text-shadow: 1px 1px 3px rgba(0,0,0,.3);color: #fff;" class="btn font-size-h6 px-10 py-4 mr-2">Rejoindre Habbui Hôtel</a>

								<!--end::Button-->

							</div>

							<!--end::Toolbar-->
						</div>
					</div>
					<!--end::Subheader-->



<?php if(!isset($page)||!isset($category)||!isset($username)){exit('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p><hr><address>Apache/2.4.46 (Win64) PHP/7.3.21 Server at beta.habbui.online Port 80</address></body></html>');} ?>
<base href="">
		<meta charset="utf-8" />
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.png" />
	</head>

	<body id="kt_body" style="background-image: url(assets/media/bg/bg-14.jpg)" class="page-loading-enabled page-loading quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">

	<!--begin::Page loader-->
	<div class="bg-dark page-loader page-loader-logo">
				<img alt="Habbui" class="max-h-50px" src="assets/media/logos/H_Loader.png" />
				<div class="spinner spinner-white"></div>
			</div>

	<!--end::Page Loader-->

	<!--begin::Main-->

	<!--begin::Header Mobile-->
	<div id="kt_header_mobile" class="header-mobile">

	<!--begin::Logo-->
	<a href="index.html">
		<img alt="Logo" src="assets/media/logos/logo-letter-1.png" class="logo-default max-h-30px" />
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
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
						<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
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
							<img alt="Logo" src="assets/media/logos/logo_habbui.png" class="logo-default max-h-80px" />									</a>
					</div>

					<!--end::Header Logo-->

				</div>

				<!--end::Left-->
			</div>

			<!--end::Container-->
			</div>

			<!--end::Header-->
			<!--begin::Content-->
		<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
			<!--begin::Subheader-->
			<div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">

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
											<a href="<?php if(isset($urlcategory) && !empty($urlcategory)){echo $urlcategory;}else{echo "#";} ?>" class="text-white text-hover-white opacity-75 hover-opacity-100"><?=$category ?></a>

											<!--end::Item-->
                                            <?php if(isset($subcategory) && !empty($subcategory)){?>  
											<!--begin::Item-->
											<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
											<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100"><?=$subcategory ?></a>
											<!--end::Item-->
											<?php } ?>
										</div>

										<!--end::Breadcrumb-->
									</div>

									<!--end::Heading-->
								</div>

								<!--end::Info-->
							</div>
						</div>
					<!--end::Subheader-->
					

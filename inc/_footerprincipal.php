					<!--end::Content-->
                    </div>
					
<!--begin::Footer-->
<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">

<!--begin::Container-->
<div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">

    <!--begin::Copyright-->
    <div class="text-dark order-2 order-md-1">
        <span class="text-muted font-weight-bold mr-2">2020©</span>
        <a href="https://habbui.online" class="text-dark-75 text-hover-primary">HABBUI CMS</a>
    </div>

    <!--end::Copyright-->

    <!--begin::Nav-->
    <div class="nav nav-dark order-1 order-md-2">
        <a href="palmaresdiscord"  class="nav-link pr-3 pl-0">Classement Discord</a>
        <a href="equipe" class="nav-link px-3">L'équipe</a>
        <a href="contact" class="nav-link pl-3 pr-0">Nous contacter</a>
        <a href="cgu" target="_blanck" class="nav-link pr-3">Conditions d'utilisation</a>
    </div>

    <!--end::Nav-->
</div>

<!--end::Container-->
</div>

<!--end::Footer-->
				</div>

				<!--end::Wrapper-->
			</div>

			<!--end::Page-->
		</div>

		<!--end::Main-->

        <script>
        	function Hotel(){
        		<?php if ($rank > 0 && $us['online'] === 0) { ?>
        			document.location.href = "/hotel";
        		<?php } else { ?>
        		var parent = window.parent.document;
				if (parent) {
					var checkUrl = parent.location.href; 
					var checkUrl = checkUrl.replace(/\/$/, "");
				
					hashUrl = checkUrl.substring (checkUrl.lastIndexOf( "/" )+1 );
					
					if (hashUrl === "hotel") {
						window.parent.toggleHotel();
					}
					else {
						document.location.href = "/hotel";
					}	
				} else {
					document.location.href = "/hotel";
				}
			<?php } ?>
        	}


			var KTAppSettings = {
				"breakpoints": {
					"sm": 576,
					"md": 768,
					"lg": 992,
					"xl": 1200,
					"xxl": 1200
				},
				"colors": {
					"theme": {
						"base": {
							"white": "#ffffff",
							"primary": "#6993FF",
							"secondary": "#E5EAEE",
							"success": "#1BC5BD",
							"info": "#8950FC",
							"warning": "#FFA800",
							"danger": "#F64E60",
							"light": "#F3F6F9",
							"dark": "#212121"
						},
						"light": {
							"white": "#ffffff",
							"primary": "#E1E9FF",
							"secondary": "#ECF0F3",
							"success": "#C9F7F5",
							"info": "#EEE5FF",
							"warning": "#FFF4DE",
							"danger": "#FFE2E5",
							"light": "#F3F6F9",
							"dark": "#D6D6E0"
						},
						"inverse": {
							"white": "#ffffff",
							"primary": "#ffffff",
							"secondary": "#212121",
							"success": "#ffffff",
							"info": "#ffffff",
							"warning": "#ffffff",
							"danger": "#ffffff",
							"light": "#464E5F",
							"dark": "#ffffff"
						}
					},
					"gray": {
						"gray-100": "#F3F6F9",
						"gray-200": "#ECF0F3",
						"gray-300": "#E5EAEE",
						"gray-400": "#D6D6E0",
						"gray-500": "#B5B5C3",
						"gray-600": "#80808F",
						"gray-700": "#464E5F",
						"gray-800": "#1B283F",
						"gray-900": "#212121"
					}
				},
				"font-family": "Poppins"
			};
		</script>
		<?php if (!isset($sURL)){$sURL = "";}?>
		<script src="<?=$sURL ?>/assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?=$sURL ?>/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="<?=$sURL ?>/assets/js/scripts.bundle.js"></script>
		<script src="<?=$sURL ?>/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="<?=$sURL ?>/assets/js/pages/widgets.js"></script>
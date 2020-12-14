<?php
require 'inc/config.php';


if (isset($us)){
	Redirect("/moi");
}

?><html lang="fr" >
    <!--begin::Head-->
    <head><base >
            <meta charset="utf-8">
            <meta name="turbolinks-cache-control" content="no-cache">
            <meta name="robots" content="index,follow,all" />
            <meta name="viewport" content="width=device-width,initial-scale=0.4">
            <meta name="keywords" content="Habbui, adow, habboz, habbo, habbo hotel, habbocity, habbo city, habbo alpha, habboalpha, habboo, rétro, rétro habbo, bobbalive, adohotel, bobbahotel, habbix, jeu en ligne, serveur habbo, communauté, avatar, jeu" />
            <meta name="description" content="Inscris-toi gratuitement dans le meilleur h&#xF4;tel habbo ! Tu pourras devenir c&#xE9;l&#xE8;bre, faire de nouvelles rencontre, tchater, construire, participer &#xE0; des jeux et bien plus..." />
            <meta name="Geography" content="France" />
            <meta name="country" content="France" />
            <meta hreflang="fr" name="Language" content="French" />
            <meta name="identifier-url" content="https://www.habbui.online/" />
            <meta name="Copyright" content="Habbui.com" />
            <meta name="language" content="fr-FR" />
            <meta name="category" content="Website">
            <meta name="reply-to" content="contact@habbui.online">
            <meta name="Author" content="@Rayan#9999 // @Jayes#1139" />
            <meta property="og:title" content="Habbui: Créez votre Habbui, décorez votre appartement ! Tchattez avec vos amis." />
            <meta property="og:description" content="Habbui est un jeu gratuit qui te permet de créer ton propre personnage et d'accéder à un monde où tu pourras y faire des milliers de rencontres. Des animations sont proposées tous les jours par notre équipe d'animateurs. Deviendras-tu le joueur le plus populaire de l'hôtel ?" />
            <meta property="og:site_name" content="Habbui" />
            <meta property="og:locale" content="fr_FR" />
            <meta property="og:url" content="https://www.habbui.online/" />
            <meta property="og:type" content="index" />
                        
            <title>Habbui: Entre dans un hôtel où tu deviendras célèbre !</title>
            
            <!--begin::Fonts-->
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        
            <!--end::Fonts-->


            <!--begin::Page Custom Styles(used by this page)-->
                <link href="assets/css/pages/login/login-2.css?v=7.0.6" rel="stylesheet" type="text/css"/>
            <!--end::Page Custom Styles-->

        <!--begin::Global Theme Styles(used by all pages)-->
                    <link href="assets/plugins/global/plugins.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
                    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
                    <link href="assets/css/style.bundle.css?v=7.0.6" rel="stylesheet" type="text/css"/>
                <!--end::Global Theme Styles-->

        <!--begin::Layout Themes(used by all pages)-->
                <!--end::Layout Themes-->

        <link rel="shortcut icon" href="assets/media/logos/favicon.png"/>

            </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body  id="kt_body" style="background-image: url(assets/media/img/habbui.png)"  class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading"  >

    	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Login-->
<div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
    <!--begin::Aside-->
    <div class="login-aside order-2 order-lg-1 d-flex flex-row-auto position-relative overflow-hidden">
        <!--begin: Aside Container-->
        <div class="d-flex flex-column-fluid flex-column justify-content-between py-9 px-7 py-lg-13 px-lg-35">
            <!--begin::Logo-->
            <a href="#" class="text-center pt-2">
                <img src="assets/media/logos/New_Logo_Habbui_07_12.png" class="max-h-75px" alt=""/>
            </a>
            <!--end::Logo-->

            <!--begin::Aside body-->
            <div class="d-flex flex-column-fluid flex-column flex-center">
                <!--begin::Signin-->
                <div class="login-form login-signin py-11">
                    <!--begin::Form-->
                    <form class="form" novalidate="novalidate"  id="kt_login_signin_form">
                        <!--begin::Title-->
                        <div class="text-center pb-8">
                            <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Connecte toi</h2>
                            <span class="text-muted font-weight-bold font-size-h4">Ou <a href="" class="text-primary font-weight-bolder" id="kt_login_signup">Inscris-toi</a></span>
                        </div>
                        <!--end::Title-->
                        <div id="msgL"></div>
                        <!--begin::Form group-->
                        <div class="form-group">
                            <label class="font-size-h6 font-weight-bolder text-dark">Nom d'utilisateur ou adresse email :</label>
                            <input id="login_username" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="text" name="username" autocomplete="off"/>
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group">
                            <div class="d-flex justify-content-between mt-n5">
                                <label class="font-size-h6 font-weight-bolder text-dark pt-5">Mot de passe :</label>

                                <a href="javascript:;" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5" id="kt_login_forgot">
            						Mot de passe oublié ?
            					</a>
                            </div>

                            <input id="login_password" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="password" name="password" autocomplete="off"/>
                        </div>
                        <!--end::Form group-->

                        <!--begin::Action-->
                        <div class="text-center pt-2">
                            <button id="kt_login_signin_submit" type="submit" name="send" class="btn btn-dark font-weight-bolder font-size-h6 px-8 py-4 my-3">Se connecter</button>
                        </div>
                        <!--end::Action-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Signin-->

                <!--begin::Signup-->
                <div class="login-form login-signup pt-11">
                    <!--begin::Form-->
                    <form class="form" novalidate="novalidate" id="kt_login_signup_form">
                        <!--begin::Title-->
                        <div class="text-center pb-8">
                            <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">S'enregistrer</h2>
                            <p class="text-muted font-weight-bold font-size-h4">Pour vous enregistrer, merci de remplir le formulaire suivant :</p>
                        </div>
                        <!--end::Title-->
                        <div id="msgR"></div>
                        <!--begin::Form group-->
                        <div class="form-group">
                            <input id="reg_username" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="text" placeholder="Nom d'utilisateur" name="fullname" autocomplete="off"/>
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group">
                            <input id="reg_email" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="email" placeholder="Adresse Email" name="email" autocomplete="off"/>
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group">
                            <input id="reg_password" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="password" placeholder="Mot de passe" name="password" autocomplete="off"/>
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group">
                            <input id="reg_repassword" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="password" placeholder="Confirmer le mot de passe" name="cpassword" autocomplete="off"/>
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group">
                            <label class="checkbox mb-0">
                                <input type="checkbox" name="agree"/>J'accepte les &nbsp;<a href="cgu.php"> CGU's</a>.
                                <span></span>
                            </label>
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
                            <button type="submit" id="kt_login_signup_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">S'enregistrer</button>
                            <button type="button" id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">Annuler</button>
                        </div>
                        <!--end::Form group-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Signup-->

                <!--begin::Forgot-->
                <div class="login-form login-forgot pt-11">
                    <!--begin::Form-->
                    <form class="form" novalidate="novalidate" id="kt_login_forgot_form">
                        <!--begin::Title-->
                        <div class="text-center pb-8">
                            <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Mot de passe oublié ?</h2>
                            <p class="text-muted font-weight-bold font-size-h4">Entrez votre adresse e-mail pour réinitialiser votre mot de passe.</p>
                        </div>
                        <!--end::Title-->

                        <!--begin::Form group-->
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="email" placeholder="Email" name="email" autocomplete="off"/>
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
                            <button type="submit" id="kt_login_forgot_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">Envoyer</button>
                            <button type="button" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">Annuler</button>
                        </div>
                        <!--end::Form group-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Forgot-->
            </div>
            <!--end::Aside body-->

            <!--begin: Aside footer for desktop-->
            
            <!--end: Aside footer for desktop-->
        </div>
        <!--end: Aside Container-->
    </div>
    <!--begin::Aside-->

    <!--begin::Content-->
    <div class="content order-1 order-lg-2 d-flex flex-column w-100 pb-0" style="background-color: #25b8ee;">
        <!--begin::Title-->
        <div class="d-flex flex-column justify-content-center text-center pt-lg-5 pt-md-5 pt-sm-5 px-lg-0 pt-5 px-7">
            <h3 class="display4 font-weight-bolder my-7 text-white" style="color: #986923;">Habbui.online</h3>
            <p class="font-weight-bolder font-size-h2-md font-size-lg text-light opacity-70">
            Habbui est une communauté virtuelle en ligne pixelisée
                <br/>
            Où tu pourras créer ton propre avatar, te faire des amis,<br /> Discuter, construire des jeux et y participer!
            </p>
        </div>
        <!--end::Title-->

        <!--begin::Image-->
        <div class="content-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(assets/media/img/habbui_index.png);width: 100%;height: 30%;"></div>
        <!--end::Image-->
    </div>
    <!--end::Content-->
</div>
<!--end::Login-->
	</div>
<!--end::Main-->


        <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
        <!--begin::Global Config(global config for global JS scripts)-->
        <script>
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
        <!--end::Global Config-->

    	<!--begin::Global Theme Bundle(used by all pages)-->
    	    	   <script src="assets/plugins/global/plugins.bundle.js?v=7.0.6"></script>
		    	   <script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
		    	   <script src="assets/js/scripts.bundle.js?v=7.0.6"></script>
				<!--end::Global Theme Bundle-->


                    <!--begin::Page Scripts(used by this page)-->
                        <script src="assets/js/pages/custom/login/login-general.js?v=7.0.6"></script>
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                        <script src="assets/js/app.js/login.js"></script>
                        <!--end::Page Scripts-->
            </body>
    <!--end::Body-->
</html>

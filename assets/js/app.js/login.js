$(document).ready(function () {
    $("#kt_login_signin_form").submit(function (e) {
        e.preventDefault(),
            $.post(
                "app/login.php",
                { username: $("#login_username").val(), password: $("#login_password").val() },
                function (e) {
                
                if(e === "ok"){
                    setTimeout(function () {
                        document.location.href = "/moi";
                    }, 2e3),
                    Swal.fire({position: 'top-end',icon: 'success',title: 'Connexion en cours ...',showConfirmButton: false,timer: 1500})
                } else {
                    Swal.fire({position: 'top-end',icon: 'error',title: e,showConfirmButton: false,timer: 1500})
                }
                                },
                "text"
            );
    }),
        $("#kt_login_signup_form").submit(function (e) {
            e.preventDefault(),
                $.post(
                    "app/register.php",
                    {
                        username: $("#reg_username").val(),
                        password: $("#reg_password").val(),
                        repassword: $("#reg_repassword").val(),
                        email: $("#reg_email").val(),
                        look: "lg-275-92.wa-2001-62.ea-1406-62.hd-190-1382.fa-1205-62.hr-3021-49-60.ch-3185-1190"// $("input:radio[name=look]:checked").val()
                    },
                    function (e) {

                    if(e === "ok"){
                            setTimeout(function () {
                                document.location.href = "/moi";
                            }, 2e3),
                            Swal.fire({position: 'top-end',icon: 'success',title: 'Connexion en cours ...',showConfirmButton: false,timer: 1500})
                        } else {
                            Swal.fire({position: 'top-end',icon: 'error',title: e,showConfirmButton: false,timer: 1500})
                        }

                    },
                    "text");


        });

        $("#kt_login_forgot_form").submit(function(e) {
            e.preventDefault();
            Swal.fire("Good job!", "You clicked the button!", "warning");
            Swal.fire({
                title: "Soon!",
                text: "Cette fonction a été desactivé, elle reviendra prochainement. ",
                icon: "warning"
            })
        });
});

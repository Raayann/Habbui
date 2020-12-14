        $("#password-change-form").submit(function (e) {
            e.preventDefault(),
                $.post(
                    "app/settings.php",
                    { exmdp: $("#oldpassword").val(), newmdp: $("#newpassword").val(), newmdp2: $("#newpassword2").val() },
                    function (e) {
                    
                    if(e === "ok"){
                        $("form")[0].reset();
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Votre mot de passe à bien été changé...',
                            showConfirmButton: false,
                            timer: 1500
                          })
                    } else {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: e,
                            showConfirmButton: false,
                            timer: 1500
                          })
                    }
                                    },
                    "text"
                );
        });

        $('#gotomailform').click(function(r) {
            r.preventDefault();
            $("#gotomailform").addClass('active');
            $("#gotomdpform").removeClass('active');
            $('#password-change-form').slideUp(650);
            $('#email-change-form').delay(600).fadeIn(700);

        });

        $('#gotomdpform').click(function(r) {
            r.preventDefault();
            $("#gotomdpform").addClass('active');
            $("#gotomailform").removeClass('active');
            $('#email-change-form').fadeOut(650);
            $('#password-change-form').delay(600).slideDown(700);

        });

        $('#verifydiscord').click(function(r) {
            r.preventDefault();
            var parent = window.parent.document;
                if (parent) {
                    var checkUrl = parent.location.href; 
                    var checkUrl = checkUrl.replace(/\/$/, "");
                
                    hashUrl = checkUrl.substring (checkUrl.lastIndexOf( "/" )+1 );
                    
                    if (hashUrl === "hotel") {
                        Swal.fire({position: 'top-end',icon: 'error',title: "Pour lier ton compte, tu dois être déconnecté(e) de l'Hôtel, déconnecte-toi puis réessaye !",showConfirmButton: false,timer: 1500})
                    }
                    else {
                        document.location.href = "/callback.php";
                    }   
                } else {
                    document.location.href = "/callback.php";
                }
        });
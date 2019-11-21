<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact - colocationsenior.fr</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/vendor/bootstrap/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/login.css">
    <!--===============================================================================================-->
</head>
<body>
<div class="limiter">

    <div class="container-login100" style="display:block">
    <div >
                <img src="/assets/img/logo/colocsenior_inline.png" width="30%">
                
            </div>
    
            
       <!--Section: Contact v.2-->
<section class="mb-4 mt-4">

<!--Section heading-->
<h2 class="h1-responsive font-weight-bold text-center my-4" style="display-block ;">Contactez nous</h2>
<!--Section description-->
<h6 class="h1-responsive font-weight-bold text-center my-4" style="display-block ;">
Avez-vous des questions ? S'il vous plaît n'hésitez pas à nous contacter directement. Notre équipe reviendra vers vous pour vous aider.</h2>

<div class="row">

    <!--Grid column-->
    <div class="container-fluid col-md-9 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="mail.php" method="POST">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Nom et prénom">
                        <label for="subject" class=""></label>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="email" name="email" class="form-control" placeholder="E-mail">
                        <label for="subject" class=""></label>
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Objet">
                        <label for="subject" class=""></label>
                    </div>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                    <div class="md-form">
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Message"></textarea>
                        <label for="message"></label>
                    </div>

                </div>
            </div>
            <!--Grid row-->
            

        </form>

        <div class="text-center text-md-left">
            <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
        </div>
        <div class="status"></div>
    </div>
    <!--Grid column-->

   

</div>

</section>
<!--Section: Contact v.2--> 
       
    </div>
</div>






<!--===============================================================================================-->
<script src="/assets/vendor/jquery/jquery.min.js"></script>
<!--===============================================================================================-->
<script src="/assets/vendor/popper.js/index.js"></script>
<script src="/assets/vendor/bootstrap/bootstrap.js"></script>
<!--===============================================================================================-->
<script src="/assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="/assets/vendor/sweetalert/main.js"></script>
<!--===============================================================================================-->
<script src="/assets/vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
<!--===============================================================================================-->
<script>
    function signupPopup(){
        Swal.fire(
            'Inscription effectuée!',
            'Votre inscription a été enregistrée. Pour continuer veuillez cliquer sur le lien présent dans votre boite email!',
            'success'
        )
    }
    function forgotPasswordPopup(){
        Swal.fire(
            'Nouveau mot de passe',
            'Un lien vous a été envoyé par email pour réinitialiser votre mot de passe !',
            'success'
        )
    }
</script>
<?php if(@$GLOBALS['view']['notif']['signup'] == 1){ ?>
    <script>
        Swal.fire(
            'Inscription effectuée!',
            'Votre inscription a été enregistrée. Pour continuer veuillez cliquer sur le lien présent dans votre boite email!',
            'success'
        )
    </script>
<?php } ?>

</body>
</html>


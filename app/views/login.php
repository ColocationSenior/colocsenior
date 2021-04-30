<!DOCTYPE html>
<html lang="en">
<head>
    <title>Connexion - colocationsenior.fr</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.ico" >
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
    <div class="container-login100">
        <div class="wrap-login100">
            <div style="text-align: center;margin-top:-100px;">
                <img src="/assets/img/logo/colocsenior_inline.png" width="30%">
            </div>
            <div class="login100-pic js-tilt" data-tilt>
                <img src="/assets/img/welcome.png" alt="IMG">
            </div>

            <form class="login100-form validate-form" action="/login/post" method="post">
					<span class="login100-form-title">
						Connexion
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="email" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="password" placeholder="Mot de passe">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Connexion
                    </button>
                </div>

                <div class="text-center p-t-22">
                <button type="button" class="btn btn-default btn-block" style="margin:auto;border-radius: 25px; border-color: green ;padding: 0px 0px 0px 0px;width:170px"><a href="/forgot-password">
                       Mot de passe oublié 
                    </a></button>
                </div>

                <div class="text-center p-t-20">
                <button class="btn btn-default btn-block" style="margin:auto;border-radius: 25px; border-color: green; padding: 0px 0px 0px 0px;width:170px"><a href="/signup">
                    Créer votre compte
                    </a></button>
                </div>
            </form>
        </div>
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
            'Inscription effectuée!',/*
            'Votre inscription a été enregistrée. Pour continuer veuillez cliquer sur le lien présent dans votre boite email!',*/
            'Votre inscription a été enregistrée, vous pouvez vous connecter !',
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
<?php if(@$GLOBALS['view']['notif']['activateAccount'] == 1){ ?>
    <script>
        Swal.fire(
            'Adresse email vérifiée !',
            'Votre adresse email a bien été vérifiée. Vous pouvez désormais vous connecter !',
            'success'
        )
    </script>
<?php } ?>
<?php if(@$GLOBALS['view']['notif']['activateAccount'] == 0){ ?>
    <script>
        Swal.fire(
            'Veuillez vérifier votre adresse email',
            'Adresse email non vérifiée. Veuillez cliquer sur le lien reçu par email pour activer votre compte.',
            'error'
        )
    </script>
<?php } ?>
<?php if(strlen($GLOBALS['view']['notif']['errorAccount']) > 0){ ?>
    <script>
        Swal.fire(
            'Une erreur est survenue',
            '<?=$GLOBALS['view']['notif']['errorAccount']?>',
            'error'
        )
    </script>
<?php } ?>
<?php if(strlen($GLOBALS['view']['notif']['success']) > 0){ ?>
    <script>
        Swal.fire(
            'Super !',
            '<?=$GLOBALS['view']['notif']['success']?>',
            'success'
        )
    </script>
<?php } ?>

</body>
</html>
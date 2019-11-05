<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inscription - colocationsenior.fr</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <!--<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>-->
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

            <form class="login100-form validate-form" method="post" action="/signup/post">
					<span class="login100-form-title">
						Inscription
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Un email valide est requis: ex@abc.xyz">
                    <input class="input100" type="email" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="prenom" placeholder="Prénom">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
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
                        S'inscrire
                    </button>
                </div>

                <div class="text-center p-t-136">
                    <a class="txt2" href="/login">
                        Se connecter
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
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
<script src="/assets/vendor/tilt/tilt.jquery.min.js"></script>
<!--===============================================================================================-->
<script src="/assets/vendor/sweetalert/main.js"></script>
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
<?php if($GLOBALS['view']['notif']['failed'] == 1){ ?>
    <script>
        Swal.fire(
            'Inscription incomplète',
            'Un ou plusieurs champs n\'ont pas été complété correctement',
            'error'
        )
    </script>
<?php } ?>
<?php if($GLOBALS['view']['notif']['failed'] == 2){ ?>
    <script>
        Swal.fire(
            'Inscription incomplète',
            'Vous avez saisie une adresse email déjà prise',
            'error'
        )
    </script>
<?php } ?>

</body>
</html>
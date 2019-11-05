<!DOCTYPE html>
<html lang="en">
<head>
    <title>Connexion - colocationsenior.fr</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <!--<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../public/assets/vendor/bootstrap/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../public/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../public/assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../public/assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../public/assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../public/assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="../../public/assets/css/login.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div style="text-align: center;margin-top:-100px;">
                <img src="../../public/assets/img/logo/colocsenior_inline.png" width="30%">
            </div>
            <div class="login100-pic js-tilt" data-tilt>
                <img src="../../public/assets/img/welcome.png" alt="IMG">
            </div>

            <form class="login100-form validate-form">
					<span class="login100-form-title">
						Réinitialiser votre mot de passe
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="password" name="email" placeholder="Nouveau mot de passe">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Retapez">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Réinitialiser
                    </button>
                </div>

                <div class="text-center p-t-136">
                    <a class="txt2" href="#">
                        Connexion
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="../../public/assets/vendor/jquery/jquery.min.js"></script>
<!--===============================================================================================-->
<script src="../../public/assets/vendor/popper.js/index.js"></script>
<script src="../../public/assets/vendor/bootstrap/bootstrap.js"></script>
<!--===============================================================================================-->
<script src="../../public/assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="../../public/assets/vendor/sweetalert/main.js"></script>
<!--===============================================================================================-->
<script src="../../public/assets/vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
<!--===============================================================================================-->

</body>
</html>
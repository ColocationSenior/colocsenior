<!DOCTYPE html>
<html lang="fr">

<head>
	<title>Colocationseniors.fr - contact</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/vendor/bootstrap/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/fonts/font-awesome-4.7.0/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/css/util_contact.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/contact.css">
	<!--===============================================================================================-->
    <style>
        .contact1{
            background: #ffb900;
        }
        .contact1-form-btn{
            background: #005E00;
        }
    </style>
</head>

<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="/assets/img/img-contact.png" alt="IMG">
			</div>

			<form class="contact1-form validate-form" id="contact-form" action="/contact/post" method="post">
				<span class="contact1-form-title">
					Envoyez un message ?? notre support
				</span>

				<div class="wrap-input1 validate-input" data-validate="Subject is required">
					<input class="input1" type="text" name="sujet" placeholder="Sujet">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate="Message is required">
					<textarea class="input1" name="message" placeholder="Message"></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn">
						<span class="row align-items-center">
							Envoyer
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>




	<!--===============================================================================================-->
	<script src="/assets/vendor/jquery/jquery.min.js"></script>
	<!--===============================================================================================-->
	<script src="/assets/vendor/bootstrap/popper.js"></script>
	<script src="/assets/vendor/bootstrap/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="/assets/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="/assets/vendor/sweetalert/main.js"></script>
	<!--===============================================================================================-->
	<script src="/assets/vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

	<!--===============================================================================================-->
	<script src="/assets/js/main_contact.js"></script>

	<?php
	if (@isset($isPost) ){
	if (!empty($_POST['sujet']) && !empty($_POST['message'])){
		if(@isset($_POST['sujet']) && @isset($_POST['message'])){ ?>
			<script>
				Swal.fire(
					'Merci !',
					'Votre message a bien ??t?? envoy??, nous vous repondrons dans les meilleurs d??lais.',
					'info'
				)
			</script>
	
		<?php 
		}
	 	} else {?>

			<script>
				Swal.fire(
					'D??sol??',
					'Votre message n\'a pas ??t?? envoy??.',
					'error'
				)
			</script>
		<?php }
	 } ?> 

</body>

</html>
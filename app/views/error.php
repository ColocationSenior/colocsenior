<?php
$GLOBALS['view']['title'] = "Erreur";
include('includes/header.php') ?>


<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="https://colorlib.com/etc/404/colorlib-error-404-10/css/style.css">


<style>
	body {
		background: whitesmoke;
	}

	.error-contain {

		height: 100%;
		width: 100%;
		margin: 200px auto 50px auto;
		transform: translate(0%, 0%);
		background: whitesmoke;
		border-radius: 10px;

	}

	.error-text {
		text-align: center;
		font-weight: bold;
		background-color: #FFFFFF;
	}

	.error-text p {
		font-family: montserrat, sans-serif;
		font-size: 22px;
		font-weight: 400;
		color: black;
		display: block;
		margin-bottom: 20px;
		margin: 0px 0px 20px;
	}

	.error-text h2 {
		font-family: montserrat, sans-serif;
		color: #000;
		font-size: 44px;
		font-weight: 700;
		text-transform: uppercase;
		margin-top: 40px;
		display: block;
		font-size: 2em;
		margin-block-start: 0.83em;
		margin-block-end: 0.83em;
		margin-inline-start: 20px;
		margin-inline-end: 20px;
		font-family: montserrat, sans-serif;
		color: #000;
		font-weight: 500;
		font-weight: bold;
	}

	.error-text a {
		font-family: montserrat, sans-serif;
		font-size: 14px;
		text-decoration: none;
		text-transform: uppercase;
		background: #0046d5;
		display: inline-block;
		padding: 15px 30px;
		border-radius: 40px;
		font-weight: 700;
	}
	
	.error-text p:nth-child(3) {
		font-family: montserrat, sans-serif;
		margin-top: 20px;
	}

	img {
		margin-top: 10px;
	}
	
</style>

<div class="col g-ml-45 g-ml-0--lg g-pb-65--md" style="background-color: #FFFFFF">
	<div class="g-pa-20">


		<div class="error-contain">
			<div class="error-text">

				<img src="../assets/img/Oops.png" alt="">
				<h2>404 - Page not found</h2>


				<p>
					The page you are looking for might have been removed <br> had its name changed or is temporarily
					unavailable.
				</p>
				<a href="/" style="color:white">Go To Homepage</a>

			</div>

		</div>



	</div>
</div>

<?php include('includes/footer.php') ?>

<script type="text/javascript">
	window["_gaUserPrefs"] = {
		ioo: function () {
			return true;
		}
	}
</script>

<script>
	var card = $(".error-contain");

	$(document).on("mousemove", function (e) {
		var ax = -($(window).innerWidth() / 2 - e.pageX) / 25;
		var ay = ($(window).innerHeight() / 2 - e.pageY) / 25;
		card.attr("style", "transform: rotateY(" + ax + "deg) rotateX(" + ay +
			"deg);-webkit-transform: rotateY(" + ax + "deg) rotateX(" + ay +
			"deg);-moz-transform: rotateY(" + ax + "deg) rotateX(" + ay + "deg)");
	});
</script>
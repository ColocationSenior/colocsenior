<?php
$GLOBALS['view']['title'] = "Erreur";
include('includes/header.php') ?>



<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="https://colorlib.com/etc/404/colorlib-error-404-10/css/style.css">




<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

<style>
   

    html[Attributes Style] {
        -webkit-locale: "en";
    }

    user agent stylesheet html {
        display: block;
        color: -internal-root-color;
    }

    #notfound {
        position: relative;
        height: 100vh;
    }

    .notfound .notfound-404 h1 {
        font-family: montserrat, sans-serif;
        font-size: 230px;
        margin: 0;
        font-weight: 900;
        position: absolute;
        left: 50%;
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%);
        background: url(https://colorlib.com/etc/404/colorlib-error-404-10/img/bg.jpg) no-repeat;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-size: cover;
        background-position: center;
    }

    #notfound .notfound {
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .notfound {
        max-width: 410px;
        width: 100%;
        text-align: center;
    }

    .notfound .notfound-404 {
        height: 280px;
        position: relative;
        z-index: -1;
    }

    .notfound h2 {
        font-family: montserrat, sans-serif;
        color: #000;
        font-size: 24px;
        font-weight: 700;
        text-transform: uppercase;
        margin-top: 10px;
    }

    h1 {
        display: block;
        font-size: 2em;
        margin-block-start: 0.67em;
        margin-block-end: 0.67em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        font-weight: bold;
    }

    h2 {
        display: block;
        font-size: 1.5em;
        margin-block-start: 0.83em;
        margin-block-end: 0.83em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        font-weight: bold;
    }

    .notfound p {
        font-family: montserrat, sans-serif;
        color: #000;
        font-size: 14px;
        font-weight: 400;
        margin-bottom: 20px;
        margin-top: 0;
    }

    p {
        display: block;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
    }

    .notfound a {
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
        text-decoration: none;
        text-transform: uppercase;
        background: #0046d5;
        display: inline-block;
        padding: 15px 30px;
        border-radius: 40px;
        color: white;
        font-weight: 700;
        -webkit-box-shadow: 0px 4px 15px -5px #0046d5;
        box-shadow: 0px 4px 15px -5px #0046d5;
    }

    a:-webkit-any-link {
        color: -webkit-link;
        cursor: pointer;
        text-decoration: underline;
    }
</style>

<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
    <div class="g-pa-20">

        <div id="notfound">
            <div class="notfound">
                <div class="notfound-404">
                    <h1>Oops!</h1>
                </div>
                <h2>404 - Page not found</h2>
                <p>The page you are looking for might have been removed had its name changed or is temporarily
                    unavailable.</p>
                <a href="/">Go To Homepage</a>
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

<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="text/javascript"></script>
<script type="text/javascript">
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<?php
$GLOBALS['view']['title'] = "Mes messages";
include('includes/header.php') ?>

<style>
    @import url(https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700);

    body {
        background: #edf2f4;
        perspective: 1000px;
        transform-style: preserve-3d;
        display: flex;
        height: 100vh;

    }

    .card {
        pointer-events: none;
        transform: translateZ(0);
        padding: 30px;
        background: white;
        border-radius: 5px;
        width: 30%;
        height: 30%;
        margin: 70px auto;
        transform-style: preserve-3d;
        backface-visibility: hidden;
        display: flex;
        box-shadow: 0 0 5px rgba(0, 0, 0, .4);
        position: relative;

        &:after {
            content: " ";
            position: absolute;
            width: 100%;
            height: 10px;
            border-radius: 50%;
            left: 0;
            bottom: -50px;
            box-shadow: 0 30px 20px rgba(0, 0, 0, .3);

        }

        .card-content {            
            padding: 10px auto 10px auto ;
            text-align: center;
            transform-style: preserve-3d;
            
        }

        h1 {
            
            transform: translateZ(100px);
        }

        p {
            transform: translateZ(50px);
            display: block;

            &.related {
                transform: translateZ(80px);
                font-style: italic;
            }
        }

        a {
            color: #69c6b8;
            pointer-events: auto;
        }
    }


    .card-content img {
        vertical-align: middle;
        border-style: none;
        width: 100%;
    }

    
</style>


<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
        <div class="g-pa-20" style="margin-top: 10px;">


        <div class="card">
            <div class="card-content" >
                <h1 style="color: #4285F4;">Fonctionnalité indisponible pour le moment</h1>
                <img style="margin-top: 50px;" src="/files/pictures/chat.svg" alt="">
            </div>
            
        </div>



        </div>
    </div>
 




<?php include('includes/footer.php') ?>

<script>
    var card = $(".card");

    $(document).on("mousemove", function (e) {
        var ax = -($(window).innerWidth() / 2 - e.pageX) / 25;
        var ay = ($(window).innerHeight() / 2 - e.pageY) / 25;
        card.attr("style", "transform: rotateY(" + ax + "deg) rotateX(" + ay +
            "deg);-webkit-transform: rotateY(" + ax + "deg) rotateX(" + ay +
            "deg);-moz-transform: rotateY(" + ax + "deg) rotateX(" + ay + "deg)");
    });
</script>
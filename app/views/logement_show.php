<?php
$GLOBALS['view']['title'] = $GLOBALS['view']['logement']['titleAnnonce'];
include('includes/header.php') ?>

<style>
    /* Style the Image Used to Trigger the Modal */
    #csImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    #csImg:hover {
        opacity: 0.7;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 99999;
        /* Sit on top */
        padding : 5%;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    /* Modal Content (Image) */
    .modal-content {
        margin: auto;
        display: block;
        width: auto;
        height: 100%;
        z-index : 9998;        
    }

    /* Caption of Modal Image (Image Text) - Same Width as the Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    /* Add Animation - Zoom in the Modal */
    .modal-content,
    #caption {
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    /* The Close Button */
    .close {
        position: absolute;
        margin-top: -10px;
        right: 15px;
        color: white;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
        z-index: 9999;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */

    @media only screen and (max-width: 900px) {
        .modal-content {
            width: 90%;
            height: auto;
        }
    }  

</style>

<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
    <div class="g-pa-20">
        <div class="row">
            <div class="col-12">
                <div class="h-100 g-brd-around g-rounded-4 g-pa-15">
                    <h1 class="g-font-weight-500 g-font-size-28 g-color-black g-mb-28" style="text-align:center;">
                        <?=$GLOBALS['view']['logement']['titleAnnonce']?></h1>
                    <div class="g-mt-28" style="text-align:center;">
                        <span>Publié par : <a
                                href="/organisation/show/<?=$GLOBALS['view']['logement']['idOrganisation']?>"><b><?=$GLOBALS['view']['logement']['nameOrganisation']?></b></a></span>
                        <span style="display:inline-block;width:20px;"></span>
                        <span>Le :
                            <b><?=date("d/m/Y", strtotime($GLOBALS['view']['logement']['createdAnnonce']));?></b></span>
                    </div>
                    <div class="container g-mt-28">
                        <div class="row g-mt-28">
                            <div class="d-flex justify-content-between">
                                <div class="p-2 bd-highlight"><img class="cssimg" id="csImg" class="p-2 bd-highlight"
                                        src="/files/pictures/<?=$GLOBALS['view']['logement']['firstPictureLogement']?>"
                                        style="max-width: 100%;"></div>
                                        <div class="p-2 bd-highlight"><img class="cssimg" id="csImg" class="p-2 bd-highlight"
                                            src="/files/pictures/<?=$GLOBALS['view']['logement']['secondPictureLogement']?>"
                                            style="max-width: 100%;"></div>
                                    <div class="p-2 bd-highlight"><img class="cssimg" id="csImg" class="p-2 bd-highlight"
                                            src="/files/pictures/<?=$GLOBALS['view']['logement']['thirdPictureLogement']?>"
                                            style="max-width: 100%;"></div>
                                    <div class="p-2 bd-highlight"><img class="cssimg" id="csImg" class="p-2 bd-highlight"
                                            src="/files/pictures/<?=$GLOBALS['view']['logement']['fourthPictureLogement']?>"
                                            style="max-width: 100%;"></div>
                                <!-- The Modal -->
                                <div id="myModal" class="modal">
                                    <!-- The Close Button -->
                                    <span class="close">&times;</span>
                                    <!-- Modal Content (The Image) -->
                                    <img class="modal-content" id="modalimg">
                                    <!-- Modal Caption (Image Text) -->
                                    <div id="caption"></div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="container g-mt-28">
                            <div><?=$GLOBALS['view']['logement']['contentLogement']?></div>
                        </div>


                        <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <?php include('includes/footer.php') ?>

    <script>
        // Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var imgs = document.getElementsByClassName("cssimg");
var modalImg = document.getElementById("modalimg");
var captionText = document.getElementById("caption");
Array.prototype.forEach.call(imgs, function(el) {
    // Do stuff here
    el.onclick = function(){
  modal.style.display = "block";
  modalImg.src = el.src;
  captionText.innerHTML = el.alt;
}
    
});




// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
    </script>

    
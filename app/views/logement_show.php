<?php
$GLOBALS['view']['title'] = "";
include('includes/header.php') ?>

    <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
        <div class="g-pa-20">
            <div class="row">
                <div class="col-12">
                    <div class="h-100 g-brd-around g-rounded-4 g-pa-15">
                        <h1 class="g-font-weight-500 g-font-size-28 g-color-black g-mb-28" style="text-align:center;"><?=$GLOBALS['view']['logement']['titleAnnonce']?></h1>
                        <div class="g-mt-28" style="text-align:center;">
                            <span>Publié par : <a href="/organisation/show/<?=$GLOBALS['view']['logement']['idOrganisation']?>"><b><?=$GLOBALS['view']['logement']['nameOrganisation']?></b></a></span>
                            <span style="display:inline-block;width:20px;"></span>
                            <span>Le : <b><?=date("d/m/Y", strtotime($GLOBALS['view']['logement']['createdAnnonce']));?></b></span>
                        </div>
                        <div class="container g-mt-28">
                        <div class="row g-mt-28">
                            <div class="d-flex justify-content-between">
                                <div class="p-2 bd-highlight"><img class="p-2 bd-highlight" src="/files/pictures/<?=$GLOBALS['view']['logement']['firstPictureLogement']?>" style="max-width: 100%;"></div>
                                <div class="p-2 bd-highlight"><img class="p-2 bd-highlight" src="/files/pictures/<?=$GLOBALS['view']['logement']['secondPictureLogement']?>" style="max-width: 100%;"></div>
                                <div class="p-2 bd-highlight"><img class="p-2 bd-highlight" src="/files/pictures/<?=$GLOBALS['view']['logement']['thirdPictureLogement']?>" style="max-width: 100%;"></div>
                                <div class="p-2 bd-highlight"><img class="p-2 bd-highlight" src="/files/pictures/<?=$GLOBALS['view']['logement']['fourthPictureLogement']?>" style="max-width: 100%;"></div>                                                           
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
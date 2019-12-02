<?php
$GLOBALS['view']['title'] = "Services";
include('includes/header.php') ?>

<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
    <div class="g-pa-20">        
        <div class="row">
        <?php foreach($GLOBALS['view']['annonces'] as $annonce){ ?>
            <div class="col-xl-3 col-md-6 g-mb-30">
                <div class="card g-brd-gray-light-v7 rounded">
                    <header class="card-header g-bg-transparent g-brd-bottom-none g-pa-20 g-pa-30--sm">
                        <h3 class="g-font-weight-300 g-font-size-20 g-color-black g-mb-15">
                        <?php if(strlen($annonce['titleAnnonce']) > 43) {
                              echo substr($annonce['titleAnnonce'] ,0,44) . ". . .";
                            }else{
                                echo $annonce['titleAnnonce'];
                            }
                          ?>
                        </h3>
                    </header>
                    <hr class="d-flex g-brd-gray-light-v7 g-mx-20 g-mx-30--sm my-0">
                    <div class="card-block g-px-20 g-px-30--sm g-py-15 g-py-20--sm" style="height:208px;overflow:hidden;background:url('/files/pictures/<?=$annonce['coverAnnonce']?>') center center;background-size:cover;">
                        
                        
                    </div>
                    <section class="row no-gutters g-brd-top g-brd-gray-light-v4">
                        <div class="col-12 g-brd-left--md g-brd-gray-light-v4 g-py-10 g-py-10--md" style="text-align:center;">
                            <span class="g-font-weight-300 g-color-gray-dark-v6">Publié par</span>
                            <strong class="d-block g-font-weight-500 g-font-size-16 g-color-black"><?=$annonce['nameOrganisation']?></strong>
                        </div>
                    </section>
                    <section class="row no-gutters g-brd-top g-brd-gray-light-v4">
                        <div class="col-8 g-brd-left--md g-brd-gray-light-v4 g-py-10 g-py-10--md" style="text-align:center;">
                            <span class="g-font-weight-300 g-color-gray-dark-v6">Ville</span>
                            <strong class="d-block g-font-weight-500 g-font-size-16 g-color-black"><?=$annonce['cityAnnonce']?></strong>
                        </div>
                        <div class="col-4 g-brd-left--md g-brd-gray-light-v4 g-py-10 g-py-10--md" style="text-align:center;">
                            <strong class="d-block g-font-weight-500 g-font-size-16 g-color-black"><?=date("d/m", strtotime($annonce['createdAnnonce']));?></strong>
                            <span class="g-font-weight-300 g-color-gray-dark-v6"><?=date("Y", strtotime($annonce['createdAnnonce']));?></span>
                        </div>
                    </section>
                    <hr class="d-flex g-brd-gray-light-v7 my-0">
                    <div>
                        <a class="d-flex align-items-center u-link-v5 g-parent g-py-15" style="display:flex;justify-content:center;" href="/service/show/<?=$annonce['idService']?>">
                            <span class="g-font-size-18 g-color-gray-light-v6 g-color-primary--parent-hover g-color-primary--parent-active g-mr-5">
                                <i class="hs-admin-arrow-circle-right"></i>
                            </span>
                            <span class="g-color-gray-dark-v6 g-font-size-15 g-color-primary--parent-hover g-color-primary--parent-active">Voir</span>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
            
        </div>

        <?php include('includes/footer.php') ?>
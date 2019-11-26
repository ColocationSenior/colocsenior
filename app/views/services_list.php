<?php
$GLOBALS['view']['title'] = "Services";
include('includes/header.php') ?>

<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
    <div class="g-pa-20">        
        <div class="row">
            <?php foreach($GLOBALS['view']['services'] as $service){ ?>
                <div class="col-xl-3 col-md-6 g-mb-30">
                <div class="card g-brd-gray-light-v7 rounded">
                    <header class="card-header g-bg-transparent g-brd-bottom-none g-pa-20 g-pa-30--sm">
                        <h3 class="g-font-weight-300 g-font-size-20 g-color-black g-mb-15"></h3>
                    </header>
                    <hr class="d-flex g-brd-gray-light-v7 g-mx-20 g-mx-30--sm my-0">
                    <div class="card-block g-px-20 g-px-30--sm g-py-15 g-py-20--sm" style="height:208px;overflow:hidden;background:url('/files/pictures/<?=$service['coverService']?>') center center;background-size:cover;">
                        <?php if(@isset($annonce['idLogement'])){ ?>
                        <span class="u-tags-v1 text-center g-width-130 g-brd-around g-bg-red g-color-white g-rounded-50 g-py-4 g-px-15">Logement</span>
                        <?php } ?>
                        <?php if(@isset($annonce['idService'])){ ?>
                        <span class="u-tags-v1 text-center g-width-130 g-brd-around g-bg-lightblue-v3 g-color-white g-rounded-50 g-py-4 g-px-15">Service</span>
                        <?php } ?> 
                    </div>
                    <section class="row no-gutters g-brd-top g-brd-gray-light-v4">
                        <div class="col-12 g-brd-left--md g-brd-gray-light-v4 g-py-10 g-py-10--md" style="text-align:center;">
                            <span class="g-font-weight-300 g-color-gray-dark-v6">Publié par</span>
                            <strong class="d-block g-font-weight-500 g-font-size-16 g-color-black"></strong>
                        </div>
                    </section>
                    <section class="row no-gutters g-brd-top g-brd-gray-light-v4">
                        <div class="col-8 g-brd-left--md g-brd-gray-light-v4 g-py-10 g-py-10--md" style="text-align:center;">
                            <span class="g-font-weight-300 g-color-gray-dark-v6">Ville</span>
                            <strong class="d-block g-font-weight-500 g-font-size-16 g-color-black"><?=$service['cityService']?></strong>
                        </div>
                        <div class="col-4 g-brd-left--md g-brd-gray-light-v4 g-py-10 g-py-10--md" style="text-align:center;">
                            <strong class="d-block g-font-weight-500 g-font-size-16 g-color-black"></strong>
                            <span class="g-font-weight-300 g-color-gray-dark-v6"></span>
                        </div>
                    </section>
                    <hr class="d-flex g-brd-gray-light-v7 my-0">
                    <div>
                        <a class="d-flex align-items-center u-link-v5 g-parent g-py-15" style="display:flex;justify-content:center;" href="/service/show/<?=$service['idService']?>">
                            <span class="g-font-size-18 g-color-gray-light-v6 g-color-primary--parent-hover g-color-primary--parent-active g-mr-5">
                                <i class="hs-admin-arrow-circle-right"></i>
                            </span>
                            <span class="g-color-gray-dark-v6 g-font-size-15 g-color-primary--parent-hover g-color-primary--parent-active">Voir</span>
                        </a>
                    </div>
                </div>
            </div>


           <!-- <div class="col-xl-3 col-md-6 g-mb-30">
                <div class="card g-brd-gray-light-v7 rounded">
                    <header class="card-header g-bg-transparent g-brd-bottom-none g-pa-20 g-pa-30--sm">
                        <div class="card-block g-px-20 g-px-30--sm g-py-15 g-py-20--sm"
                            style="height:208px;overflow:hidden;background:url('/files/pictures/<?=$service['coverService']?>') center center;background-size:cover;">                            
                        </div>
                        <p><?=$service['contentService']?></p>
                    </header>

                    <hr class="d-flex g-brd-gray-light-v7 g-mx-20 g-mx-30--sm my-0">

                    <section class="row no-gutters g-brd-top g-brd-gray-light-v4"
                        style="display:flex;justify-content:center;">
                        <div class="col-12 g-brd-left--md g-brd-gray-light-v4 g-py-10 g-py-10--md"
                            style="text-align:center;">
                            <span class="g-font-weight-300 g-color-gray-dark-v6">Ville</span>
                            <strong
                                class="d-block g-font-weight-500 g-font-size-16 g-color-black"><?=$service['cityService']?></strong>
                        </div>
                    </section>

                    <hr class="d-flex g-brd-gray-light-v7 my-0">

                    <div>
                        <a class="d-flex align-items-center u-link-v5 g-parent g-py-15"
                            style="display:flex;justify-content:center;"
                            href="/annonce/show/<?=$service['idService']?>">
                            <span
                                class="g-font-size-18 g-color-gray-light-v6 g-color-primary--parent-hover g-color-primary--parent-active g-mr-5">
                                <i class="hs-admin-arrow-circle-right"></i>
                            </span>
                            <span
                                class="g-color-gray-dark-v6 g-font-size-15 g-color-primary--parent-hover g-color-primary--parent-active">Voir</span>
                        </a>
                    </div>
                </div>
            </div> -->
            <?php } ?>
            <div class="col-12 g-mb-15">
                <a class="js-fancybox d-flex align-items-center justify-content-center u-link-v5 g-parent g-brd-around g-brd-style-dashed g-brd-gray-light-v7 rounded g-pa-30"
                    href="#" data-src="#new-project-form" data-speed="350">
                    <span class="text-center">
                        <span
                            class="d-inline-block g-pos-rel g-width-50 g-height-50 g-font-size-default g-color-secondary g-brd-around g-brd-secondary rounded-circle g-mb-5">
                            <i class="hs-admin-announcement g-absolute-centered"></i>
                        </span>
                        <span
                            class="d-block g-font-weight-300 g-font-size-16 g-color-gray-dark-v6 g-color-secondary--parent-hover">Tous
                            les services</span>
                    </span>
                </a>
            </div>
        </div>

        <?php include('includes/footer.php') ?>
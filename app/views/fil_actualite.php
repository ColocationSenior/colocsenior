<?php
$GLOBALS['view']['title'] = "Fil d'actualité";
include('includes/header.php') ?>
<style>
</style>

<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
    <div class="g-pa-20"><!--
        <div class="row" style="justify-content: center;">
            <div class="col-10 card g-brd-gray-light-v7 rounded g-mb-40">

            </div>
        </div>-->
        <div style="text-align:center;">
            <h1 class="g-font-weight-500 g-font-size-30 mb-0" style="color:#21AD67">Bienvenue sur votre fil d'actualité</h1><br>
            <p style="font-weight:bold;">Retrouvez en avant première annonces de services et logements, les nouveaux inscrits ou encore les dernières actualités du site colocationsenior. </p>
        </div>
        <hr class="d-flex g-brd-gray-light-v7 g-my-20">
        <div class="media">
            <div class="d-flex align-self-center">
                <h1 class="g-font-weight-500 g-font-size-30 mb-0" style="color:#21AD67">Les dernières annonces</h1>
            </div>
        </div>
        <hr class="d-flex g-brd-gray-light-v7 g-my-20">
        <div class="row">
            <?php foreach($GLOBALS['view']['annonces'] as $annonce){ ?>
            <div class="col-xl-3 col-md-6 change-hover g-mb-30">
                <div class="card g-brd-gray-light-v7 change-hover rounded" style="border-width:4px">
                    <header class="card-header g-bg-transparent change-hover g-brd-bottom-none g-pa-20 g-pa-30--sm">
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
                        <?php if(@isset($annonce['idLogement'])){ ?>
                            <a href="/logements/list"><span class="u-tags-v1 text-center g-width-130 g-brd-around g-bg-red g-color-white g-rounded-50 g-py-4 g-px-15">Logement</span></a>
                        
                        <?php } ?>
                        <?php if(@isset($annonce['idService'])){ ?>
                            <a href="/services/list"><span class="u-tags-v1 text-center g-width-130 g-brd-around g-bg-lightblue-v3 g-color-white g-rounded-50 g-py-4 g-px-15">Service</span></a>
                        
                        <?php } ?>
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
                        <a class="d-flex align-items-center change-hover u-link-v5 g-parent g-py-15" style="display:flex;justify-content:center;" href="/annonce/show/<?=$annonce['idAnnonce']?>">
                            <span class="g-font-size-18 g-color-gray-light-v6 g-color-primary--parent-hover g-color-primary--parent-active g-mr-5">
                                <i class="hs-admin-arrow-circle-right"></i>
                            </span>
                            <span class="g-color-gray-dark-v6 g-font-size-15 g-color-primary--parent-hover g-color-primary--parent-active">Voir</span>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="col-12 g-mb-15">
                <a class="d-flex align-items-center justify-content-center u-link-v5 g-parent g-brd-around g-brd-style-dashed g-brd-gray-light-v7 rounded g-pa-30" href="/annonces/list" data-src="#new-project-form" data-speed="350">
                  <span class="text-center">
                  <span class="d-inline-block g-pos-rel g-width-50 g-height-50 g-font-size-default g-color-secondary g-brd-around g-brd-secondary rounded-circle g-mb-5">
                    <i class="hs-admin-announcement g-absolute-centered"></i>
                  </span>
                  <span class="d-block g-font-weight-300 g-font-size-16 g-color-gray-dark-v6 g-color-secondary--parent-hover">Toutes les annonces</span>
                  </span>
                </a>
            </div>
        </div>

        <!-- User section -->
        <hr class="d-flex  g-my-20" style="border: 1px solid #375D81;border-radius: 2px;">
        <div class="media">
            <div class="d-flex align-self-center">
                <h1 class="g-font-weight-500 g-font-size-30 mb-0" style="color:#21AD67">Découvrez de nouvelles personnes</h1>
            </div>
        </div>
        <hr class="d-flex g-brd-gray-light-v7 g-my-20">
        <div class="row">
        <?php foreach($GLOBALS['view']['users'] as $user){ ?>
            <!-- User Card -->
            <div class="col-xl-3 col-md-6">
                <div class="card card-profil g-brd-gray-light-v7 text-center g-pt-40 g-pt-60--md g-mb-30" style="border-width:4px">
                    <a href="/profil/show/<?=$user['idUser']?>">
                        <header class="g-mb-30">
                            <img class="img-fluid rounded-circle g-width-125 g-height-125 g-mb-14" src="/files/profile/<?=$user['pictureUser']?>" alt="Image description">
                            <h3 class="g-font-weight-300 g-font-size-22 g-color-black g-mb-2"><?=$user['firstNameUser']?> <?=$user['lastNameUser']?></h3>
                        </header>
                    </a>
                    <section class="row no-gutters g-brd-top g-brd-gray-light-v4">
                        <div class="city col-12 g-brd-left--md g-brd-gray-light-v4 g-py-10 g-py-10--md">
                            <strong class="d-block g-font-weight-500 g-font-size-16 g-color-black"><?=$user['cityUser']?></strong>
                            <span class="g-font-weight-300 g-color-gray-dark-v6">ville</span>
                        </div>
                    </section>
                </div>
            </div>
            <!-- End User Card -->
        <?php } ?>
            <div class="col-12 g-mb-15">
                <a class="d-flex align-items-center justify-content-center u-link-v5 g-parent g-brd-around g-brd-style-dashed g-brd-gray-light-v7 rounded g-pa-30" href="/profil/list" data-src="#new-project-form" data-speed="350">
                  <span class="text-center">
                  <span class="d-inline-block g-pos-rel g-width-50 g-height-50 g-font-size-default g-color-secondary g-brd-around g-brd-secondary rounded-circle g-mb-5">
                    <i class="hs-admin-user g-absolute-centered"></i>
                  </span>
                  <span class="d-block g-font-weight-300 g-font-size-16 g-color-gray-dark-v6 g-color-secondary--parent-hover">Voir plus de profils</span>
                  </span>
                </a>
            </div>
        </div>


        <!-- Blog section -->
        <hr class="d-flex  g-my-20" style="border: 1px solid #375D81;border-radius: 2px;">
        <div class="media">
            <div class="d-flex align-self-center">
                <h1 class="g-font-weight-500 g-font-size-30 mb-0" style="color:#21AD67">Les derniers articles</h1>
            </div>
        </div>
        <hr class="d-flex g-brd-gray-light-v7 g-my-20">
        <div class="row">
            <?php foreach($GLOBALS['view']['news'] as $new){ ?>
            <div class="col-xl-3 col-md-6 g-mb-30">
                <div class="card g-brd-gray-light-v7 rounded" style="border-width:4px">
                    <header class="card-header g-bg-transparent g-brd-bottom-none g-pa-20 g-pa-30--sm">
                        <h3 class="g-font-weight-300 g-font-size-20 g-color-black g-mb-15"><?=$new['titleNew']?></h3>
                    </header>
                    <section class="row no-gutters g-brd-top g-brd-gray-light-v4" style="margin-top:-20px;">
                        <div class="col-12 g-brd-left--md g-brd-gray-light-v4 g-py-10 g-py-10--md" style="text-align:center;">
                            <span class="g-font-weight-300 g-color-gray-dark-v6">Publié par</span>
                            <strong class="d-block g-font-weight-500 g-font-size-16 g-color-black"><?=$new['nameOrganisation']?></strong>
                        </div>
                    </section>
                    <div class="card-block g-px-20 g-px-30--sm g-py-15 g-py-20--sm" style="height:208px;overflow:hidden;background:url('/files/pictures/<?=$new['coverNew']?>') center center;background-size:cover;">
                    </div>
                    <div>
                        <a class="d-flex align-items-center u-link-v5 g-parent g-py-15" style="display:flex;justify-content:center;" href="/article/view/<?=$new['idNew']?>">
                            <span class="g-font-size-18 g-color-gray-light-v6 g-color-primary--parent-hover g-color-primary--parent-active g-mr-5">
                                <i class="hs-admin-arrow-circle-right"></i>
                            </span>
                            <span class="g-color-gray-dark-v6 g-font-size-15 g-color-primary--parent-hover g-color-primary--parent-active">Lire</span>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="col-12 g-mb-15">
                <a class="d-flex align-items-center justify-content-center u-link-v5 g-parent g-brd-around g-brd-style-dashed g-brd-gray-light-v7 rounded g-pa-30" href="/articles/list" data-src="#new-project-form" data-speed="350">
                  <span class="text-center">
                  <span class="d-inline-block g-pos-rel g-width-50 g-height-50 g-font-size-default g-color-secondary g-brd-around g-brd-secondary rounded-circle g-mb-5">
                    <i class="hs-admin-zoom-in g-absolute-centered"></i>
                  </span>
                  <span class="d-block g-font-weight-300 g-font-size-16 g-color-gray-dark-v6 g-color-secondary--parent-hover">Accéder au blog</span>
                  </span>
                </a>
            </div>
        </div>
    </div>

<?php include('includes/footer.php') ?>

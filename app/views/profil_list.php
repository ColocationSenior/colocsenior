<?php
$GLOBALS['view']['title'] = "Mon profil";
include('includes/header.php') ?>

    <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
        <div class="g-pa-20">
            <form method="post" action="/profil/list">
                <div class="media flex-wrap g-mb-30">

                    <div class="d-flex align-self-center align-items-center g-ml-10 g-ml-20--md g-ml-40--lg">
                        <div class="input-group g-pos-rel g-max-width-380 float-right">
                            <input class="form-control h-100 g-font-size-default g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-20 g-pl-20 g-pr-50 g-py-10" name="search" type="text" placeholder="Chercher par Nom">
                        </div>
                    </div>
                    <!--<div class="d-flex align-self-center align-items-center g-ml-10 g-ml-20--md g-ml-40--lg">
                        <span class="g-hidden-sm-down g-color-gray-dark-v6 g-mr-12">À la recherche :</span>

                        <div class="u-select--v1 g-pr-20">
                            <select class="js-select u-select--v1-select w-100" style="display: none;">
                                <option value="null">Par défaut</option>
                                <option value="colocataire">Colocataire</option>
                                <option value="colocation">Colocation</option>
                            </select>
                            <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto"></i>
                        </div>
                    </div>
                    <div class="d-flex align-self-center align-items-center g-ml-10 g-ml-20--md g-ml-40--lg">
                        <span class="g-hidden-sm-down g-color-gray-dark-v6 g-mr-12">Type de colocation :</span>

                        <div class="u-select--v1 g-pr-20">
                            <select class="js-select u-select--v1-select w-100" style="display: none;">
                                <option value="null">Par défaut</option>
                                <option value="colocataire">Intergénérationnelle</option>
                                <option value="colocation">Entre plus de 50 ans</option>
                            </select>
                            <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto"></i>
                        </div>
                    </div>-->
                    <div class="d-flex align-self-center align-items-center g-ml-10 g-ml-20--md g-ml-40--lg">
                        <span class="g-hidden-sm-down g-color-gray-dark-v6 g-mr-12">Sexe :</span>

                        <div class="u-select--v1 g-pr-20">
                            <select class="js-select u-select--v1-select w-100" name="gender" style="display: none;">
                                <option value="">Peu importe</option>
                                <option value="1">Homme</option>
                                <option value="2">Femme</option>
                            </select>
                            <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto"></i>
                        </div>
                    </div>

                    <div class="d-flex g-hidden-md-up w-100"></div>

                    <div class="media-body align-self-center g-mt-10 g-mt-0--md">
                        <div class="g-pos-rel g-max-width-380 float-right g-mr-40">
                            <button class="btn btn-md btn-large--md u-btn-secondary g-width-160--md g-font-size-12 g-font-size-default--md g-mt-10" type="submit"><i class="hs-admin-search"></i> Filtrer</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row g-pa-20">
        <?php foreach($GLOBALS['view']['users'] as $user){ ?>
            <!-- User Card -->
            <div class="col-xl-3 col-md-6">
                <div class="card g-brd-gray-light-v7 text-center g-pt-40 g-pt-60--md g-mb-30">
                    <a href="/profil/show/<?=$user['idUser']?>">
                        <header class="g-mb-30">
                            <img class="img-fluid rounded-circle g-width-125 g-height-125 g-mb-14" src="/files/profile/<?=$user['pictureUser']?>" alt="Image description">
                            <h3 class="g-font-weight-300 g-font-size-22 g-color-black g-mb-2"><?=$user['firstNameUser']?> <?=$user['lastNameUser']?></h3>
                        </header>
                    </a>
                    <section class="row no-gutters g-brd-top g-brd-gray-light-v4">
                        <div class="col-12 g-brd-left--md g-brd-gray-light-v4 g-py-10 g-py-10--md">
                            <strong class="d-block g-font-weight-500 g-font-size-16 g-color-black"><?=$user['cityUser']?></strong>
                            <span class="g-font-weight-300 g-color-gray-dark-v6">ville</span>
                        </div>
                    </section>
                </div>
            </div>
            <!-- End User Card -->
        <?php } ?>
        </div>
    </div>

<?php include('includes/footer.php') ?>
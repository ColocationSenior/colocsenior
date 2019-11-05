<?php
$GLOBALS['view']['title'] = "Mon profil";
include('includes/header.php') ?>

    <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
        <div class="g-pa-20">
            <div class="row">
                <?php include('includes/organisation_side.php') ?>
                <div class="col-md-9">
                    <div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
                        <!--<header>
                            <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Informations</h2>
                        </header>

                        <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">-->


                        <div class="g-mb-40">
                            <h4 class="g-font-weight-300 g-font-size-18 g-font-size-22--md g-color-black g-mb-10">Présentation de <?=$GLOBALS['view']['organisation']['nameOrganisation']?></h4>
                            <p class="g-font-weight-300 g-color-gray-dark-v6 mb-0"><?=$GLOBALS['view']['organisation']['bioOrganisation']?></p>
                        </div>

                        <div class="row g-mb-40">
                            <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                <label class="mb-0" for="#firstName">Email</label>
                            </div>

                            <div class="col-md-9 align-self-center">
                                <p class="g-font-weight-300 g-color-gray-dark-v6 mb-0"><?=$GLOBALS['view']['organisation']['emailOrganisation']?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php') ?>
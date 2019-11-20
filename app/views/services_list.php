<?php
$GLOBALS['view']['title'] = "Services";
include('includes/header.php') ?>

<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
        <div class="g-pa-20">
            <form method="post" action="/profil/list">
                <div class="media flex-wrap g-mb-30">

                   <!-- <div class="d-flex align-self-center align-items-center g-ml-10 g-ml-20--md g-ml-40--lg">
                        <div class="input-group g-pos-rel g-max-width-380 float-right">
                            <input class="form-control h-100 g-font-size-default g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-20 g-pl-20 g-pr-50 g-py-10" name="search" type="text" placeholder="Chercher par Nom">
                        </div>
                    </div>
                    <div class="row g-pa-20">-->
        <?php foreach($GLOBALS['view']['services'] as $service){ ?>
            <!-- Service Card -->
            <div class="col-xl-3 col-md-6">
                <div class="card g-brd-gray-light-v7 text-center g-pt-40 g-pt-60--md g-mb-30">
                    <a href="/services/list/<?=$service['idService']?>">
                        <header class="g-mb-30">
                            <img class="img-fluid rounded-circle g-width-125 g-height-125 g-mb-14" src="<?=$service['coverService']?>" > 
                            <span><b><?= $service['contentService'] ?></b></span>                         
                        </header>
                    </a>
                    <section class="row no-gutters g-brd-top g-brd-gray-light-v4">
                        <div class="col-12 g-brd-left--md g-brd-gray-light-v4 g-py-10 g-py-10--md">
                            <strong class="d-block g-font-weight-500 g-font-size-16 g-color-black"><?=$service['cityService']?></strong>
                            <span class="g-font-weight-300 g-color-gray-dark-v6">ville</span>
                        </div>
                    </section>
                </div>
            </div>
            <!-- End Service Card -->
        <?php } ?>
        </div>

<?php include('includes/footer.php') ?>
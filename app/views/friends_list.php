<?php
$GLOBALS['view']['title'] = "Mon profil";
include('includes/header.php') ?>

    <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
        <div class="row g-pa-20">
        <?php foreach($GLOBALS['view']['users'] as $user){ ?>
            <!-- User Card -->
            <div class="col-xl-3 col-md-6">
                <div class="card g-brd-gray-light-v7 text-center g-pt-40 g-pt-60--md g-mb-30" style="border-width:4px">
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
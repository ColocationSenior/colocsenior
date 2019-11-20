<?php
$GLOBALS['view']['title'] = "Logements";
include('includes/header.php') ?>

<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
        <div class="g-pa-20">
            <form method="post" action="/logements/list">
                <div class="media flex-wrap g-mb-30">

                   
        <?php foreach($GLOBALS['view']['logements'] as $logement){ ?>
            <!-- Logement Card -->
            <div class="col-xl-3 col-md-6">
                <div class="card g-brd-gray-light-v7 text-center g-pt-40 g-pt-60--md g-mb-30">
                    <a href="/logements/list/<?=$logement['idLogement']?>">
                        <header class="g-mb-30">
                            <img class="img-fluid rounded-circle g-width-125 g-height-125 g-mb-14" src="<?=$logement['firstPictureLogement']?>" > 
                            <img class="img-fluid rounded-circle g-width-125 g-height-125 g-mb-14" src="<?=$logement['secondPictureLogement']?>" >
                            <img class="img-fluid rounded-circle g-width-125 g-height-125 g-mb-14" src="<?=$logement['thirdPictureLogement']?>" >
                            <img class="img-fluid rounded-circle g-width-125 g-height-125 g-mb-14" src="<?=$logement['fourthPictureLogement']?>" >
                            <p><?= $logement['contentLogement'] ?></p>                        
                        </header>
                    </a>                    
                </div>
            </div>
            <!-- End Logement Card -->
        <?php } ?>
        </div>

<?php include('includes/footer.php') ?>
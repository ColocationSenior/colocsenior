<?php
$GLOBALS['view']['title'] = "Profil";
include('includes/header.php') ?>

    <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
        <div class="g-pa-20">
            <div class="row">
                <?php include('includes/profil_side.php') ?>
                <div class="col-md-9">
                    <div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
                        <form class="js-validate" novalidate="novalidate">
                            <!--<header>
                                <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Informations</h2>
                            </header>

                            <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">-->


                            <div class="g-mb-40">
                                <h4 class="g-font-weight-300 g-font-size-18 g-font-size-22--md g-color-black g-mb-10">Ma présentation</h4>
                                <p class="g-font-weight-300 g-color-gray-dark-v6 mb-0"><?=$GLOBALS['view']['user']['bioUser']?></p>
                            </div>

                            <div class="row g-mb-40">
                                <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                    <label class="mb-0" for="#firstName">Mes Passe-temps</label>
                                </div>

                                <div class="col-md-9 align-self-center">
                                    <p class="g-font-weight-300 g-color-gray-dark-v6 mb-0"><?=$GLOBALS['view']['user']['hobbiesUser']?></p>
                                </div>
                            </div>

                            <div class="row g-mb-40">
                                <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                    <label class="mb-0" for="#firstName">Je recherche</label>
                                </div>

                                <div class="col-md-9 align-self-center">
                                    <p class="g-font-weight-300 g-color-gray-dark-v6 mb-0"><?=$GLOBALS['view']['user']['lookingForUser']?></p>
                                </div>
                            </div>

                            <div class="row g-mb-40">
                                <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                    <label class="mb-0" for="#firstName">Je suis</label>
                                </div>

                                <div class="col-md-9 align-self-center">
                                    <p class="g-font-weight-300 g-color-gray-dark-v6 mb-0"><?=$GLOBALS['view']['user']['situationUser']?></p>
                                </div>
                            </div>

                            <div class="row g-mb-40">
                                <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                    <label class="mb-0" for="#firstName">Annimaux de compagnie</label>
                                </div>

                                <div class="col-md-9 align-self-center">
                                    <p class="g-font-weight-300 g-color-gray-dark-v6 mb-0"><?=$GLOBALS['view']['user']['petUser']?></p>
                                </div>
                            </div>

                            <div class="row g-mb-40">
                                <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                    <label class="mb-0" for="#firstName">Je souhaites une cohabitation</label>
                                </div>

                                <div class="col-md-9 align-self-center">
                                    <p class="g-font-weight-300 g-color-gray-dark-v6 mb-0"><?=$GLOBALS['view']['user']['preferenceUser']?></p>
                                </div>
                            </div>

                            <div class="row g-mb-40">
                                <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                    <label class="mb-0" for="#firstName">Je cherche une colocation</label>
                                </div>

                                <div class="col-md-9 align-self-center">
                                    <p class="g-font-weight-300 g-color-gray-dark-v6 mb-0"><?=$GLOBALS['view']['user']['shareUser']?></p>
                                </div>
                            </div>

                            <?php if($_SESSION['user']['levelUser'] >= 2){ ?>
                            <div class="row g-mb-40">
                                <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                    <label class="mb-0" for="#firstName">Organisation</label>
                                </div>

                                <div class="col-md-9 align-self-center">
                                    <form id="assignOrga" action="/organisation/assign">
                                        <select name="organisation">
                                            <option value="0"<?php if(!$GLOBALS['view']['organisation']){ echo 'selected="selected"';} ?>>Aucune</option>
                                            <?php foreach($GLOBALS['view']['organisation']['listing'] as $organisation){ ?>
                                            <option <?php if($GLOBALS['view']['organisation']['idOrganisation'] == $organisation['idOrganisation']){ echo 'selected="selected"';} ?> value="<?=$organisation['idOrganisation']?>"><?=$organisation['nameOrganisation']?></option>
                                            <?php } ?>
                                        </select>
                                        <input type="hidden" name="id" value="<?=$GLOBALS['view']['user']['idUser']?>">
                                    </form>
                                    <button onclick='$( "#assignOrga" ).submit();'>Assigner</button>
                                </div>
                            </div>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php') ?>
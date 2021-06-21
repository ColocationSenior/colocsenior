<?php
$GLOBALS['view']['title'] = "Logements";
include('includes/header.php') ?>

<style>
    #bloc_page {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;

        text-align: center;

    }

    #bloc_page a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        border: 1px solid #ddd;
    }

    #bloc_page a.active {
        background-color: #65CBE4;
        color: white;
        border: 1px solid #65CBE4;
        cursor: not-allowed;
    }

    #bloc_page a:hover:not(.active) {
        background-color: #ddd;
    }

    #bloc_page a:first-child {
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    #bloc_page a:last-child {
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
    }

    .disabled {
        cursor: not-allowed;
    }
</style>

<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
    <div class="g-pa-20">
        <form method="post" action="/logements/list">
            <div class="media flex-wrap g-mb-30">

                <div class="d-flex align-self-center align-items-center g-ml-10 g-ml-20--md g-ml-40--lg">
                    <div class="input-group g-pos-rel g-max-width-380 float-right">
                        <input
                            class="form-control h-100 g-font-size-default g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-20 g-pl-20 g-pr-50 g-py-10"
                            name="search" type="text" placeholder="Chercher par Nom">
                    </div>
                </div>
                <div class="d-flex align-self-center align-items-center g-ml-10 g-ml-20--md g-ml-40--lg">
                    <span class="g-hidden-sm-down g-color-gray-dark-v6 g-mr-12">Département :</span>

                    <div class="u-select--v1 g-pr-20">
                        <select class="js-select u-select--v1-select w-100" name="departement" style="display: none;">
                            <option value="">Tous</option>
                            <?php foreach($GLOBALS['view']['departements'] as $departement){ ?>
                                <option value="<?=$departement['nomDepartement']?>"><?=$departement['codeDepartement']?> - <?=$departement['nomDepartement']?></option>
                            <?php } ?>
                        </select>
                        <i
                            class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto"></i>
                    </div>
                </div>

                <div class="d-flex g-hidden-md-up w-100"></div>

                <div class="media-body align-self-center g-mt-10 g-mt-0--md">
                    <div class="g-pos-rel g-max-width-380 float-right g-mr-40">
                        <button
                            class="btn btn-md btn-large--md u-btn-secondary g-width-160--md g-font-size-12 g-font-size-default--md g-mt-10"
                            type="submit"><i class="hs-admin-search"></i> Filtrer</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="g-pa-20">
        <div class="row">
            <?php foreach($GLOBALS['view']['annonces'] as $annonce){ ?>
            <div class="col-xl-3 col-md-6 g-mb-30">
                <div class="card g-brd-gray-light-v7 rounded" style="border-width:4px">
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
                    <div class="card-block g-px-20 g-px-30--sm g-py-15 g-py-20--sm"
                        style="height:208px;overflow:hidden;background:url('/files/pictures/<?=$annonce['coverAnnonce']?>') center center;background-size:cover;">
                        <?php if($annonce['isCertifiedAnnonce'] == "Non certifiée"){ ?>
                        <a href="/services/list"><span class="u-tags-v1 text-center g-width-130 g-brd-around g-bg-red g-color-white g-rounded-50 g-py-4 g-px-15"><?=$annonce['isCertifiedAnnonce']?></span></a>
                        <?php } else{ ?>
                        <a href="/services/list"><span class="u-tags-v1 text-center g-width-130 g-brd-around g-bg-lightblue-v3 g-color-white g-rounded-50 g-py-4 g-px-15"><?=$annonce['isCertifiedAnnonce']?></span></a>
                        <?php } ?>
                    </div>
                    <section class="row no-gutters g-brd-top g-brd-gray-light-v4">
                        <div class="col-12 g-brd-left--md g-brd-gray-light-v4 g-py-10 g-py-10--md"
                            style="text-align:center;">
                            <span class="g-font-weight-300 g-color-gray-dark-v6">Type</span>
                            <strong
                                class="d-block g-font-weight-500 g-font-size-16 g-color-black">Échange logement temporaire</strong>
                        </div>
                    </section>
                    <section class="row no-gutters g-brd-top g-brd-gray-light-v4">
                        <div class="col-8 g-brd-left--md g-brd-gray-light-v4 g-py-10 g-py-10--md"
                            style="text-align:center;">
                            <span class="g-font-weight-300 g-color-gray-dark-v6">Ville</span>
                            <strong
                                class="d-block g-font-weight-500 g-font-size-16 g-color-black"><?=$annonce['cityAnnonce']?></strong>
                        </div>
                        <div class="col-4 g-brd-left--md g-brd-gray-light-v4 g-py-10 g-py-10--md"
                            style="text-align:center;">
                            <strong
                                class="d-block g-font-weight-500 g-font-size-16 g-color-black"><?=date("d/m", strtotime($annonce['createdAnnonce']));?></strong>
                            <span
                                class="g-font-weight-300 g-color-gray-dark-v6"><?=date("Y", strtotime($annonce['createdAnnonce']));?></span>
                        </div>
                    </section>
                    <hr class="d-flex g-brd-gray-light-v7 my-0">
                    <div>
                        <a class="d-flex align-items-center u-link-v5 g-parent g-py-15"
                            style="display:flex;justify-content:center;"
                            href="/annonce/show/<?=$annonce['idAnnonce']?>">
                            <span
                                class="g-font-size-18 g-color-gray-light-v6 g-color-primary--parent-hover g-color-primary--parent-active g-mr-5">
                                <i class="hs-admin-arrow-circle-right"></i>
                            </span>
                            <span
                                class="g-color-gray-dark-v6 g-font-size-15 g-color-primary--parent-hover g-color-primary--parent-active">Voir</span>
                        </a>
                    </div>
                </div>
            </div>

            <?php } ?>

        </div>
        <div class="container g-mt-28">
            <div id="bloc_page">

                <?php  if($page >= 2 && $page <= $GLOBALS['view']['nbPage'][$nbPage - 3]) { 
                        if ($page == 1) {?>
                <a class="active"
                    href="/logements/list/<?=$GLOBALS['view']['nbPage'][1]?>"><?=$GLOBALS['view']['nbPage'][1]?></a>
                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][2]?>"><?=$GLOBALS['view']['nbPage'][2]?></a>
                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][3]?>"><?=$GLOBALS['view']['nbPage'][3]?></a>
                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][4]?>"><?=$GLOBALS['view']['nbPage'][4]?></a>
                <a class="disabled">...</a>
                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][$page + 1]?>">&gt;</a>
                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][$nbPage]?>">&gt;&gt;</a>

                <?php } else { ?>

                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][1]?>">&lt;&lt;</a>
                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][$page - 1]?>">&lt;</a>
                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][$page - 1]?>"><?=$page-1?></a>
                <a class="active" href=""><?=$page?></a>
                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][$page + 1]?>"><?=$page + 1?></a>
                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][$page + 2]?>"><?=$page + 2?></a>
                <a class="disabled">...</a>
                <a
                    href="/logements/list/<?=$GLOBALS['view']['nbPage'][$nbPage]?>"><?=$GLOBALS['view']['nbPage'][$nbPage]?></a>
                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][$page + 1]?>">&gt;</a>
                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][$nbPage]?>">&gt;&gt;</a>

                <?php } ?>


                <?php } elseif($page >= $GLOBALS['view']['nbPage'][$nbPage - 2] && $page < $GLOBALS['view']['nbPage'][$nbPage -1]) {  ?>

                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][1]?>">&lt;&lt;</a>
                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][$page - 1]?>">&lt;</a>
                <a class="disabled">...</a>
                <a class="active" href=""><?=$page?></a>
                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][$page + 1]?>"><?=$page + 1?></a>
                <a
                    href="/logements/list/<?=$GLOBALS['view']['nbPage'][$nbPage]?>"><?=$GLOBALS['view']['nbPage'][$nbPage]?></a>

                <?php } elseif($page == $GLOBALS['view']['nbPage'][$nbPage - 1] && $page < $GLOBALS['view']['nbPage'][$nbPage] && $page != 1) { 
                        if ($page == 2) {?>

                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][1]?>"><?=$GLOBALS['view']['nbPage'][1]?></a>
                <a class="active" href=""><?=$page?></a>
                <a
                    href="/logements/list/<?=$GLOBALS['view']['nbPage'][$nbPage]?>"><?=$GLOBALS['view']['nbPage'][$nbPage]?></a>

                <?php } else { ?>
                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][1]?>">&lt;&lt;</a>
                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][$page - 1]?>">&lt;</a>
                <a class="disabled">...</a>
                <a class="active" href=""><?=$page?></a>
                <a
                    href="/logements/list/<?=$GLOBALS['view']['nbPage'][$nbPage]?>"><?=$GLOBALS['view']['nbPage'][$nbPage]?></a>


                <?php } ?>

                <?php }elseif($page == 1 && $nbPage > 1 && $nbPage < 3){ ?>

                <a class="active"
                    href="/logements/list/<?=$GLOBALS['view']['nbPage'][1]?>"><?=$GLOBALS['view']['nbPage'][1]?></a>
                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][2]?>"><?=$GLOBALS['view']['nbPage'][2]?></a>

                <?php }elseif($page == 1 && $nbPage > 1){ ?>

                <a class="active"
                    href="/logements/list/<?=$GLOBALS['view']['nbPage'][1]?>"><?=$GLOBALS['view']['nbPage'][1]?></a>
                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][2]?>"><?=$GLOBALS['view']['nbPage'][2]?></a>
                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][3]?>"><?=$GLOBALS['view']['nbPage'][3]?></a>
                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][4]?>"><?=$GLOBALS['view']['nbPage'][4]?></a>
                <a class="disabled">...</a>
                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][$page + 1]?>">&gt;</a>
                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][$nbPage]?>">&gt;&gt;</a>

                <?php } elseif($page == $GLOBALS['view']['nbPage'][$nbPage]) { 
                        if ($nbPage == 2) {?>

                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][$nbPage - 1]?>"><?=$page - 1?></a>
                <a class="active"
                    href="/logements/list/<?=$GLOBALS['view']['nbPage'][$nbPage]?>"><?=$GLOBALS['view']['nbPage'][$nbPage]?></a>

                <?php } elseif($nbPage == 1){  ?>
                <a class="active"
                    href="/logements/list/<?=$GLOBALS['view']['nbPage'][1]?>"><?=$GLOBALS['view']['nbPage'][1]?></a>

                <?php } else {  ?>

                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][1]?>">&lt;&lt;</a>
                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][$page - 1]?>">&lt;</a>
                <a class="disabled">...</a>
                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][$nbPage - 2]?>"><?=$page - 2?></a>
                <a href="/logements/list/<?=$GLOBALS['view']['nbPage'][$nbPage - 1]?>"><?=$page - 1?></a>
                <a class="active"
                    href="/logements/list/<?=$GLOBALS['view']['nbPage'][$nbPage]?>"><?=$GLOBALS['view']['nbPage'][$nbPage]?></a>

                <?php } ?>
                <?php } ?>

            </div>
        </div>

        <?php include('includes/footer.php') ?>
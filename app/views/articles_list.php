<?php
$GLOBALS['view']['title'] = "Articles";
include('includes/header.php') ?>
<style>
    #bloc_page {
        text-align: center;
        display: flex;
        justify-content: center;
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
        <div class="row">
            <?php foreach($GLOBALS['view']['news'] as $new){ ?>
            <div class="col-xl-3 col-md-6 g-mb-30">
                <div class="card g-brd-gray-light-v7 rounded">
                    <header class="card-header g-bg-transparent g-brd-bottom-none g-pa-20 g-pa-30--sm">
                        <h3 class="g-font-weight-300 g-font-size-20 g-color-black g-mb-15"><?=$new['titleNew']?></h3>
                    </header>
                    <section class="row no-gutters g-brd-top g-brd-gray-light-v4" style="margin-top:-20px;">
                        <div class="col-12 g-brd-left--md g-brd-gray-light-v4 g-py-10 g-py-10--md"
                            style="text-align:center;">
                            <span class="g-font-weight-300 g-color-gray-dark-v6">Publié par</span>
                            <strong
                                class="d-block g-font-weight-500 g-font-size-16 g-color-black"><?=$new['nameOrganisation']?></strong>
                        </div>
                    </section>
                    <div class="card-block g-px-20 g-px-30--sm g-py-15 g-py-20--sm"
                        style="height:208px;overflow:hidden;background:url('/files/pictures/<?=$new['coverNew']?>') center center;background-size:cover;">
                    </div>
                    <div>
                        <a class="d-flex align-items-center u-link-v5 g-parent g-py-15"
                            style="display:flex;justify-content:center;" href="/article/view/<?=$new['idNew']?>">
                            <span
                                class="g-font-size-18 g-color-gray-light-v6 g-color-primary--parent-hover g-color-primary--parent-active g-mr-5">
                                <i class="hs-admin-arrow-circle-right"></i>
                            </span>
                            <span
                                class="g-color-gray-dark-v6 g-font-size-15 g-color-primary--parent-hover g-color-primary--parent-active">Lire</span>
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
                    href="/articles/list/<?=$GLOBALS['view']['nbPage'][1]?>"><?=$GLOBALS['view']['nbPage'][1]?></a>
                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][2]?>"><?=$GLOBALS['view']['nbPage'][2]?></a>
                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][3]?>"><?=$GLOBALS['view']['nbPage'][3]?></a>
                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][4]?>"><?=$GLOBALS['view']['nbPage'][4]?></a>
                <a class="disabled">...</a>
                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][$page + 1]?>">&gt;</a>
                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][$nbPage]?>">&gt;&gt;</a>

                <?php } else { ?>

                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][1]?>">&lt;&lt;</a>
                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][$page - 1]?>">&lt;</a>
                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][$page - 1]?>"><?=$page-1?></a>
                <a class="active" href=""><?=$page?></a>
                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][$page + 1]?>"><?=$page + 1?></a>
                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][$page + 2]?>"><?=$page + 2?></a>
                <a class="disabled">...</a>
                <a
                    href="/articles/list/<?=$GLOBALS['view']['nbPage'][$nbPage]?>"><?=$GLOBALS['view']['nbPage'][$nbPage]?></a>
                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][$page + 1]?>">&gt;</a>
                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][$nbPage]?>">&gt;&gt;</a>

                <?php } ?>


                <?php } elseif($page >= $GLOBALS['view']['nbPage'][$nbPage - 2] && $page < $GLOBALS['view']['nbPage'][$nbPage -1]) {  ?>

                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][1]?>">&lt;&lt;</a>
                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][$page - 1]?>">&lt;</a>
                <a class="disabled">...</a>
                <a class="active" href=""><?=$page?></a>
                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][$page + 1]?>"><?=$page + 1?></a>
                <a
                    href="/articles/list/<?=$GLOBALS['view']['nbPage'][$nbPage]?>"><?=$GLOBALS['view']['nbPage'][$nbPage]?></a>

                <?php } elseif($page == $GLOBALS['view']['nbPage'][$nbPage - 1] && $page < $GLOBALS['view']['nbPage'][$nbPage] && $page != 1) { 
                        if ($page == 2) {?>

                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][1]?>"><?=$GLOBALS['view']['nbPage'][1]?></a>
                <a class="active" href=""><?=$page?></a>
                <a
                    href="/articles/list/<?=$GLOBALS['view']['nbPage'][$nbPage]?>"><?=$GLOBALS['view']['nbPage'][$nbPage]?></a>

                <?php } else { ?>
                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][1]?>">&lt;&lt;</a>
                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][$page - 1]?>">&lt;</a>
                <a class="disabled">...</a>
                <a class="active" href=""><?=$page?></a>
                <a
                    href="/articles/list/<?=$GLOBALS['view']['nbPage'][$nbPage]?>"><?=$GLOBALS['view']['nbPage'][$nbPage]?></a>


                <?php } ?>

                <?php }elseif($page == 1 && $nbPage > 1 && $nbPage < 3){ ?>

                <a class="active"
                    href="/articles/list/<?=$GLOBALS['view']['nbPage'][1]?>"><?=$GLOBALS['view']['nbPage'][1]?></a>
                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][2]?>"><?=$GLOBALS['view']['nbPage'][2]?></a>

                <?php }elseif($page == 1 && $nbPage > 1){ ?>

                <a class="active"
                    href="/articles/list/<?=$GLOBALS['view']['nbPage'][1]?>"><?=$GLOBALS['view']['nbPage'][1]?></a>
                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][2]?>"><?=$GLOBALS['view']['nbPage'][2]?></a>
                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][3]?>"><?=$GLOBALS['view']['nbPage'][3]?></a>
                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][4]?>"><?=$GLOBALS['view']['nbPage'][4]?></a>
                <a class="disabled">...</a>
                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][$page + 1]?>">&gt;</a>
                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][$nbPage]?>">&gt;&gt;</a>

                <?php } elseif($page == $GLOBALS['view']['nbPage'][$nbPage]) { 
                        if ($nbPage == 2) {?>

                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][$nbPage - 1]?>"><?=$page - 1?></a>
                <a class="active"
                    href="/articles/list/<?=$GLOBALS['view']['nbPage'][$nbPage]?>"><?=$GLOBALS['view']['nbPage'][$nbPage]?></a>

                <?php } elseif($nbPage == 1){  ?>
                <a class="active"
                    href="/articles/list/<?=$GLOBALS['view']['nbPage'][1]?>"><?=$GLOBALS['view']['nbPage'][1]?></a>

                <?php } else {  ?>

                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][1]?>">&lt;&lt;</a>
                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][$page - 1]?>">&lt;</a>
                <a class="disabled">...</a>
                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][$nbPage - 2]?>"><?=$page - 2?></a>
                <a href="/articles/list/<?=$GLOBALS['view']['nbPage'][$nbPage - 1]?>"><?=$page - 1?></a>
                <a class="active"
                    href="/articles/list/<?=$GLOBALS['view']['nbPage'][$nbPage]?>"><?=$GLOBALS['view']['nbPage'][$nbPage]?></a>

                <?php } ?>
                <?php } ?>

            </div>
        </div>
    </div>
</div>


<?php include('includes/footer.php') ?>
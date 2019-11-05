<?php
$GLOBALS['view']['title'] = "";
include('includes/header.php') ?>

    <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
        <div class="g-pa-20">
            <div class="row">
                <div class="col-12">
                    <div class="h-100 g-brd-around g-rounded-4 g-pa-15">
                        <h1 class="g-font-weight-500 g-font-size-28 g-color-black g-mb-28" style="text-align:center;"><?=$GLOBALS['view']['article']['titleNew']?></h1>
                        <div class="g-mb-30" style="width:100%;height:300px;margin:auto;border-radius:10px;background:url('/files/pictures/<?=$GLOBALS['view']['article']['coverNew']?>')center center;background-size:cover"></div>
                        <div style="text-align:center;">
                            <span>Publié par : <a href="/organisation/show/<?=$GLOBALS['view']['article']['idOrganisation']?>"><b><?=$GLOBALS['view']['article']['nameOrganisation']?></b></a></span>
                            <span style="display:inline-block;width:20px;"></span>
                            <span>Le : <b><?=date("d/m/Y", strtotime($GLOBALS['view']['article']['createdNew']));?></b></span>
                        </div>
                        <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">
                        <div><?=$GLOBALS['view']['article']['contentNew']?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php') ?>
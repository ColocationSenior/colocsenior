<div class="col-md-3 g-mb-30 g-mb-0--md">
    <div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
        <!-- User Information -->
        <section class="text-center g-mb-30 g-mb-50--md">
            <div class="d-inline-block g-pos-rel g-mb-20">
                <img class="img-fluid rounded-circle g-width-150" src="/files/profile/<?=$GLOBALS['view']['user']['pictureUser']?>" alt="Image description">
            </div>

            <h3 class="g-font-weight-300 g-font-size-20 g-color-black mb-0 "><?=$GLOBALS['view']['user']['firstNameUser']?> <?=@$GLOBALS['view']['user']['lastNameUser']?></h3><br>
            <?php if(@!$GLOBALS['view']['addFriend']){ ?>
            <a href="/profil/add/<?=$GLOBALS['view']['user']['idUser']?>">
                <button class="btn btn-md btn-xl--md u-btn-secondary g-width-160--md g-font-size-12 g-font-size-default--md g-mt-10">
                    <i class="hs-admin-plus"></i> Ajouter
                </button>
            </a>
            <?php } ?>
            <?php if($_SESSION['user']['idUser'] >= 1 ){ ?>
            <a href="/profil/upgrade/<?=$GLOBALS['view']['user']['idUser']?>">
                <button class="btn btn-md btn-xl--md u-btn-primary g-width-160--md g-font-size-12 g-font-size-default--md g-mt-10">
                    <i class="hs-admin-less"></i> Upgrade
                </button>
            </a>
            <?php } ?>
            <?php if($_SESSION['user']['idUser'] >= 1 ){ ?>
            <a href="/profil/downgrade/<?=$GLOBALS['view']['user']['idUser']?>">
                <button class="btn btn-md btn-xl--md u-btn-primary g-width-160--md g-font-size-12 g-font-size-default--md g-mt-10">
                    <i class="hs-admin-less"></i> Downgrade
                </button>
            </a>
            <?php } ?>
            <?php if($_SESSION['user']['idUser'] >= 1 ){ ?>
            <a href="/profil/ban/<?=$GLOBALS['view']['user']['idUser']?>">
                <button class="btn btn-md btn-xl--md u-btn-primary g-width-160--md g-font-size-12 g-font-size-default--md g-mt-10">
                    <i class="hs-admin-less"></i> Bannir
                </button>
            </a>
            <?php } ?>
            <?php if(@$GLOBALS['view']['addFriend'] && $GLOBALS['view']['addFriend'] != 'Accepter'){ ?>
            <span style="color:gray;"><?=@$GLOBALS['view']['addFriend']?></span>
            <?php } ?>
            <?php if(@$GLOBALS['view']['addFriend'] && $GLOBALS['view']['addFriend'] == 'Accepter'){ ?>
                <a href="/profil/accept/<?=$GLOBALS['view']['user']['idUser']?>">
                    <button class="btn btn-md btn-xl--md u-btn-secondary g-width-160--md g-font-size-12 g-font-size-default--md g-mt-10">
                        <i class="hs-admin-plus"></i> Accepter
                    </button>
                </a>
            <?php } ?>
        </section>
        <!-- User Information -->

        <!-- Profile Sidebar -->
        <section>
            <ul class="list-unstyled mb-0">
                <li class="g-brd-top g-brd-gray-light-v7 mb-0">
                    <div class="d-flex align-items-center u-link-v5 g-parent g-py-15">
                          <span class="g-font-size-18 g-color-gray-light-v6 g-mr-15">
                              <i class="hs-admin-user"></i>
                          </span>
                        <?php $year = date('Y') - $GLOBALS['view']['user']['birthYearUser'];?>
                        <span class="g-color-gray-dark-v6"><?=$year?> ans</span>
                    </div>
                </li>
                <li class="g-brd-top g-brd-gray-light-v7 mb-0">
                    <div class="d-flex align-items-center u-link-v5 g-parent g-py-15">
                          <span class="g-font-size-18 g-color-gray-light-v6 g-mr-15">
                              <i class="hs-admin-location-pin"></i>
                          </span>
                        <span class="g-color-gray-dark-v6"><?=@$GLOBALS['view']['user']['cityUser']?></span>
                    </div>
                </li>
                <?php if($_SESSION['user']['idUser'] >= 1 ){ ?>
                <li class="g-brd-top g-brd-gray-light-v7 mb-0">
                    <div class="d-flex align-items-center u-link-v5 g-parent g-py-15">
                          <span class="g-font-size-18 g-color-gray-light-v6 g-mr-15">
                              <i class="hs-admin-location-pin"></i>
                          </span>
                        <span class="g-color-gray-dark-v6">Niveau utilisateur :
                        <?php if(@$GLOBALS['view']['user']['levelUser'] == 0){ ?>
                        Banni
                        <?php } else { ?>
                        <?=@$GLOBALS['view']['user']['levelUser']?>
                        <?php } ?>
                        </span>
                    </div>
                </li>
                <?php } ?>
                <!--<li class="g-brd-top g-brd-gray-light-v7 mb-0">
                    <div class="d-flex align-items-center u-link-v5 g-parent g-py-15">
                          <span class="g-font-size-18 g-color-gray-light-v6 g-mr-15">
                              <i class="hs-admin-calendar"></i>
                          </span>
                        <span class="g-color-gray-dark-v6">Membre depuis JJ/MM/AAAA</span>
                    </div>
                </li>-->
            </ul>
        </section>
        <!-- End Profile Sidebar -->
    </div>

</div>
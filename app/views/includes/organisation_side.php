<div class="col-md-3 g-mb-30 g-mb-0--md">
    <div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
        <!-- User Information -->
        <section class="text-center g-mb-30 g-mb-50--md">
            <div class="d-inline-block g-pos-rel g-mb-20">
                <img class="img-fluid rounded-circle g-width-150" src="/files/profile/<?=$GLOBALS['view']['organisation']['pictureOrganisation']?>" alt="Image description">
            </div>

            <h3 class="g-font-weight-300 g-font-size-20 g-color-black mb-0 "><?=$GLOBALS['view']['organisation']['nameOrganisation']?></h3><br>
        </section>
        <!-- User Information -->

        <!-- Profile Sidebar -->
        <section>
            <ul class="list-unstyled mb-0">
                <li class="g-brd-top g-brd-gray-light-v7 mb-0">
                    <div class="d-flex align-items-center u-link-v5 g-parent g-py-15">
                          <span class="g-font-size-18 g-color-gray-light-v6 g-mr-15">
                              <i class="hs-admin-location-pin"></i>
                          </span>
                        <span class="g-color-gray-dark-v6"><?=$GLOBALS['view']['organisation']['cityOrganisation']?></span>
                    </div>
                </li>
                <li class="g-brd-top g-brd-gray-light-v7 mb-0">
                    <div class="d-flex align-items-center u-link-v5 g-parent g-py-15">
                          <span class="g-font-size-18 g-color-gray-light-v6 g-mr-15">
                              <i class="hs-admin-user"></i>
                          </span>
                        <span class="g-color-gray-dark-v6"><a href="/profil/show/<?=$GLOBALS['view']['organisation']['user']['idUser']?>"><?=$GLOBALS['view']['organisation']['user']['firstNameUser']?> <?=$GLOBALS['view']['organisation']['user']['lastNameUser']?></a></span>
                    </div>
                </li>
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
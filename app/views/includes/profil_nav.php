<div class="col-md-3 g-mb-30 g-mb-0--md">
    <div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
        <!-- User Information -->
        <section class="text-center g-mb-30 g-mb-50--md">
            <div class="d-inline-block g-pos-rel g-mb-20">
                <img class="img-fluid rounded-circle g-width-150" src="/files/profile/<?=$_SESSION['user']['pictureUser']?>" alt="Image description">
            </div>

            <h3 class="g-font-weight-300 g-font-size-20 g-color-black mb-0"><?=$_SESSION['user']['firstNameUser']?> <?=@$_SESSION['user']['lastNameUser']?></h3>
        </section>
        <!-- User Information -->

        <!-- Profile Sidebar -->
        <section>
            <ul class="list-unstyled mb-0">
                <li class="g-brd-top g-brd-gray-light-v7 mb-0">
                    <a class="d-flex align-items-center u-link-v5 g-parent g-py-15" href="/monprofil">
                          <span class="g-font-size-18 g-color-gray-light-v6 g-color-primary--parent-hover g-color-primary--parent-active g-mr-15">
						<i class="hs-admin-user"></i>
					</span>
                        <span class="g-color-gray-dark-v6 g-color-primary--parent-hover g-color-primary--parent-active">Informations principales</span>
                    </a>
                </li>
                <li class="g-brd-top g-brd-gray-light-v7 mb-0">
                    <a class="d-flex align-items-center u-link-v5 g-parent g-py-15" href="/monprofil_supp">
                          <span class="g-font-size-18 g-color-gray-light-v6 g-color-primary--parent-hover g-color-primary--parent-active g-mr-15">
						<i class="hs-admin-book"></i>
					</span>
                        <span class="g-color-gray-dark-v6 g-color-primary--parent-hover g-color-primary--parent-active">Informations supplémentaires</span>
                    </a>
                </li>
                <li class="g-brd-top g-brd-gray-light-v7 mb-0">
                    <a class="d-flex align-items-center u-link-v5 g-parent g-py-15" href="/monprofil_secu">
                          <span class="g-font-size-18 g-color-gray-light-v6 g-color-primary--parent-hover g-color-primary--parent-active g-mr-15">
						<i class="hs-admin-lock"></i>
					</span>
                        <span class="g-color-gray-dark-v6 g-color-primary--parent-hover g-color-primary--parent-active">Modifier mot de passe</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- End Profile Sidebar -->
    </div>

</div>
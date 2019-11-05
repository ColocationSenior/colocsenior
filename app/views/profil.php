<?php
$GLOBALS['view']['title'] = "Mon profil";
include('includes/header.php') ?>

    <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
        <div class="g-pa-20">
            <div class="row">
                <?php include('includes/profil_nav.php') ?>
                <div class="col-md-9">
                    <div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
                        <form class="js-validate" novalidate="novalidate" method="post" action="/profil/update" enctype='multipart/form-data'>
                            <header>
                                <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Mes informations</h2>
                            </header>

                            <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

                            <div class="row g-mb-20">
                                <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                    <label class="mb-0" for="#firstName">Prénom</label>
                                </div>

                                <div class="col-md-9 align-self-center">
                                    <div class="form-group g-pos-rel mb-0">
                                        <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                            <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                                        </span>
                                        <input id="firstName" name="firstName" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="text"
                                               value="<?=@$_SESSION['user']['firstNameUser']?>" required="required" data-msg="Ce champ est obligatoire" data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                                    </div>
                                </div>
                            </div>

                            <div class="row g-mb-20">
                                <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                    <label class="mb-0" for="#firstName">Nom</label>
                                </div>

                                <div class="col-md-9 align-self-center">
                                    <div class="form-group g-pos-rel mb-0">
                                        <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                            <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                                        </span>
                                        <input id="lastName" name="lastName" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="text"
                                               value="<?=@$_SESSION['user']['lastNameUser']?>" data-msg="Ce champ est obligatoire" data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                                    </div>
                                </div>
                            </div>

                            <div class="row g-mb-20">
                                <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                    <label class="mb-0" for="#firstName">Ville</label>
                                </div>

                                <div class="col-md-9 align-self-center">
                                    <div class="form-group g-pos-rel mb-0">
                                        <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                            <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                                        </span>
                                        <input id="lastName" name="city" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="text"
                                               value="<?=@$_SESSION['user']['cityUser']?>" data-msg="Ce champ est obligatoire" data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                                    </div>
                                </div>
                            </div>

                            <div class="row g-mb-20">
                                <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                    <label class="mb-0" for="#firstName">Email</label>
                                </div>

                                <div class="col-md-9 align-self-center">
                                    <div class="form-group g-pos-rel mb-0">
                                        <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                            <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                                        </span>
                                        <input id="firstName" name="email" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="email"
                                               value="<?=@$_SESSION['user']['emailUser']?>" required="required" data-msg="Ce champ est obligatoire" data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                                    </div>
                                </div>
                            </div>

                            <div class="row g-mb-20">
                                <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                    <label class="mb-0">Je suis</label>
                                </div>

                                <div class="col-md-9 align-self-center">
                                    <div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                                        <select class="js-select u-select--v3-select u-sibling w-100" name="gender" title="Sélectionnez un genre" style="display: none;">
                                            <option <?php if(@$_SESSION['user']['genderUser'] == 1) echo 'selected' ?> value="1">Un homme
                                            </option>
                                            <option <?php if(@$_SESSION['user']['genderUser'] == 2) echo 'selected' ?> value="2">Une femme
                                            </option>
                                            <option <?php if(@$_SESSION['user']['genderUser'] == null) echo 'selected' ?> value="0">Ne pas afficher
                                            </option>
                                        </select>

                                        <div class="d-flex align-items-center g-absolute-centered--y g-right-0 g-color-gray-light-v6 g-color-lightblue-v9--sibling-opened g-mr-15">
                                            <i class="hs-admin-angle-down"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-mb-20">
                                <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                    <label class="mb-0">Votre année de naissance</label>
                                </div>

                                <div class="col-md-9 align-self-center">
                                    <div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                                        <select class="js-select u-select--v3-select u-sibling w-100" name="birthYear" title="Année" style="display: none;">
                                            <option value="">Ne pas afficher</option>
                                        <?php
                                        $currentYear = date('Y');
                                        for($i=18;$i<100;$i++){
                                            $year = $currentYear - $i;
                                        ?>
                                            <option <?php if(@$_SESSION['user']['birthYearUser'] == $year) echo 'selected' ?> value="<?=$year?>"><?=$year?></option>
                                        <?php } ?>
                                        </select>

                                        <div class="d-flex align-items-center g-absolute-centered--y g-right-0 g-color-gray-light-v6 g-color-lightblue-v9--sibling-opened g-mr-15">
                                            <i class="hs-admin-angle-down"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <h4 class="h6 g-font-weight-400 g-color-black g-mb-20">Photo de profil</h4>

                                <div class="input-group u-file-attach-v1 g-brd-gray-light-v2">
                                    <input class="form-control h-100 form-control-md rounded-0" placeholder="Choisissez une photo" readonly="" type="text">

                                    <div class="input-group-btn">
                                        <button class="btn btn-md h-100 u-btn-primary rounded-0" type="submit">Parcourir</button>
                                        <input type="file" name="picture" accept=".jpg, .jpeg, .png">
                                    </div>
                                </div>
                            </div>

                            <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">
                            <div>
                                <button class="btn btn-md btn-xl--md u-btn-secondary g-width-160--md g-font-size-12 g-font-size-default--md g-mb-10" type="submit">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php') ?>
<?php
$GLOBALS['view']['title'] = "Mon profil";
include('includes/header.php') ?>

    <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
        <div class="g-pa-20">
            <div class="row">
                <?php include('includes/profil_nav.php') ?>
                <div class="col-md-9">
                    <div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
                        <form class="js-validate" novalidate="novalidate">
                            <header>
                                <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Informations de sécurité</h2>
                            </header>

                            <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

                            <div class="row g-mb-20">
                                <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                    <label class="mb-0" for="#firstName">Mot de passe actuel</label>
                                </div>

                                <div class="col-md-9 align-self-center">
                                    <div class="form-group g-pos-rel mb-0">
                                        <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                            <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                                        </span>
                                        <input id="firstName" name="currentPassword" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="password"
                                               required="required" data-msg="Ce champ est obligatoire" data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                                    </div>
                                </div>
                            </div>

                            <div class="row g-mb-20">
                                <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                    <label class="mb-0" for="#firstName">Nouveau mot de passe</label>
                                </div>

                                <div class="col-md-9 align-self-center">
                                    <div class="form-group g-pos-rel mb-0">
                                        <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                            <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                                        </span>
                                        <input id="firstName" name="newPassword" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="password"
                                               required="required" data-msg="Ce champ est obligatoire" data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                                    </div>
                                </div>
                            </div>

                            <div class="row g-mb-20">
                                <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                    <label class="mb-0" for="#firstName">Répétez votre mot de passe</label>
                                </div>

                                <div class="col-md-9 align-self-center">
                                    <div class="form-group g-pos-rel mb-0">
                                        <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                            <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                                        </span>
                                        <input id="firstName" name="repeatPassword" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="password"
                                               required="required" data-msg="Ce champ est obligatoire" data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                                    </div>
                                </div>
                            </div>

                            <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">
                            <div>
                                <button class="btn btn-md btn-xl--md u-btn-secondary g-width-160--md g-font-size-12 g-font-size-default--md g-mb-10" type="submit">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php') ?>
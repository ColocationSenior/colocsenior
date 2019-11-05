<?php
$GLOBALS['view']['title'] = "Mon profil";
include('includes/header.php') ?>

    <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
        <div class="g-pa-20">
            <div class="row">
                <?php include('includes/profil_nav.php') ?>
                <div class="col-md-9">
                    <div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
                        <form class="js-validate" novalidate="novalidate" method="post" action="profil_supp/update">
                            <header>
                                <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Informations supplémentaires</h2>
                            </header>
                            <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">
                            <div class="g-mb-20">
                                <label class="g-mb-10" for="#bio">Votre présentation</label>

                                <div class="form-group mb-0">
                                    <textarea id="bio" name="bio" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-4 g-px-20 g-py-12" rows="5"><?=@$_SESSION['user']['bioUser']?></textarea>
                                </div>
                            </div>

                            <div class="row g-mb-20">
                                <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                    <label class="mb-0">Je recherche</label>
                                </div>

                                <div class="col-md-9 align-self-center">
                                    <div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                                        <select class="js-select u-select--v3-select u-sibling w-100" name="lookingFor" title="votre colocation" style="display: none;">
                                            <option <?php if(@$_SESSION['user']['lookingForUser'] == null) echo 'selected' ?> value="">Ne pas afficher
                                            </option>
                                            <option <?php if(@$_SESSION['user']['lookingForUser'] == "colocation") echo 'selected' ?> value="colocation">Une colocation
                                            </option>
                                            <option <?php if(@$_SESSION['user']['lookingForUser'] == "colocataire") echo 'selected' ?> value="colocataire">Un colocataire
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
                                    <label class="mb-0">Votre situation</label>
                                </div>

                                <div class="col-md-9 align-self-center">
                                    <div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                                        <select class="js-select u-select--v3-select u-sibling w-100" name="situation" title="Sélectionnez une situation" style="display: none;">
                                            <option <?php if(@$_SESSION['user']['situationUser'] == "Étudiant") echo 'selected' ?>  value="Étudiant">Étudiant
                                            </option>
                                            <option <?php if(@$_SESSION['user']['situationUser'] == "pro") echo 'selected' ?>  value="pro">Professionnel
                                            </option>
                                            <option <?php if(@$_SESSION['user']['situationUser'] == "Sans emploi") echo 'selected' ?>  value="Sans emploi">Sans Emploi
                                            </option>
                                            <option <?php if(@$_SESSION['user']['situationUser'] == "Retraité") echo 'selected' ?>  value="Retraité">Retraité
                                            </option>
                                            <option <?php if(@$_SESSION['user']['situationUser'] == null) echo 'selected' ?>  value="">Ne pas afficher
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
                                    <label class="mb-0">Avez-vous des annimaux de compagnie</label>
                                </div>

                                <div class="col-md-9 align-self-center">
                                    <div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                                        <select class="js-select u-select--v3-select u-sibling w-100" name="pet" title="Annimaux de companie" style="display: none;">
                                            <option <?php if(@$_SESSION['user']['petUser'] == null) echo 'selected' ?>  value="">Ne pas afficher
                                            </option>
                                            <option <?php if(@$_SESSION['user']['petUser'] == 'Oui') echo 'selected' ?>  value="Oui">Oui
                                            </option>
                                            <option <?php if(@$_SESSION['user']['petUser'] == 'Non') echo 'selected' ?>  value="Non">Non
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
                                    <label class="mb-0">Êtes-vous fumeur ?</label>
                                </div>

                                <div class="col-md-9 align-self-center">
                                    <div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                                        <select class="js-select u-select--v3-select u-sibling w-100" name="smoke" title="Fumeur" style="display: none;">
                                            <option <?php if(@$_SESSION['user']['smokeUser'] == null) echo 'selected' ?>  value="">Ne pas afficher
                                            </option>
                                            <option <?php if(@$_SESSION['user']['smokeUser'] == 'Oui') echo 'selected' ?>  value="Oui">Oui
                                            </option>
                                            <option <?php if(@$_SESSION['user']['smokeUser'] == 'Non') echo 'selected' ?>  value="Non">Non
                                            </option>
                                        </select>

                                        <div class="d-flex align-items-center g-absolute-centered--y g-right-0 g-color-gray-light-v6 g-color-lightblue-v9--sibling-opened g-mr-15">
                                            <i class="hs-admin-angle-down"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="g-mb-30">
                                <label class="g-mb-10" for="#skills">Vos passe-temps</label>

                                <div class="u-tagsinput--v2--blue g-brd-around g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-4 g-px-6 g-py-5">
                                    <input type="text" name="hobbies" value="<?=@$_SESSION['user']['hobbiesUser']?>" data-role="tagsinput">
                                </div>
                            </div>

                            <div class="row g-mb-20">
                                <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                                    <label class="mb-0">Type de cohabitation</label>
                                </div>

                                <div class="col-md-9 align-self-center">
                                    <div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                                        <select class="js-select u-select--v3-select u-sibling w-100" name="preference" title="votre cohabitation" style="display: none;">
                                            <option <?php if(@$_SESSION['user']['preferenceUser'] == null) echo 'selected' ?> value="">Ne pas afficher
                                            </option>
                                            <option <?php if(@$_SESSION['user']['preferenceUser'] == 'mixte') echo 'selected' ?> value="mixte">Mixte
                                            </option>
                                            <option <?php if(@$_SESSION['user']['preferenceUser'] == 'Homme uniquement') echo 'selected' ?> value="men">Homme uniquement
                                            </option>
                                            <option <?php if(@$_SESSION['user']['preferenceUser'] == 'Femme uniquement') echo 'selected' ?> value="women">Femme uniquement
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
                                    <label class="mb-0">Je veux une colocation</label>
                                </div>

                                <div class="col-md-9 align-self-center">
                                    <div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                                        <select class="js-select u-select--v3-select u-sibling w-100" name="share" title="votre colocation" style="display: none;">
                                            <option <?php if(@$_SESSION['user']['shareUser'] == null) echo 'selected' ?> value="">Ne pas afficher
                                            </option>
                                            <option <?php if(@$_SESSION['user']['shareUser'] == 'Intergénérationnelle') echo 'selected' ?> value="Intergénérationnelle">Intergénérationnelle
                                            </option>
                                            <option <?php if(@$_SESSION['user']['shareUser'] == '50+') echo 'selected' ?> value="50+">Entre plus de 50 ans
                                            </option>
                                        </select>

                                        <div class="d-flex align-items-center g-absolute-centered--y g-right-0 g-color-gray-light-v6 g-color-lightblue-v9--sibling-opened g-mr-15">
                                            <i class="hs-admin-angle-down"></i>
                                        </div>
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
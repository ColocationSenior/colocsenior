<!-- set bodyTheme = "u-card-v1" -->


<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Title -->
    <title>Colocationsenior.fr</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../favicon.ico">
    <!-- Google Fonts -->
    <link rel="stylesheet"
          href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/bootstrap.min.css">
    <!-- CSS Global Icons -->
    <link rel="stylesheet" href="/assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/vendor/icon-line/css/simple-line-icons.css">
    <link rel="stylesheet" href="/assets/vendor/icon-etlinefont/style.css">
    <link rel="stylesheet" href="/assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="/assets/vendor/icon-hs/style.css">

    <link rel="stylesheet" href="/assets/vendor/hs-admin-icons/hs-admin-icons.css">

    <link rel="stylesheet" href="/assets/vendor/animate.css">
    <link rel="stylesheet" href="/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="/assets/vendor/flatpickr/dist/css/flatpickr.min.css">
    <link rel="stylesheet" href="/assets/vendor/bootstrap-select/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="/assets/vendor/chartist-js/chartist.min.css">
    <link rel="stylesheet" href="/assets/vendor/chartist-js-tooltip/chartist-plugin-tooltip.css">
    <link rel="stylesheet" href="/assets/vendor/fancybox/jquery.fancybox.min.css">

    <link rel="stylesheet" href="/assets/vendor/hamburgers/hamburgers.min.css">

    <!-- CSS Unify -->
    <link rel="stylesheet" href="/assets/css/unify-admin.css">

    <link rel="stylesheet" href="/assets/vendor/summernote-themes/unify-lite.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="/assets/css/custom.css">
    <style>
        .change-hover:hover{
            color: #e6215;
        }
    </style>
</head>

<body>
<!-- Header -->
<header id="js-header" class="u-header u-header--sticky-top">
    <div class="u-header__section u-header__section--admin-dark g-min-height-65">
        <nav class="navbar no-gutters g-pa-0">
            <div class="col-auto d-flex flex-nowrap u-header-logo-toggler g-py-12">
                <!-- Logo -->
                <a href="/"
                   class="navbar-brand d-flex align-self-center g-hidden-xs-down g-line-height-1 py-0 g-mt-5">

                    <img src="/assets/img/logo/logo-colocationseniors-beta-2.png" width="180px">


                </a>
                <!-- End Logo -->

                <!-- Sidebar Toggler -->
                <a class="js-side-nav u-header__nav-toggler d-flex align-self-center ml-auto" href="#"
                   data-hssm-class="u-side-nav--mini u-sidebar-navigation-v1--mini"
                   data-hssm-body-class="u-side-nav-mini" data-hssm-is-close-all-except-this="true"
                   data-hssm-target="#sideNav">
                    <i class="hs-admin-align-left"></i>
                </a>
                <!-- End Sidebar Toggler -->
            </div>

            <div style="display:flex;justify-content: start;" class="g-ml-20">
                <img src="/assets/img/logo/colocsenior_solo.png" height="30px">
                <h3 class="g-font-weight-400 g-font-size-20 g-ml-5"><?=$GLOBALS['view']['title']?></h3>
                <?php
                    if(isset($GLOBALS['view']['infoPopup'])){
                ?>
                <img src="/assets/img/information.png" height="20px" style="margin-left:20px;margin-top:5px;cursor:pointer;" onclick="infoPopup()">
                <?php
                }
                ?>
            </div>


            <script>
                function infoPopup(){
                    alert("<?=$GLOBALS['view']['infoPopup']?>");
                }
            </script>

            <!-- Top Search Bar -->
            <form id="searchMenu" class="u-header--search col-sm g-py-12 g-ml-15--sm g-ml-20--md g-mr-10--sm"
                  aria-labelledby="searchInvoker" style="display:none;" action="#">
                <div class="input-group g-max-width-450">
                    <input class="form-control form-control-md g-rounded-4" type="text"
                           placeholder="Enter search keywords">
                    <button type="submit"
                            class="btn u-btn-outline-primary g-brd-none g-bg-transparent--hover g-pos-abs g-top-0 g-right-0 d-flex g-width-40 h-100 align-items-center justify-content-center g-font-size-18 g-z-index-2">
                        <i class="hs-admin-search"></i>
                    </button>
                </div>
            </form>
            <!-- End Top Search Bar -->

            <div>

            </div>

            <!-- Messages/Notifications/Top Search Bar/Top User -->
            <div class="col-auto d-flex g-py-12 g-pl-40--lg ml-auto">
                <!-- Top Messages -->
                <div class="g-pos-rel g-hidden-sm-down g-mr-5" style="display:none;">
                    <a id="messagesInvoker"
                       class="d-block text-uppercase u-header-icon-v1 g-pos-rel g-width-40 g-height-40 rounded-circle g-font-size-20"
                       href="#" aria-controls="messagesMenu" aria-haspopup="true" aria-expanded="false"
                       data-dropdown-event="click" data-dropdown-target="#messagesMenu"
                       data-dropdown-type="css-animation" data-dropdown-duration="300"
                       data-dropdown-animation-in="fadeIn" data-dropdown-animation-out="fadeOut">
                        <span class="u-badge-v1 g-top-7 g-right-7 g-width-18 g-height-18 g-bg-primary g-font-size-10 g-color-white rounded-circle p-0">3</span>
                        <i class="hs-admin-comment-alt g-absolute-centered"></i>
                    </a>

                    <!-- Top Messages List -->
                    <div id="messagesMenu" class="g-absolute-centered--x g-width-340 g-max-width-400 g-mt-17 rounded"
                         aria-labelledby="messagesInvoker">
                        <div class="media u-header-dropdown-bordered-v1 g-pa-20">
                            <h4 class="d-flex align-self-center text-uppercase g-font-size-default g-letter-spacing-0_5 g-mr-20 g-mb-0">
                                3 nouveaux messages</h4>
                            <div class="media-body align-self-center text-right">
                                <a class="g-color-secondary" href="#">Tout voir</a>
                            </div>
                        </div>

                        <ul class="p-0 mb-0">
                            <!-- Top Messages List Item -->
                            <li class="media g-pos-rel u-header-dropdown-item-v1 g-pa-20">
                                <div class="d-flex g-mr-15">
                                    <img class="g-width-40 g-height-40 rounded-circle"
                                         src="/assets/img-temp/100x100/img5.jpg" alt="Image Description">
                                </div>

                                <div class="media-body">
                                    <h5 class="g-font-size-16 g-font-weight-400 g-mb-5"><a href="#">Verna Swanson</a>
                                    </h5>
                                    <p class="g-mb-10">Not so many years businesses used to grunt at using</p>

                                    <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-lightblue-v2">
                                        <i class="hs-admin-time icon-clock g-mr-5"></i> <small>Il y a 5 min</small>
                                    </em>
                                </div>
                                <a class="u-link-v2" href="#">Lire</a>
                            </li>
                            <!-- End Top Messages List Item -->
                        </ul>
                    </div>
                    <!-- End Top Messages List -->
                </div>
                <!-- End Top Messages -->

                <!-- Top Search Bar (Mobi) -->
                <a id="searchInvoker"
                   class="g-hidden-sm-up text-uppercase u-header-icon-v1 g-pos-rel g-width-40 g-height-40 rounded-circle g-font-size-20"
                   href="#" aria-controls="searchMenu" aria-haspopup="true" aria-expanded="false"
                   data-is-mobile-only="true" data-dropdown-event="click"
                   data-dropdown-target="#searchMenu" data-dropdown-type="css-animation" data-dropdown-duration="300"
                   data-dropdown-animation-in="fadeIn" data-dropdown-animation-out="fadeOut">
                    <i class="hs-admin-search g-absolute-centered"></i>
                </a>
                <!-- End Top Search Bar (Mobi) -->

                <!-- Top User -->
                <div class="col-auto d-flex g-pt-5 g-pt-0--sm g-pl-10 g-pl-20--sm">
                    <div class="g-pos-rel g-px-10--lg">
                        <a id="profileMenuInvoker" class="d-block" href="#" aria-controls="profileMenu"
                           aria-haspopup="true" aria-expanded="false" data-dropdown-event="click"
                           data-dropdown-target="#profileMenu" data-dropdown-type="css-animation"
                           data-dropdown-duration="300"
                           data-dropdown-animation-in="fadeIn" data-dropdown-animation-out="fadeOut">
                <span class="g-pos-rel">
        <span class="u-badge-v2--xs u-badge--top-right g-hidden-sm-up g-bg-secondary g-mr-5"></span>
                <img class="g-width-30 g-width-40--md g-height-30 g-height-40--md rounded-circle g-mr-10--sm"
                     src="/files/profile/<?=$_SESSION['user']['pictureUser']?>" alt="Image description">
                </span>
                            <span class="g-pos-rel g-top-2">
        <span class="g-hidden-sm-down"><?=$_SESSION['user']['firstNameUser']?></span>
                <i class="hs-admin-angle-down g-pos-rel g-top-2 g-ml-10"></i>
                </span>
                        </a>

                        <!-- Top User Menu -->
                        <ul id="profileMenu"
                            class="g-pos-abs g-left-0 g-width-100x--lg g-nowrap g-font-size-14 g-py-20 g-mt-17 rounded"
                            aria-labelledby="profileMenuInvoker">
                            <li class="g-hidden-sm-up g-mb-10">
                                <a class="media g-py-5 g-px-20" href="#">
                                    <span class="d-flex align-self-center g-mr-12">
                                        <i class="hs-admin-bell"></i>
                                    </span>
                                    <span class="media-body align-self-center">Notifications</span>
                                </a>
                            </li>
                            <li class="g-mb-10">
                                <a class="media g-color-primary--hover g-py-5 g-px-20" href="/monprofil">
                                    <span class="d-flex align-self-center g-mr-12">
                                        <i class="hs-admin-user"></i>
                                    </span>
                                    <span class="media-body align-self-center">Mon profil</span>
                                </a>
                            </li>
                            <li class="g-mb-10">
                                <a class="media g-color-primary--hover g-py-5 g-px-20" target="_blank" href="http://untoitpartage.fr/adherer">
                                    <span class="d-flex align-self-center g-mr-12">
                                        <i class="hs-admin-rocket"></i>
                                    </span>
                                    <span class="media-body align-self-center">Adhérer</span>
                                </a>
                            </li>
                            <li class="mb-0">
                                <a class="media g-color-primary--hover g-py-5 g-px-20" href="/disconnect">
                                    <span class="d-flex align-self-center g-mr-12">
                                        <i class="hs-admin-shift-right"></i>
                                    </span>
                                    <span class="media-body align-self-center">Déconnexion</span>
                                </a>
                            </li>
                        </ul>
                        <!-- End Top User Menu -->
                    </div>
                </div>
                <!-- End Top User -->
            </div>
            <!-- End Messages/Notifications/Top Search Bar/Top User -->
        </nav>
    </div>
</header>
<!-- End Header -->


<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">
        <!-- Sidebar Nav -->
        <div id="sideNav" class="col-auto u-sidebar-navigation-v1 u-sidebar-navigation--dark">
            <ul id="sideNavMenu"
                class="u-sidebar-navigation-v1-menu u-side-nav--top-level-menu g-min-height-100vh mb-0">
                <!-- fil d'actualite -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12"
                       href="/">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-home"></i>
                        </span>
                        <span class="media-body align-self-center">Fil d'actualité</span>
                    </a>
                </li>
                <!-- End fil d'actualite -->

                <!-- Annonces -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12"
                       href="#" data-hssm-target="#subMenu1">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-announcement"></i>
                        </span>
                        <span class="media-body align-self-center">Annonces</span>
                        <span class="d-flex align-self-center u-side-nav--control-icon">
                          <i class="hs-admin-angle-right"></i>
                        </span>
                        <span class="u-side-nav--has-sub-menu__indicator"></span>
                    </a>

                    <ul id="subMenu1" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12"
                               href="/logements/list">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-home"></i>
                                </span>
                                <span class="media-body align-self-center">Logements</span>
                            </a>
                        </li>
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12"
                               href="/services/list">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-comments-smiley"></i>
                                </span>
                                <span class="media-body align-self-center">Services</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End Annonces -->

                <!-- Blog -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12"
                       href="/articles/list">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-book"></i>
                        </span>
                        <span class="media-body align-self-center">Actualités</span>
                    </a>
                </li>
                <!-- End blog -->

                <!-- Messagerie -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12"
                       href="#" onclick="wip()">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-comment-alt"></i>
                        </span>
                        <span class="media-body align-self-center">Messagerie</span>
                    </a>
                </li>
                <!-- End messagerie -->

                <!-- Annonces -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12"
                       href="#" data-hssm-target="#subMenu2">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-themify-favicon"></i>
                        </span>
                        <span class="media-body align-self-center">Contacts</span>
                        <span class="d-flex align-self-center u-side-nav--control-icon">
                          <i class="hs-admin-angle-right"></i>
                        </span>
                        <span class="u-side-nav--has-sub-menu__indicator"></span>
                    </a>

                    <ul id="subMenu2" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12"
                               href="/friends/list">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-user"></i>
                                </span>
                                <span class="media-body align-self-center">Mes amis</span>
                            </a>
                        </li>
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12"
                               href="/profil/list">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-zoom-in"></i>
                                </span>
                                <span class="media-body align-self-center">Trouver de nouveaux amis</span>
                            </a>
                        </li>
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12"
                               href="/contact" target="_blank">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-zoom-in"></i>
                                </span>
                                <span class="media-body align-self-center">Aide</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End Annonces -->

                <!-- Blog -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12"
                       href="#" data-hssm-target="#subMenu6">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-themify-favicon"></i>
                        </span>
                        <span class="media-body align-self-center">Devenir adhérent</span>
                        <span class="d-flex align-self-center u-side-nav--control-icon">
                          <i class="hs-admin-angle-right"></i>
                        </span>
                        <span class="u-side-nav--has-sub-menu__indicator"></span>
                    </a>

                    <ul id="subMenu6" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12"
                               href="https://untoitpartage.fr/maison/agir-et-accompagner/adherer-membre-usager/">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-user"></i>
                                </span>
                                <span class="media-body align-self-center">Membre usager</span>
                            </a>
                        </li>
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12"
                               href="https://untoitpartage.fr/maison/agir-et-accompagner/adherer-membre-usager-senior/">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-zoom-in"></i>
                                </span>
                                <span class="media-body align-self-center">Membre usager sénior</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End blog -->

                <?php if($_SESSION['user']['levelUser'] >= 4 || @isset($_SESSION['organisation']['idOrganisation'])){ ?>
                <!-- Publier -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12"
                       href="#" data-hssm-target="#subMenu3">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-write"></i>
                        </span>
                        <span class="media-body align-self-center">Déposer une annonce</span>
                        <span class="d-flex align-self-center u-side-nav--control-icon">
                          <i class="hs-admin-angle-right"></i>
                        </span>
                        <span class="u-side-nav--has-sub-menu__indicator"></span>
                    </a>

                    <ul id="subMenu3" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
                        <?php if(@$_SESSION['organisation']['levelOrganisation'] >= 2){ ?>
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12"
                               href="/article/create">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-book"></i>
                                </span>
                                <span class="media-body align-self-center">Publier sur le Blog</span>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if(@$_SESSION['organisation']['levelOrganisation'] >= 2){ ?>
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12"
                               href="/service/create">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-comments-smiley"></i>
                                </span>
                                <span class="media-body align-self-center">Aides/Services</span>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if($_SESSION['user']['levelUser'] >= 2){ ?>
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12"
                               href="/logement/create">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-home"></i>
                                </span>
                                <span class="media-body align-self-center">Logements/Chambres</span>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                <?php } ?>
                <!-- End Annonpublierces -->
                <?php if($_SESSION['user']['levelUser'] >= 4 || @isset($_SESSION['organisation']['idOrganisation'])){ ?>
                    <!-- Publier -->
                    <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
                        <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12"
                           href="#" data-hssm-target="#subMenu4">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-write"></i>
                        </span>
                            <span class="media-body align-self-center">Extraction</span>
                            <span class="d-flex align-self-center u-side-nav--control-icon">
                          <i class="hs-admin-angle-right"></i>
                        </span>
                            <span class="u-side-nav--has-sub-menu__indicator"></span>
                        </a>

                        <ul id="subMenu4" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
                            <?php if(@$_SESSION['organisation']['levelOrganisation'] >= 2){ ?>
                                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                                    <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12"
                                       href="/dl-users">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-book"></i>
                                </span>
                                        <span class="media-body align-self-center">Utilisateurs</span>
                                    </a>
                                </li>
                            <?php } ?>
                            <?php if(@$_SESSION['organisation']['levelOrganisation'] >= 2){ ?>
                                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                                    <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12"
                                       href="/dl-services">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-comments-smiley"></i>
                                </span>
                                        <span class="media-body align-self-center">Services</span>
                                    </a>
                                </li>
                            <?php } ?>
                            <?php if($_SESSION['user']['levelUser'] >= 2){ ?>
                                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                                    <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12"
                                       href="/dl-logements">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-home"></i>
                                </span>
                                        <span class="media-body align-self-center">Logements</span>
                                    </a>
                                </li>
                            <?php } ?>
                            <?php if($_SESSION['user']['levelUser'] >= 2){ ?>
                                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                                    <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12"
                                       href="/dl-news">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-home"></i>
                                </span>
                                        <span class="media-body align-self-center">News</span>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php } ?>
                <!-- End Annonpublierces -->
                <!-- Création organisation -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12"
                       href="/organisation/create">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-book"></i>
                        </span>
                        <span class="media-body align-self-center">Créer une organisation</span>
                    </a>
                </li>
                <!-- End Création organisation -->
            </ul>
        </div>
        <!-- End Sidebar Nav -->
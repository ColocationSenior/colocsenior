<?php
$GLOBALS['view']['title'] = "Erreur 404";
include('includes/header.php') ?>
<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
    <div class="g-pa-20">

        <div class="media justify-content-center">
            <div class=" justify-content-md-center">
                <h1 class="g-font-weight-500 g-font-size-24 g-color-black mb-0">Une erreur est survenue car cette page
                    n'existe pas !</h1>
            </div>
        </div>
        <hr class="d-flex g-brd-gray-light-v7 g-my-200">
        <div class="row justify-content-lg-center g-my-200">

            <div class="col-xl-3 col-md-6 g-mb-30 mt-xl-5">
                <div class="card g-brd-gray-light-v7 rounded">
                    <header
                        class="card-header g-bg-transparent g-brd-bottom-none g-pa-60 g-pa-30--sm justify-content-center">
                        <h3 class="g-font-weight-900 g-font-size-20 g-color-black g-mb-15">Page introuvable!</h3>
                    </header>
                    <hr class="d-flex g-brd-gray-light-v7 g-mx-0 g-mx-30--sm my-0 p-b-10">
                    <div class="card-block g-px-20 g-px-30--sm g-py-15 g-py-20--sm"
                        style="height:208px;overflow:hidden;background:url('/files/pictures/404.png') center center;background-size:cover;">
                    </div>
                </div>
                <hr class="d-flex g-brd-gray-light-v7 g-my-20">
                <div class="row justify-content-center">
                    <a href="/"><span
                            class="u-tags-v1 text-center g-width-600 g-brd-around g-bg-green g-color-white g-rounded-10 g-py-4 g-px-15"
                            style="height:108px;overflow:hidden;background:url('/assets/img/logo/colocsenior_inline.png') center center;background-size:cover;"></span></a>


                </div>
            </div>
        </div>







    </div>
</div>

<?php include('includes/footer.php') ?>
<?php
$GLOBALS['view']['title'] = "Écrire un article";
include('includes/header.php') ?>

    <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
        <div class="g-pa-20">
            <div class="row">
                <div class="col-md-12">
                    <div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
                        <form class="js-validate" novalidate="novalidate" method="post" action="/article/post" name="articleForm" enctype='multipart/form-data'>
                            <header>
                                <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Nouvel article</h2>
                            </header>

                            <div class="form-group g-mb-30 g-mt-30">
                                <label class="g-mb-10" for="inputGroup-1_1">Titre de l'article</label>

                                <div class="g-pos-rel">
                                    <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                        <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                                    </span>
                                    <input id="inputGroup-1_1" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10"
                                           type="text" name="title">
                                </div>
                            </div>

                            <div class="form-group">
                                <h4 class="h6 g-font-weight-400 g-color-black g-mb-20">Image de couverture</h4>

                                <div class="input-group u-file-attach-v1 g-brd-gray-light-v2">
                                    <input class="form-control h-100 form-control-md rounded-0" required placeholder="Choisissez une photo" readonly="" type="text">

                                    <div class="input-group-btn">
                                        <button class="btn btn-md h-100 u-btn-primary rounded-0" type="submit">Parcourir</button>
                                        <input type="file" name="cover" required accept=".jpg, .jpeg, .png">
                                    </div>
                                </div>
                            </div><br>

                            <div class="form-group">
                                <h4 class="h6 g-font-weight-400 g-color-black g-mb-20">Corps de l'article</h4>

                                <div class="js-text-editor" id="summernote" data-height="350" data-placeholder="Écrivez ici"></div>
                            </div>

                            <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">
                            <input type="hidden" name="content"/>
                            <div>
                                <button onclick="postForm()" class="btn btn-md btn-xl--md u-btn-secondary g-width-160--md g-font-size-12 g-font-size-default--md g-mb-10" type="submit">Publier</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php') ?>

<script>
    function postForm(){
        let markupStr = $('#summernote').summernote('code');
        $('input[name="content"]').val(markupStr);
    }
</script>

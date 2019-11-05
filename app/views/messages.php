<?php
$GLOBALS['view']['title'] = "Mes messages";
include('includes/header.php') ?>

<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
    <div class="g-pa-20">
        <div class="card">
            <div class="row no-gutters">
                <div class="col-lg-5 w-100 g-brd-right--lg g-brd-gray-light-v7">
                    <header class="g-brd-bottom g-brd-gray-light-v4 g-px-15 g-px-25--lg">
                        <h3 class="g-font-weight-500 g-font-size-24 g-color-black" style="padding:25px 0 20px 0">Vos contacts</h3>
                    </header>

                    <div class="js-custom-scroll-horizontal js-custom-scroll g-height-59_5vh--lg">
                        <!-- Chat List -->
                        <div class="d-flex d-lg-block g-brd-bottom g-brd-none--lg g-brd-gray-light-v4 g-overflow-x-auto">

                            <!-- Chat List Item -->
                            <section class="media justify-content-center g-bg-gray-light-v8--active g-brd-bottom--lg g-brd-gray-light-v4 g-pa-15 g-pa-25--lg">
                                <!-- Chat List Item: Avatar -->
                                <div class="d-flex g-mr-20--lg">
                                    <span class="d-inline-block g-pos-rel">
                                        <img class="rounded-circle g-width-45 g-width-55--lg g-height-45 g-height-55--lg" src="../../assets/img-temp/200x200/img2.jpg" alt="Image Description">
                                    </span>
                                </div>
                                <!-- End Chat List Item: Avatar -->

                                <div class="media-body align-self-center g-hidden-md-down">
                                    <div class="media g-mb-10">
                                        <!-- Chat List Item: Name -->
                                        <h3 class="d-flex align-self-center g-font-size-16 g-font-weight-400 mb-0">Benjamin FILAM</h3>
                                        <!-- End Chat List Item: Name -->

                                        <!-- Chat List Item: Time -->
                                        <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-gray-light-v1 ml-auto">
                                            <i class="hs-admin-time icon-clock g-mr-5"></i>
                                            <small>14h51</small>
                                        </em>
                                        <!-- End Chat List Item: Time -->
                                    </div>

                                    <div class="media">
                                        <p class="media-body mb-0">Merci de m'avoir ajouté !</p>

                                        <!-- Chat List Item: Unread Messages -->
                                        <!--<div class="d-flex align-self-center justify-content-center g-min-width-35 g-bg-secondary g-font-size-12 g-color-white g-rounded-15 g-px-8 g-py-1 ml-auto">Non lu</div>-->
                                        <!-- End Chat List Item: Unread Messages -->
                                    </div>
                                </div>
                            </section>
                            <!-- End Chat List Item -->
                        </div>
                        <!-- End Chat List -->
                    </div>
                </div>

                <!-- Chat. Message Area. -->
                <div class="col-lg-7">

                    <!-- Chat. Message Area. Header. -->
                    <header class="g-px-15 g-px-25--lg">
                        <div class="media g-height-50 g-height-80--lg">
                            <div class="media-body d-flex align-self-center justify-content-center g-font-size-16--md g-color-black">
                                <a class="g-color-black" href="#">Benjamin FILAM</a>
                            </div>
                        </div>
                    </header>
                    <!-- End Chat. Message Area. Header. -->

                    <hr class="d-flex g-brd-gray-light-v7 g-mx-15 g-mx-25--lg my-0">

                    <!-- Chat. Message Area. Messages. -->
                    <div class="js-custom-scroll g-height-50vh--lg g-pa-15 g-pa-25--lg" id="block_chat">
                        <!-- Chat. Message Area. Message (From). -->
                        <section class="g-mb-30">
                            <div class="media g-mb-12">
                                <!-- Chat. Message Area. Message. Body. -->
                                <div class="media-body">
                                    <div class="d-inline-block g-width-170 g-width-auto--sm g-bg-gray-light-v8 g-font-size-12 g-font-size-default--lg g-color-gray-dark-v6 g-rounded-10 g-pa-10-15">
                                        <p class="mb-0">Bonjour, ravis de faire votre connaissance !</p>
                                    </div>
                                </div>
                                <!-- End Chat. Message Area. Message. Body. -->
                            </div>

                            <!-- Chat. Message Area. Message Time -->
                            <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-gray-light-v1 g-ml-50">
                                <i class="hs-admin-time icon-clock g-mr-5"></i>
                                <small>11h49</small>
                            </em>
                            <!-- End Chat. Message Area. Message Time -->
                        </section>
                        <!-- End Chat. Message Area. Message (From). -->

                        <!-- Chat. Message Area. Message (To). -->
                        <section class="g-mb-30">
                            <div class="media g-mb-12">
                                <!-- Chat. Message Area. Message. Body. -->
                                <div class="media-body">
                                    <div class="d-inline-block g-width-170 g-width-auto--sm g-bg-lightblue-v6 g-font-size-12 g-font-size-default--lg g-color-gray-dark-v6 g-rounded-10 g-pa-10-15">
                                        <p class="mb-0">Moi de même</p>
                                    </div>
                                </div>
                                <!-- End Chat. Message Area. Message. Body. -->
                            </div>
                        </section>
                        <!-- End Chat. Message Area. Message (To). -->
                        <!-- Chat. Message Area. Message (To). -->
                        <section class="g-mb-30">
                            <div class="media g-mb-12">
                                <!-- Chat. Message Area. Message. Body. -->
                                <div class="media-body">
                                    <div class="d-inline-block g-width-170 g-width-auto--sm g-bg-lightblue-v6 g-font-size-12 g-font-size-default--lg g-color-gray-dark-v6 g-rounded-10 g-pa-10-15">
                                        <p class="mb-0">Merci de m'avoir ajouté</p>
                                    </div>
                                </div>
                                <!-- End Chat. Message Area. Message. Body. -->
                            </div>

                            <!-- Chat. Message Area. Message Time -->
                            <em class="d-flex align-self-center align-items-center justify-content-end g-font-style-normal g-color-gray-light-v1 g-mr-50">
                                <i class="hs-admin-time icon-clock g-mr-5"></i>
                                <small>14h52</small>
                            </em>
                            <!-- End Chat. Message Area. Message Time -->
                        </section>
                        <!-- End Chat. Message Area. Message (To). -->
                    </div>
                    <!-- End Chat. Message Area. Messages. -->

                    <footer class="g-bg-gray-light-v8 g-px-15 g-px-30--lg g-py-10 g-py-25--lg">
                        <form action="#" onsubmit="sendMessage()" disabled>
                            <div class="media align-items-top">
                                <div class="media-body g-ml-25">
                                    <textarea class="form-control u-textarea-expandable g-resize-none g-bg-transparent g-brd-none w-100 p-0 g-mt-minus-3" id="areaMessage" placeholder="Écrivez quelque chose"></textarea>
                                </div>

                                <div class="d-flex ml-auto">
                                    <button class="btn btn-link d-flex align-self-top align-items-top u-link-v5 g-color-secondary g-color-secondary--hover p-0 g-ml-15">
                                        <i class="hs-admin-arrow-top-right g-font-size-18 g-line-height-1_4"></i>
                                        <span class="g-hidden-sm-down g-font-weight-300 g-font-size-12 g-font-size-default--md g-ml-4 g-ml-8--md">Envoyer</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </footer>
                </div>
                <!-- End Chat. Message Area. -->
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php') ?>

<script>
    function sendMessage(){
        let currentDate = new Date();
        let stringHeure = currentDate.getHours() + 'h' + currentDate.getMinutes();
        let html = "<section class=\"g-mb-30\">\n" +
            "                            <div class=\"media g-mb-12\">\n" +
            "                                <!-- Chat. Message Area. Message. Body. -->\n" +
            "                                <div class=\"media-body\">\n" +
            "                                    <div class=\"d-inline-block g-width-170 g-width-auto--sm g-bg-lightblue-v6 g-font-size-12 g-font-size-default--lg g-color-gray-dark-v6 g-rounded-10 g-pa-10-15\">\n" +
            "                                        <p class=\"mb-0\">"+$('#areaMessage').val()+"</p>\n" +
            "                                    </div>\n" +
            "                                </div>\n" +
            "                                <!-- End Chat. Message Area. Message. Body. -->\n" +
            "                            </div>\n" +
            "\n" +
            "                            <!-- Chat. Message Area. Message Time -->\n" +
            "                            <em class=\"d-flex align-self-center align-items-center justify-content-end g-font-style-normal g-color-gray-light-v1 g-mr-50\">\n" +
            "                                <i class=\"hs-admin-time icon-clock g-mr-5\"></i>\n" +
            "                                <small>"+stringHeure+"</small>\n" +
            "                            </em>\n" +
            "                            <!-- End Chat. Message Area. Message Time -->\n" +
            "                        </section>";

        $('#mCSB_2').append(html);
        $('#areaMessage').val('');
    }
</script>

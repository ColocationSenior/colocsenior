<?php
$GLOBALS['view']['title'] = "Contacts";
include('includes/header.php') ?>

<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
    <div class="g-pa-20">
        <div class="card">
            <div class="row no-gutters">
                <div class="col-lg-5 w-100 g-brd-right--lg g-brd-gray-light-v7">
                    <header class="g-brd-bottom g-brd-gray-light-v4 g-px-15 g-px-25--lg">
                        <h3 class="g-font-weight-500 g-font-size-24 g-color-black justify-content-center"
                            style="padding:25px 0 20px 0">
                            Contacts</h3>
                    </header>

                    <?php foreach($GLOBALS['view']['contacts'] as $contact){ ?>

                    <div class="js-custom-scroll-horizontal js-custom-scroll g-height-59_4vh--lg">
                        <!-- ContactList -->
                        <div
                            class="d-flex d-lg-block g-brd-bottom g-brd-none--lg g-brd-gray-light-v4 g-overflow-x-auto">

                            <!-- Contact List Item -->
                            <a onclick="showMessageContact()" href="?click=<?=$contact['idContact']?>">
                                <section
                                    class="media justify-content-center g-bg-gray-light-v8--active g-brd-bottom--lg g-brd-gray-light-v4 g-pa-25 g-pa-10--lg">
                                    <!-- Chat List Item: Avatar -->
                                    <div class="d-flex g-mr-20--lg">
                                        <span class="d-inline-block g-pos-rel">
                                            <img class="rounded-circle g-width-45 g-width-55--lg g-height-45 g-height-55--lg"
                                                src="../../assets/img-temp/200x200/img2.jpg" alt="Image Description">
                                        </span>
                                    </div>
                                    <!-- End Contact List Item: Avatar -->

                                    <div class="media-body align-self-center g-hidden-md-down">
                                        <div class="media g-mb-12">
                                            <!-- Contact List Item: Name -->
                                            <h3 class="d-flex align-self-center g-font-size-16 g-font-weight-400 mb-0"
                                                style="color: #222E44;">
                                                <?=$contact['nameContact']?></h3>
                                            <!-- End Contact List Item: Name -->

                                            <!-- Contact List Item: Subject -->
                                            <h3 class="d-flex align-self-center g-font-size-16 g-font-weight-400 mb-0 ml-auto"
                                                style="color: #222E44;">
                                                <?=$contact['subjectContact']?></h3>
                                            <!-- End Contact List Item: Subject -->

                                            <!-- Contact List Item: Time -->
                                            <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-gray-light-v1 ml-auto"
                                                style="color: #222E44;">
                                                <i class="hs-admin-time icon-clock g-mr-5"></i>
                                                <small>14h51</small>
                                            </em>
                                            <!-- End Contact List Item: Time -->
                                        </div>


                                        <!-- End Chat List Item -->


                                </section>
                            </a>

                        </div>
                        <!-- End Chat List -->
                    </div>

                    <?php } ?>

                </div>

                <!-- Chat. Message Area. -->
                <div class="col-lg-7">

                    <!-- Chat. Message Area. Header. -->
                    <header class="g-px-15 g-px-25--lg">
                        <div class="media g-height-50 g-height-80--lg">
                            <?php if (isset($_GET["click"])) { ?>
                            <div
                                class="media-body d-flex align-self-center justify-content-center g-font-size-16--md g-color-black">
                                <a class="g-color-black" href="/profil/show/{idUser}"><?=$contact['nameContact']?></a>
                            </div>
                        </div>
                    </header>
                    <!-- End Chat. Message Area. Header. -->

                    <hr class="d-flex g-brd-gray-light-v7 g-mx-15 g-mx-25--lg my-0">

                    <!-- Chat. Message Area. Messages. -->
                    <div class="js-custom-scroll g-height-50vh--lg g-pa-15 g-pa-25--lg" id="block_chat">
                        <!-- Chat. Message Area. Message (From). -->
                        <section class="g-mb-30">
                            <div class="media g-mb-10">
                                <!-- Chat. Message Area. Message. Body. -->
                                <div class="media-body align-self-center">
                                    <div
                                        class="d-flex align-self-center  g-width-auto--sm g-bg-gray-light-v8 g-font-size-18 g-font-size-default--lg g-color-gray-dark-v6 g-rounded-10 g-pa-10-15 mb-0">
                                        <p class=""><?=$contact['subjectContact']?></p>
                                    </div> <br>
                                    <div
                                        class="d-flex align-self-center g-width-auto--sm g-bg-gray-light-v8 g-font-size-18 g-font-size-default--lg g-color-gray-dark-v6 g-rounded-10 g-pa-10-15 ml-auto">
                                        <p class=""><?=$contact['emailContact']?></p>
                                    </div> <br>
                                    <div
                                        class="d-flex align-self-center g-width-auto--sm g-bg-gray-light-v8 g-font-size-12 g-font-size-default--lg g-color-gray-dark-v6 g-rounded-10 g-pa-10-15  ml-auto">
                                        <p class=""><?=$contact['contentContact']?></p>
                                    </div>
                                </div>
                                <!-- End Chat. Message Area. Message. Body. -->
                            </div>
                            
                                <div class="media align-items-top">
                                    <div class="media-body g-ml-25">

                                        <div class="d-flex ml-auto">

                                            <!-- Contact List Item: Email -->
                                            <button
                                                class="btn btn-link d-flex align-self-top align-items-top u-link-v5 g-color-secondary g-color-secondary--hover p-0 g-ml-15 g-mt-28">
                                                <i
                                                    class="hs-admin-arrow-top-right g-font-size-18 g-line-height-1_4"></i>
                                                <span
                                                    class="g-hidden-sm-down g-font-weight-300 g-font-size-12 g-font-size-default--md  g-ml-4 g-ml-8--md">
                                                    <a style="color: #66CCE4; font-weight: bold;"
                                                        href="mailto:<?=$contact['emailContact']?>">Répondre à
                                                        <?=$contact['nameContact']?></a>
                                                </span>
                                            </button>
                                            <!-- End Contact List Item: Email -->
                                        </div>
                                    </div>
                                </div>
                            
                        </section>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php') ?>
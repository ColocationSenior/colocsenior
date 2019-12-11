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
                            <a
                                onclick="showMessageContact('<?=htmlspecialchars(addslashes($contact['nameContact']))?>','<?=$contact['emailContact']?>','<?=htmlspecialchars(addslashes($contact['subjectContact']))?>','<?=htmlspecialchars(json_encode(addslashes($contact['contentContact'])))?>')">
                                <section
                                    class="media justify-content-center g-bg-gray-light-v8--active g-brd-bottom--lg g-brd-gray-light-v4 g-pa-25 g-pa-10--lg">
                                    <!-- Contact List Item: Avatar -->
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
                                            <em id="date"
                                                class="d-flex align-self-center align-items-center g-font-style-normal g-color-gray-light-v1 ml-auto"
                                                style="color: #222E44;">
                                                <i class="hs-admin-time icon-clock g-mr-5"></i>
                                                <small>14h51</small>
                                            </em>
                                            <!-- End Contact List Item: Time -->
                                        </div>
                                        <div class="container d-none  g-mt-28 g-mb-28">
                                            <h3 class="d-flex align-self-center g-font-size-16 g-font-weight-400 mb-0"
                                                style="color: #222E44;">
                                                <?=$contact['contentContact']?>
                                            </h3>
                                            <h3 class="d-none d-flex  align-self-center g-font-size-16 g-font-weight-400 mb-0"
                                                style="color: #222E44;">
                                                <?=$contact['emailContact']?>
                                        </div>
                                    </div>
                                </section>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <!-- Contact. Message Area. -->
                <div class="col-lg-7">

                    <!-- Contact. Message Area. Header. -->

                    <!-- End Contact. Message Area. Header. -->
                    <div class="col-lg-12 w-100 g-brd-right--lg g-brd-gray-light-v7">
                        <header class="g-brd-bottom g-brd-gray-light-v4 g-px-15 g-px-25--lg justify-content-center">
                            <h3 id="titleName" class="g-font-weight-500 g-font-size-24 g-color-black justify-content-center"
                                style="padding:25px 0 20px 0"></h3>
                        </header>
                        
                        <section class="section">
                            <div class="container">


                                <!-- resultat de la recherche -->
                                <div class="media-body align-self-center g-hidden-md-down g-mt-28">
                                    <div class="media g-mb-12">
                                        <h3 id="name"
                                            class="d-flex align-self-center g-font-size-16 g-font-weight-400 mb-0"
                                            style="color: #222E44;"></h3>
                                        <h3 id="subject"
                                            class="d-flex align-self-center g-font-size-16 g-font-weight-400 mb-0 ml-auto mr-auto"
                                            style="color: #222E44;"></h3>
                                    </div>
                                    <div class="container g-mt-28 g-mb-28">
                                        <h3 id="message"
                                            class="d-flex align-self-center g-font-size-16 g-font-weight-400 mb-0"
                                            style="color: #222E44;"></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-auto">
                                    <button class="btn btn-link d-flex align-self-top align-items-top u-link-v5 g-color-secondary g-color-secondary--hover p-0 g-ml-15">
                                        <i class="hs-admin-arrow-top-right g-font-size-18 g-line-height-1_4"></i>
                                        <span class="g-hidden-sm-down g-font-weight-300 g-font-size-12 g-font-size-default--md g-ml-4 g-ml-8--md">
                                        <a id="email" href="">Répondre à <span id="response"></span> </a>
                                        </span>
                                    </button>
                                </div>

                        </section>



                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showMessageContact(name, email, subject, content) {
            console.log(name + subject + content);
            document.getElementById("titleName").innerHTML = name;
            document.getElementById("name").innerHTML = name;
            document.getElementById("subject").innerHTML = subject;
            document.getElementById("message").innerHTML = content;
            document.getElementById("response").innerHTML = name;
            document.getElementById("email").href = "mailto:"+email;



        }
    </script>

    <?php include('includes/footer.php') ?>
<style>
    .bloc-select-conv{
        cursor: pointer;
    }
    .bloc-select-conv:hover{
        background: #E0E1E0;
    }
    #contentConversation{
        overflow: scroll !important;
    }
</style>
<?php
include('includes/header.php') ?>

    <div class="g-pa-20">
        <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">Messagerie instantanée</h1>

        <div class="card">
            <div class="row no-gutters">
                <div class="col-lg-5 w-100 g-brd-right--lg g-brd-gray-light-v7">
                    <header class="g-brd-bottom g-brd-gray-light-v4 g-px-15 g-px-25--lg" style="display:none;">
                        <!-- Chat Search -->
                        <form action="#">
                            <div class="input-group g-pos-rel g-height-50 g-height-80--lg">
                                <input class="form-control form-control-md g-brd-none p-0 g-pr-40" type="text" placeholder="Search for contacts">
                                <button type="submit" class="btn rounded-0 u-btn-outline-primary g-brd-none g-bg-transparent--hover g-pos-abs g-top-0 g-right-0 d-flex g-width-40 h-100 align-items-center justify-content-center g-font-size-18 g-z-index-2 g-color-primary"><i class="hs-admin-search"></i>
                                </button>
                            </div>
                        </form>
                        <!-- End Chat Search -->
                    </header>

                    <div class="js-custom-scroll-horizontal js-custom-scroll g-height-59_5vh--lg">
                        <!-- Chat List -->
                        <div class="d-flex d-lg-block g-brd-bottom g-brd-none--lg g-brd-gray-light-v4 g-overflow-x-auto">

                            <!-- Chat List Item -->
                        <?php foreach($GLOBALS['view']['conversations'] as $conversation) { ?>
                        <section class="media justify-content-center g-bg-gray-light-v8--active g-brd-bottom--lg g-brd-gray-light-v4 g-pa-15 g-pa-25--lg bloc-select-conv" style="cursor: pointer" onclick="openChat(<?=$conversation['idConversation']?>,'<?=$conversation['userName']?>')">
                                <!-- Chat List Item: Avatar -->
                                <div class="d-flex g-mr-20--lg">
                          <span class="d-inline-block g-pos-rel">
                          <img class="rounded-circle g-width-45 g-width-55--lg g-height-45 g-height-55--lg" src="../../files/profile/<?=$conversation['userPic']?>" alt="Image Description">
                          </span>
                                </div>
                                <!-- End Chat List Item: Avatar -->

                                <div class="media-body align-self-center g-hidden-md-down">
                                    <div class="media g-mb-10">
                                        <!-- Chat List Item: Name -->
                                        <h3 class="d-flex align-self-center g-font-size-16 g-font-weight-400 mb-0"><?=$conversation['userName']?></h3>
                                        <!-- End Chat List Item: Name -->

                                        <!-- Chat List Item: Time -->
                                        <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-gray-light-v1 ml-auto">
                                            <i class="hs-admin-time icon-clock g-mr-5"></i>
                                            <small><?=$conversation['dateMessage']?></small>
                                        </em>
                                        <!-- End Chat List Item: Time -->
                                    </div>

                                    <div class="media">
                                        <p class="media-body mb-0"><?=$conversation['lastMessage']?></p>
                                    </div>
                                </div>
                            </section>
                            <?php } ?>
                            <!-- End Chat List Item -->
                        </div>
                        <!-- End Chat List -->
                    </div>
                </div>

                <!-- Chat. Message Area. -->
                <div class="col-lg-7" id="bloc_conversation" style="display:none;">

                    <!-- Chat. Message Area. Header. -->
                    <header class="g-px-15 g-px-25--lg">
                        <div class="media g-height-50 g-height-80--lg">
                            <div class="media-body d-flex align-self-center justify-content-center g-font-size-16--md g-color-black">
                                <a class="g-color-black" id="titleConversation" href="#!"></a>
                            </div>
                        </div>
                    </header>
                    <!-- End Chat. Message Area. Header. -->

                    <hr class="d-flex g-brd-gray-light-v7 g-mx-15 g-mx-25--lg my-0">

                    <!-- Chat. Message Area. Messages. -->
                    <div id="contentConversation" class="js-custom-scroll g-height-50vh--lg g-pa-15 g-pa-25--lg">

                    </div>
                    <!-- End Chat. Message Area. Messages. -->

                    <footer class="g-bg-gray-light-v8 g-px-15 g-px-30--lg g-py-10 g-py-25--lg">
                        <form action="#!">
                            <div class="media align-items-top">
                                <div class="d-flex">
                                </div>

                                <div class="media-body g-ml-25">
                                    <textarea id="contentToSend" class="form-control u-textarea-expandable g-resize-none g-bg-transparent g-brd-none w-100 p-0 g-mt-minus-3" placeholder="Écrivez votre message"></textarea>
                                </div>

                                <div class="d-flex ml-auto">
                                    <button class="btn btn-link d-flex align-self-top align-items-top u-link-v5 g-color-secondary g-color-secondary--hover p-0 g-ml-15">
                                        <i class="hs-admin-arrow-top-right g-font-size-18 g-line-height-1_4"></i>
                                        <span onclick="sendMessage()" class="g-hidden-sm-down g-font-weight-300 g-font-size-12 g-font-size-default--md g-ml-4 g-ml-8--md">Envoyer</span>
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

<?php include('includes/footer.php') ?>

<script>
    let activeId = null;
    let activeName = null;
    function openChat(idConv, nameUser){
        $( "#bloc_conversation" ).show();

        let url = "/chat/get/" + idConv;
        $.get(url, function(data, status){
            $("#contentConversation").html(data);
        });

        $("#titleConversation").html(nameUser);
        activeId = idConv;
        activeName = nameUser;

        $("#contentConversation").animate({ scrollTop: $(document).height() }, 1000);

        setInterval(function(){ openChat(activeId,activeName); }, 10000);
    }

    function sendMessage(){
        let message = $("#contentToSend").val();
        $("#contentToSend").val("");

        let url = "/chat/post/" + activeId;
        $.post(url,
            {
                content: message
            },
            function(data, status){
                $("#contentConversation").html(data);
            });
    }
</script>

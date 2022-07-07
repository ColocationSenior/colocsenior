<?php
$GLOBALS['view']['messages'] = array_reverse($GLOBALS['view']['messages']);
foreach($GLOBALS['view']['messages'] as $messages){
    if($messages['fromMessage'] == $_SESSION['user']['idUser']){
?>

<!-- Chat. Message Area. Message (To). -->
<section class="g-mb-30">
    <div class="media g-mb-12">
        <!-- Chat. Message Area. Message. Body. -->
        <div class="media-body">
            <div class="d-inline-block g-width-170 g-width-auto--sm g-bg-lightblue-v6 g-font-size-12 g-font-size-default--lg g-color-gray-dark-v6 g-rounded-10 g-pa-10-15">
                <p class="mb-0"><?=$messages['contentMessage']?></p>
            </div>
        </div>
        <!-- End Chat. Message Area. Message. Body. -->

        <!-- Chat. Message Area. Message. Avatar. -->
        <div class="d-flex align-self-end g-ml-12">
            <img class="rounded-circle g-width-36 g-height-36" src="../../files/profile/<?=$GLOBALS['view']['usersConversation']['to']?>" alt="Image Description">
        </div>
        <!-- End Chat. Message Area. Message. Avatar. -->
    </div>

    <!-- Chat. Message Area. Message Time -->
    <em class="d-flex align-self-center align-items-center justify-content-end g-font-style-normal g-color-gray-light-v1 g-mr-50">
        <i class="hs-admin-time icon-clock g-mr-5"></i>
        <small><?=$messages['heureMessage']."H".$messages['minutesMessage']." ".$messages['jourMessage']."/".$messages['moisMessage']."/".$messages['anneeMessage']?></small>
    </em>
    <!-- End Chat. Message Area. Message Time -->
</section>
<!-- End Chat. Message Area. Message (To). -->

<?php } else { ?>

<!-- Chat. Message Area. Message (From). -->
<section class="g-mb-30">
    <div class="media g-mb-12">
        <!-- Chat. Message Area. Message. Avatar. -->
        <div class="d-flex align-self-end g-mr-12">
            <img class="rounded-circle g-width-36 g-height-36" src="../../files/profile/<?=$GLOBALS['view']['usersConversation']['from']?>" alt="Image Description">
        </div>
        <!-- End Chat. Message Area. Message. Avatar. -->

        <!-- Chat. Message Area. Message. Body. -->
        <div class="media-body">
            <div class="d-inline-block g-width-170 g-width-auto--sm g-bg-gray-light-v8 g-font-size-12 g-font-size-default--lg g-color-gray-dark-v6 g-rounded-10 g-pa-10-15">
                <p class="mb-0"><?=$messages['contentMessage']?></p>
            </div>
        </div>
        <!-- End Chat. Message Area. Message. Body. -->
    </div>

    <!-- Chat. Message Area. Message Time -->
    <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-gray-light-v1 g-ml-50">
        <i class="hs-admin-time icon-clock g-mr-5"></i>
        <small><?=$messages['heureMessage']."H".$messages['minutesMessage']." ".$messages['jourMessage']."/".$messages['moisMessage']."/".$messages['anneeMessage']?></small>
    </em>
    <!-- End Chat. Message Area. Message Time -->
</section>
<!-- End Chat. Message Area. Message (From). -->

<?php }}?>
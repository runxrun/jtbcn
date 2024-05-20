<?php
include ('recommend-list-activities.php');
include ('recommend-list-packages.php');
include ('recommend-list-tickets.php');
include ('recommend-list-hotels.php');
?>
<div class="bg-white">
    <div class="container py-4">
        <div class="row g-3">
            <div class="col-12">
                <div class="pb-3 fs-5 fw-bold text-dark">
                    <?php echo getTS('_Activities', $lang, $mlangs); ?>
                </div>
                <?php include ('recommend-html-activities.php'); ?>
            </div>
            <div class="col-12">
                <div class="pb-3 fs-5 fw-bold text-dark">
                    <?php echo getTS('_Packages', $lang, $mlangs); ?>
                </div>
                <?php include ('recommend-html-package.php'); ?>
            </div>
            <div class="col-12">
                <div class="pb-3 fs-5 fw-bold text-dark">
                    <?php echo getTS('_Tickets', $lang, $mlangs); ?>
                </div>
                <?php include ('recommend-html-ticket.php'); ?>
            </div>
            <div class="col-12">
                <div class="pb-3 fs-5 fw-bold text-dark">
                    <?php echo getTS('_Hotels', $lang, $mlangs); ?>
                </div><?php include ('recommend-html-hotel.php'); ?>
            </div>
        </div>
    </div>
</div>
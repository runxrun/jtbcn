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
        <?php include ('recommend-html-activities.php'); ?>
      </div>
      <div class="col-12">
        <?php include ('recommend-html-package.php'); ?>
      </div>
      <div class="col-12">
        <?php include ('recommend-html-ticket.php'); ?>
      </div>
      <div class="col-12"><?php include ('recommend-html-hotel.php'); ?></div>
    </div>
  </div>
</div>
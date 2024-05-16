<?php
include('recommend-list-activities.php');
include('recommend-list-packages.php');
include('recommend-list-tickets.php');
include('recommend-list-hotels.php');
?>
<div class="bg-white d-none">
  <div class="container py-4">
    <div class="row g-3">
      <div class="col-12"><?php print_r($recommend_activity); ?></div>
      <div class="col-12"><?php print_r($recommend_package); ?></div>
      <div class="col-12"><?php print_r($recommend_ticket); ?></div>
      <div class="col-12"><?php print_r($recommend_hotel); ?></div>
    </div>
  </div>
</div>
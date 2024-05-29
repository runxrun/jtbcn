<?php
include('recommend-list-activities.php');
include('recommend-list-packages.php');
include('recommend-list-jrpass.php');
include('recommend-list-tickets.php');
include('recommend-list-hotels.php');
?>
<div class="bg-white">
  <div class="container py-4">
    <div class="row g-3">
      <div class="col-12">
        <div class="pb-3 fs-5 fw-bold text-dark">
          <?php echo getTS('_RecommendedActivities', $lang, $mlangs); ?>
        </div>
        <?php include('recommend-html-activities.php'); ?>
      </div>
      <div class="col-12">
        <div class="pb-3 fs-5 fw-bold text-dark">
          <?php echo getTS('_RecommendedPackages', $lang, $mlangs); ?>
        </div>
        <?php include('recommend-html-package.php'); ?>
      </div>
      <div class="col-12">
        <div class="pb-3 fs-5 fw-bold text-dark">
          <?php echo getTS('_RecommendedJRPass', $lang, $mlangs); ?>
        </div>
        <?php include('recommend-html-jrpass.php'); ?>
      </div>
      <div class="col-12">
        <div class="pb-3 fs-5 fw-bold text-dark">
          <?php echo getTS('_RecommendedTickets', $lang, $mlangs); ?>
        </div>
        <?php include('recommend-html-ticket.php'); ?>
      </div>
      <div class="col-12">
        <div class="pb-3 fs-5 fw-bold text-dark">
          <?php echo getTS('_RecommendedHotels', $lang, $mlangs); ?>
        </div>
        <?php include('recommend-html-hotel.php'); ?>
      </div>
    </div>
  </div>
</div>
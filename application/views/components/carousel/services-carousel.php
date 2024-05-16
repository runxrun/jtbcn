<?php

$banners_activities = [
  ['image' => 'alberta-2297204_1920.jpg', 'position' => 'rn-imgcover-center', 'first' => 'active'],
  ['image' => 'pavilion-6023429_1920.jpg', 'position' => 'rn-imgcover-center', 'first' => ''],
];

?>
<?php

$banners_activities = [
  ['image' => 'alberta-2297204_1920.jpg', 'position' => 'rn-imgcover-center', 'first' => 'active'],
  ['image' => 'pavilion-6023429_1920.jpg', 'position' => 'rn-imgcover-center', 'first' => ''],
];

$selected_banners = $banners_activities;

?>
<div class="bg-white pb-4">
  <div id="carouselJTBCA" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <?php
      $path = '/application/images/banners/';
      foreach ($selected_banners as $key => $item) {
        $banner = $path . $item['image'];
      ?>
        <div class="carousel-item <?php echo $item['position'] . ' ' . $item['first']; ?>" style="background-image: url('<?php echo $banner; ?>');">
          <div class="container">
            <div class="d-none d-lg-flex justify-content-center">
              <img src="/application/images/image-ratio-16-9.gif" class="d-block w-100" alt="...">
            </div>
            <div class="d-flex d-lg-none">
              <img src="/application/images/image-ratio-3-4.gif" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
    <button class="carousel-control-prev d-none d-md-block" type="button" data-bs-target="#carouselJTBCA" data-bs-slide="prev" style="z-index: 3;">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next d-none d-md-block" type="button" data-bs-target="#carouselJTBCA" data-bs-slide="next" style="z-index: 3;">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="pb-5">
    <div class="position-relative">
      <div class="position-absolute w-100 start-0 " style="bottom: -3rem; z-index: 2;">
        <div class="container">
          <div class="bg-white rounded shadow-sm border-bottom border-3 border-primary">
            <!-- border-bottom border-2 border-primary -->
            <?php
            include(__dir__ . '/../../includes/search-tab-services.php');
            include(__dir__ . '/../../includes/search-activity.php');
            include(__dir__ . '/../../includes/search-recommedn-activity.php');
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
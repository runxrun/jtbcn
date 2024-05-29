<?php

if (strtoupper($currentPage[0]) === "ACTIVITIES") {
  $banners = [
    ['image' => 'alberta-2297204_1920.jpg', 'position' => 'rn-imgcover-center', 'first' => 'active'],
    ['image' => 'pavilion-6023429_1920.jpg', 'position' => 'rn-imgcover-center', 'first' => ''],
  ];
}

if (strtoupper($currentPage[0]) === "PACKAGES") {
  $banners = [
    ['image' => 'islands-7153472_1920.jpg', 'position' => 'rn-imgcover-center', 'first' => 'active'],
  ];
}

if (strtoupper($currentPage[0]) === "JRPASS") {
  $banners = [
    ['image' => 'shinkansen-5237269_1920.jpg', 'position' => 'rn-imgcover-center', 'first' => 'active'],
    ['image' => 'japan-3523393_1920.jpg', 'position' => 'rn-imgcover-center', 'first' => ''],
  ];
}

if (strtoupper($currentPage[0]) === "TICKETS") {
  $banners = [
    ['image' => 'usj-1914934_1920.jpg', 'position' => 'rn-imgcover-center', 'first' => 'active'],
  ];
}

if (strtoupper($currentPage[0]) === "HOTELS") {
  $banners = [
    ['image' => 'japan-1841199_1920.jpg', 'position' => 'rn-imgcover-center', 'first' => 'active'],
    ['image' => 'sakura-3381105_1920.jpg', 'position' => 'rn-imgcover-center', 'first' => ''],
    ['image' => 'kimono-1986487_1920.jpg', 'position' => 'rn-imgcover-center', 'first' => ''],
  ];
}

$selected_banners = $banners;

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
      <div class="position-absolute w-100 start-0 " style="bottom: -3rem; z-index: 9;">
        <div class="container">
          <div class="bg-white rounded shadow-sm border-bottom border-3 border-primary">
            <!-- border-bottom border-2 border-primary -->
            <?php

            switch(strtoupper($currentPage[0])) {
              case "ACTIVITIES": $pathSearch = '/../../includes/search-activity.php'; break;
              case "PACKAGES": $pathSearch = '/../../includes/search-package.php'; break;
              case "JRPASS": $pathSearch = '/../../includes/search-jrpass.php'; break;
              case "TICKETS": $pathSearch = '/../../includes/search-ticket.php'; break;
              case "HOTELS": $pathSearch = '/../../includes/search-hotel.php'; break;
            }

            include(__dir__ . '/../../includes/search-tab-services.php');
            include(__dir__ . $pathSearch);
            include(__dir__ . '/../../includes/search-recommend-jrpass.php');
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
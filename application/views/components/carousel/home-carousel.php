<div class="position-relative w-100">
  <?php
  if (
    $currentPage[0] === "" ||
    strtoupper($currentPage[0]) === "?LANG=JP" ||
    strtoupper($currentPage[0]) === "?LANG=EN"
  ) {
    $banners = [
      ['image' => 'buildings-2297210_1920.jpg', 'position' => 'rn-imgcover-top', 'first' => 'active'],
      ['image' => 'ski-slope-3184931_1920.jpg', 'position' => 'rn-imgcover-top', 'first' => ''],
      ['image' => 'mountain-477832_1920.jpg', 'position' => 'rn-imgcover-center', 'first' => ''],
    ];
  }

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

  if (strtoupper($currentPage[0]) === "JAPAN-RAIL-PASS") {
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

  if (
    strtoupper($currentPage[0]) === 'ACTIVITIES' ||
    strtoupper($currentPage[0]) === 'TICKETS' ||
    strtoupper($currentPage[0]) === 'PACKAGES' ||
    strtoupper($currentPage[0]) === 'JAPAN-RAIL-PASS' ||
    strtoupper($currentPage[0]) === 'HOTELS'
  ) {
    include_once(__dir__ . '/../searchbox/home_container.php');
  }
  ?>  
  <div id="carouselJTBCA" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <?php
      $path = '/application/images/banners/';
      foreach ($banners as $key => $item) {
        $banner = $path . $item['image'];
      ?>
        <div class="carousel-item <?php echo $item['position'] . ' ' . $item['first']; ?>" style="background-image: url('<?php echo $banner; ?>');">
          <div class="container">
            <div class="d-none d-md-flex">
              <img src="/application/images/image-ratio-16-9.gif" class="d-block w-100" alt="...">
            </div>
            <div class="d-flex d-md-none">
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
</div>
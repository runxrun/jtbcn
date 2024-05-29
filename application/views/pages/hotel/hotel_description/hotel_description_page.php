<div class="bg-light">
  <div class="position-relative">
    <div class="container py-4">
      <div class="bg-primary position-absolute top-0 start-0 w-100 rn-hcal-sm" style="z-index: 1"></div>
      <div class="position-relative bg-white shadow-sm rounded-1 border-bottom" style="z-index: 2;">
        <?php include(__DIR__ . '/../../../includes/search-hotel.php'); ?>
      </div>
    </div>
  </div>
</div>
<div class="bg-light">
  <div class="container">
    <?php include(__DIR__ . '/../../../includes/breadcrumb-services.php'); ?>
    <div class="pb-3">
      <div class="row gy-2 gx-3 align-items-center">
        <div class="col-auto">
          <div class="fs-4 text-dark fw-bold">
            Best Western Osaka Tsukamoto
          </div>
        </div>
        <div class="col-auto">
          <div class="fs-8 text-star">
            <div class="d-flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex pt-3 pt-sm-1 pb-1">
        <div class="px-1 fs-7 text-secondary">
          <i class="fas fa-map-marker-alt"></i>
        </div>
        <div class="px-2 fs-7 text-secondary">
          <span>
            2-21-9 Tsukamoto, Yodogawa-Ku, Juso, Osaka, Japan</span>
        </div>
      </div>
      <div class="d-flex pt-3 pt-sm-1 pb-1">
        <div class="px-1 fs-7 text-secondary">
          <i class="fas fa-mobile-alt"></i>
        </div>
        <div class="px-2 fs-7 text-secondary">
          <span>
            XX-532-XX26
          </span>
        </div>
      </div>
    </div>


    <?php
    $hotelGallery = [
      ['pic' => '6e49dada27c8000bb92d5b314f848036.webp'],
      ['pic' => '7e6dc9840cab778ae76024c23279f79c.webp'],
      ['pic' => '016b9c825dc872911b105eb63e663c7e.webp'],
      ['pic' => '61abcff03a647059d5046302aa4254c0.webp'],
      ['pic' => '2615261_17092507000056778497.webp'],
      ['pic' => '384256227.jpg'],
    ];
    ?>
    <div class="pt-2">
      <div class="row g-2">
        <div class="col-12 col-lg-6">
          <div class="h-100">
            <?php
            foreach ($hotelGallery as $key => $item) {
              if ($key == 0) {
                $image = '/application/images/recommend/hotels/' . $item['pic'];
            ?>
                <a href="javascript:void(0)" class="d-block h-100 overflow-hidden rounded-1 rn-imgcover-center" style="background-image: url('<?php echo $image; ?>');">
                  <div class="d-none d-lg-flex">
                    <img src="/application/images/image-ratio-4-3.gif" class="w-100">
                  </div>
                  <div class="d-flex d-lg-none">
                    <img src="assets/images/image-ratio-16-9.gif" class="w-100" />
                  </div>
                </a>
            <?php
              }
            }
            ?>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="row g-2">
            <?php
            foreach ($hotelGallery as $key => $item) {
              if ($key >= 2 && $key <= 5) {
                $image = '/application/images/recommend/hotels/' . $item['pic'];
            ?>
                <div class="col-3 col-lg-6 ">
                  <div style="cursor: pointer">
                    <div href="javascript:void(0)" class="overflow-hidden rounded-1 position-relative rn-imgcover-center" style="background-image: url('<?php echo $image; ?>');">
                      <img src="/application/images/image-ratio-4-3.gif" class="w-100">
                    </div>
                  </div>
                </div>
            <?php
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    <div class="p-0">
      <div class="alert alert-warning rounded-1 mt-3 mb-0 py-3 px-4 fs-7 ">
        <div class="row g-2 align-items-center">
          <div class="col-6 col-lg-4 col-xl-auto">
            <div class="d-flex">
              <div class="pe-2"><i class="fas fa-wifi"></i></div>
              <div class="pe-4"> WIFI </div>
            </div>
          </div>
          <div class="col-6 col-lg-4 col-xl-auto">
            <div class="d-flex">
              <div class="pe-2"><i class="fas fa-utensils"></i></div>
              <div class="pe-4"> Restaurant </div>
            </div>
          </div>
          <div class="col-6 col-lg-4 col-xl-auto">
            <div class="d-flex opacity-25">
              <div class="pe-2"><i class="fas fa-dumbbell"></i></div>
              <div class="pe-4"> Fitness </div>
            </div>
          </div>
          <div class="col-6 col-lg-4 col-xl-auto">
            <div class="d-flex">
              <div class="pe-2"><i class="fas fa-parking"></i></div>
              <div class="pe-4"> Parking </div>
            </div>
          </div>
          <div class="col-6 col-lg-4 col-xl-auto">
            <div class="d-flex">
              <div class="pe-2"><i class="fas fa-spa"></i></div>
              <div class="pe-4"> Spa &amp; Wellness </div>
            </div>
          </div>
          <div class="col-6 col-lg-4 col-xl-auto">
            <div class="d-flex">
              <div class="pe-2"><i class="fas fa-concierge-bell"></i></div>
              <div class="pe-4"> Room Services </div>
            </div>
          </div>
          <div class="col-6 col-lg-4 col-xl-auto">
            <div class="d-flex">
              <div class="pe-2"><i class="fas fa-tshirt"></i></div>
              <div class="pe-4"> Laundry </div>
            </div>
          </div>
          <div class="col-6 col-lg-4 col-xl-auto">
            <div class="d-flex">
              <div class="pe-2"><i class="fas fa-swimmer"></i></div>
              <div class="pe-4"> Swimming Pool </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="pb-4">
      <div class="border-bottom border-3 border-primary p-0 pt-4"> </div>
      <div class="border bg-white">
        <?php include('hotel_rates.php'); ?>
      </div>
    </div>

    <div class="pb-4">
      <div class="border-bottom border-3 border-primary p-0 pt-4"> </div>
      <div class="border bg-white px-4 fs-7">
        <?php include('hotel_facilities.php'); ?>
      </div>
    </div>

  </div>

</div>
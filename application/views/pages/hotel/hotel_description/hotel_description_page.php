<div class="bg-light border-top">
    <div class="container py-4">
        <div class="pt-4">
            <div class="row align-items-center">
                <div class="col-auto">
                    <a href="javascript:void(0)" class="fs-4 text-sp text-dark fw-bold text-decoration-none">
                        Best Western Osaka Tsukamoto
                    </a>
                </div>
                <div class="col-auto p-0">
                    <div class="fs-8 text-star">
                        <ng-container>
                            <div class="text-star-rating">
                                <ng-container>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </ng-container>
                            </div>
                        </ng-container>
                    </div>
                </div>
            </div>
            <div class="d-flex pt-3 pt-sm-1 pb-1">
                <div class="px-1 fs-7 text-secondary">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="px-2 fs-7 text-secondary">
                    <span>
                        2-21-9 Tsukamoto, Yodogawa-Ku, Juso, Osaka, Japan, </span>
                </div>
            </div>
            <div class="d-flex pt-3 pt-sm-1 pb-1">
                <div class="px-1 fs-7 text-secondary">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <div class="px-2 fs-7 text-secondary">
                    <span>
                        532-0026 - SEE MAP
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




        <div class="row g-2 pt-2">
            <div class="col-12 col-lg-6">
                <div class="h-100">
                    <?php
          foreach ($hotelGallery as $key => $item) {
            if ($key == 0) {
              $image = '/application/images/recommend/hotels/' . $item['pic'];
              ?>
                    <a href="javascript:void(0)" class="d-block h-100 overflow-hidden rounded-1 rn-imgcover-center"
                        style="background-image: url('<?php echo $image; ?>');">
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
                            <div href="javascript:void(0)"
                                class="overflow-hidden rounded-1 position-relative rn-imgcover-center"
                                style="background-image: url('<?php echo $image; ?>');">
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



        <div class="border-bottom border-3 border-primary p-0 pt-4"> </div>
        <div class="border bg-white">
            <?php include (__DIR__ . '/../../../includes/search-hotel.php'); ?>
        </div>

        <div class="pb-4">
            <div class="border-bottom border-3 border-primary p-0 pt-4"> </div>
            <div class="border bg-white">
                <?php include ('hotel_rates.php'); ?>
            </div>
        </div>

        <div class="pb-4">
            <div class="border-bottom border-3 border-primary p-0 pt-4"></div>
            <div class="border bg-white">
                <div class="p-3">
                    <div class="border-bottom mb-3">
                        <div class="bg-white">
                            <?php include ('hotel_facilities.php'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="pb-2 col-12 col-lg-3">
                            <div class="fs-6 font-weight-bold text-dark"> Location Information </div>
                        </div>
                        <div class="pb-4 col-12 col-lg-9">
                            <div class="fs-6 text-secondary rn-content-html pb-1">
                                <div>Lak Si, Don Mueang&nbsp;</div>
                            </div>
                            <div class="fs-7 text-secondary rn-content-html"> 9/9 Vibhavadi Rangsit Road, Laksi,
                                Bangkok, 10210, Bangkok, Thailand </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>
</div>
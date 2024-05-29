<div class="bg-light">
  <div class="position-relative">
    <div class="container py-4">
      <div class="bg-primary position-absolute top-0 start-0 w-100 rn-hcal-sm" style="z-index: 1"></div>
      <div class="position-relative bg-white shadow-sm rounded-1 border-bottom" style="z-index: 2;">
        <?php
        include(__DIR__ . '/../../../includes/search-jrpass.php');
        include(__DIR__ . '/../../../includes/filter-jrpass.php');
        ?>
      </div>
    </div>
  </div>
</div>

<div class="bg-light">
  <div class="container pb-4">

    <div class="py-2">
      <div class="row g-3">
        <div class="col-auto">
          <div class="fs-7 text-dark text-center">
            <i class="fas fa-search"></i>
          </div>
        </div>
        <div class="col-auto">
          <div class="pe-3 fs-7 text-secondary">
            Found 3 Japan Rail Pass in Osaka
          </div>
        </div>
        <div class="col-auto">
          <div class="fs-7 text-dark">
            <i class="fas fa-calendar-alt"></i>
          </div>
        </div>
        <div class="col-auto">
          <div class="pe-3 fs-7 text-secondary">
            28 May 2024
          </div>
        </div>
        <div class="col-auto">
          <div class="fs-7 text-dark">
            <i class="fas fa-user"></i>
          </div>
        </div>
        <div class="col-auto">
          <div class="pe-3 fs-7 text-secondary">
            2 Adults, 0 Child
          </div>
        </div>
      </div>
    </div>

    <?php
    for ($i = 1; $i <= 3; $i++) {
    ?>
    <div class="pt-3">
      <div class="border bg-white rounded-2">
        <div class="row g-0">
          <div class="col-12 col-md-4 col-lg-3">
            <div class="p-3">
              <div class="rn-imgcover-center rounded-2" style="background-image: url('/application/images/recommend/jrpass/osaka-6023336_1280.jpg');">
                <a href="<?php echo '/jrpass/description/keisei-skyliner/TUEyMzAxMDAwXcvb' . $getURLLang; ?>" class="d-flex">
                  <img src="/application/images/image-ratio-4-3.gif" class="w-100">
                </a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-8 col-lg-9">
            <div class="row g-0">
              <div class="col-12 col-lg-8 p-3">
                <div class="row g-3 justify-content-between">
                  <div class="col-9 col-lg-10">
                    <div class="row g-3 align-items-center">
                      <div class="col-auto">
                        <a href="<?php echo '/jrpass/description/keisei-skyliner/TUEyMzAxMDAwXcvb' . $getURLLang; ?>" class="h4 text-decoration-none text-dark text-sp fw-bold">
                          JR West All Area Pass 7 Days – for JR-WEST All Area Pass 7 days
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-3 col-lg-2">
                    <div class="pb-3 text-end">
                      <button class="btn btn-primary py-1 px-2 rounded-1 fs-9 rn-member-blink "> 7 Days </button>
                    </div>
                  </div>
                </div>
                <div class="pt-3">
                  <div class="fs-7 text-secondary">
                    JR West All Area Pass 7 Days – JR-WEST All Area Pass for 7 days, travel ticket for traveling in the Kansai area. and the western region of Japan Can be used an unlimited number of times Within the specified period and service area Convenient and economical There are also many special privileges.
                  </div>
                </div>
                <div class="row">
                  <div class="col pt-3 pb-3">
                    <a href="<?php echo '/jrpass/description/keisei-skyliner/TUEyMzAxMDAwXcvb' . $getURLLang; ?>" class="text-secondary fs-8"> More details </a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-4 pb-3 rn-border-start">
                <div class="pt-3 px-3 fs-8 text-secondary text-start text-md-center ">
                  Start From
                </div>
                <div class="pt-0 px-3 ">
                  <div class="text-title text-dark fw-bold text-start text-md-center">
                    <small class="pe-1 fs-6">CAD</small>
                    <span class="ps-0 fs-4 fw-bold"> 108.00 </span>
                  </div>
                </div>
                <div class="pt-2 px-3 text-start text-md-center ">
                  <div class="fs-8 text-secondary">
                    Excluded taxes &amp; fees
                  </div>
                </div>
                <div class="pt-3 px-3 ">
                  <button target="_blank" class="btn py-2 btn-sm w-100 btn-primary" onclick="window.open('<?php echo '/jrpass/description/keisei-skyliner/TUEyMzAxMDAwXcvb' . $getURLLang; ?>','_parent')">
                    View Rates
                  </button>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    }
    ?>

    <div class="pt-4 pb-5">
      <?php include(__DIR__ . '/../../../includes/pages-navigator.php'); ?>      
    </div>

  </div>
</div>
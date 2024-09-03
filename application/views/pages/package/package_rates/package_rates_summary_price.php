<div class="bg-white mt-4">
  <div class="border-bottom border-3 border-primary p-0"></div>
  <div class="border">
    <div class="p-0">
      <button class="btn border-0 w-100 text-start py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSummaryPrice" aria-expanded="false">
        <div class="d-flex justify-content-between">
          <div class="fs-6 fw-bold text-dark">
            Summary Package Price
          </div>
          <div class="fs-6 text-secondary">
            <i class="fas fa-chevron-down"></i>
          </div>
        </div>
      </button>
    </div>
    <div class="border-top collapse show" id="collapseSummaryPrice">
      <div class="p-3">


        <div class="row g-2">
          <?php for ($room = 1; $room <= 2; $room++) { ?>
            <div class="col-12">
              <div class="row gy-1 gx-4">
                <div class="col-12 col-md-2 col-lg-2 col-xl-1">
                  <div class="pb-2 pb-md-0 fs-7 text-dark fw-bold">
                    Room <?php echo $room; ?>
                  </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3 col-xl-2">

                  <div class="pb-2 pb-lg-0 fs-7 text-dark fw-bold">
                    Twin Sharing Room
                  </div>

                </div>
                <div class="col-12 col-md-6 col-lg-7 col-xl-9">
                  <div class="pb-3 pb-lg-0">
                    <div class="row gy-0 gx-3">
                      <div class="col-12 col-lg-4 col-xl-3">
                        <div class="fs-7 text-secondary">
                          2 Adults x CAD 100.00
                        </div>
                      </div>
                      <div class="col-12 col-lg-4 col-xl-3">
                        <div class="fs-7 text-secondary">
                          1 Children x CAD 50.00
                        </div>
                      </div>
                      <div class="col-12 col-lg-4 col-xl-3">
                        <div class="fs-7 text-secondary">
                          (Child Without Bed)
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="p-3 border-top">
      <div class="row g-3 align-items-end justify-content-between">
        <div class="col-auto">
          <div class="fs-7 text-secondary">
            Current Basket Total
          </div>
          <div class="fs-5 fw-bold text-dark">
            CAD 500.00
          </div>
        </div>
        <div class="col-12 col-md-auto">
          <button class="btn btn-primary w-100 py-2 px-4 rounded-1 fs-7 fw-bold" onclick="window.open('<?php echo '/payment' . $getURLLang; ?>', '_self')">
            Continue
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

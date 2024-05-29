<div class="bg-light">
  <div class="position-relative">
    <div class="container py-4">
      <div class="bg-primary position-absolute top-0 start-0 w-100 rn-hcal-sm" style="z-index: 1"></div>
      <div class="position-relative bg-white shadow-sm rounded-1 border-bottom" style="z-index: 2;">
        <?php include(__DIR__ . '/../../../includes/search-ticket.php'); ?>
      </div>
    </div>
  </div>
</div>
<div class="bg-light">
  <div class="container">
    <?php include(__DIR__ . '/../../../includes/breadcrumb-services.php'); ?>




    <div class="bg-white border-bottom rounded overflow-hidden">
      <div class="row g-0">
        <div class="col-12 col-lg-6">
          <div class="overflow-hidden">
            <img src="https://www.jtbtrip.com/ImageData/Place/keisei-skyliner-e-ticket-th--ma2403000001-general1.jpg" class="w-100">
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="p-4">

            <div class="row g-3">
              <div class="col-12">
                <div class="fs-4 fw-bold text-dark">
                  Keisei Skyliner (E-Ticket) 【TH】
                </div>
              </div>
              <div class="col-12">
                <div class="d-flex">
                  <div class="px-1 fs-7 text-secondary">
                    <i class="fas fa-map-marker-alt"></i>
                  </div>
                  <div class="px-2 fs-7 text-secondary">
                    Osaka, Japan
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="fs-7 text-secondary">
                  Great value tickets that allow you to travel quickly and comfortably,
                  which are the Skyliner limited express ticket that connects Narita Airport
                  and Tokyo and the Tokyo Subway Ticket that allows you to ride all subway lines.
                  Unlimited number of trips within Tokyo within 24 hours, 48 hours, and 72 hours.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    for ($ticket = 1; $ticket <= 2; $ticket++) {
    ?>
      <div class="pt-4">
        <div class="border-top border-3 border-primary">
        </div>
        <button class="btn bg-white rounded-0 w-100 text-start border p-3" data-bs-toggle="collapse" data-bs-target="<?php echo '#service' . $ticket; ?>">
          <div class="d-flex justify-content-between">
            <div class="p-0">
              <div class="row gx-3">
                <div class="col-auto">
                  <div class="fs-7 fw-bold text-dark">
                    Keisei Skyliner Coupon【E-Ticket】
                  </div>
                </div>
                <div class="col-auto">
                  <div class="fs-7 fw-bold text-dark">
                    Time : 0<?php echo $ticket + 7; ?>:00
                  </div>
                </div>
              </div>
            </div>
            <div class="p-0">
              <div class="fs-7 text-dark">
                <i class="fas fa-chevron-down"></i>
              </div>
            </div>
          </div>
        </button>
        <div class="collapse bg-white border-start border-end border-bottom" id="<?php echo 'service' . $ticket; ?>">
          <div class="row g-0">
            <div class="col-12 d-flex flex-wrap">
              <div class="col-12 col-lg-9 p-3">
                <div class="row justify-content-between">
                  <div class="col-9 col-lg-10">
                    <div class="fs-5 text-dark fw-bold">
                      SKYLINER coupon
                    </div>
                  </div>
                  <div class="col-3 col-lg-2">
                    <div class="pb-3 text-end">
                      <button class="btn btn-av py-1 px-2 rounded-1 fs-9 rn-member-blink "> Available </button>
                    </div>
                  </div>
                </div>
                <div class="pb-3 fs-7 text-secondary">
                  The fastest Keisei Skyliner ticket travels from Narita Airport to the city center in 36 minutes.
                </div>
                <div class="pt-3">
                  <div class="border-bottom pb-2 mb-3 fs-6 text-dark fw-bold">
                    Conditions
                  </div>
                  <div class="pb-3 fs-7">
                    For CHILD (6-11 years) tickets, please contact to JTB Canada via Email, LINE, telephone, and SNS message.
                    <br>
                    <br>
                    <b>Where to exchange coupons</b>
                    <br>
                    Skyliner ticket counter (Narita Airport Terminal 1 Station / Narita Airport Terminal 2⋅3 Station)
                    <br>
                    <br>
                    <b>SKYLINER & KEISEI INFORMATION CENTER</b>
                    <br>
                    Keisei Ueno Station (Skyliner ticket counter on the day of purchase) and Nippori Station (Liner ticket counter at the JR transfer gate).
                    <br>
                    <br>
                    * Skyliner Coupon is a one-way service between Narita Airport Terminal 1 Station/Narita Airport Terminal 2・3 Station ⇔ Nippori Station/Keisei Ueno Station, or vice versa.
                    <br>
                    <br>
                    <b>Period for using coupons to exchange cards</b>
                    <br>
                    • Skyliner tickets are valid for 6 months from the date of ticket issuance.
                  </div>
                </div>
                <div class="py-3">
                  <button type="button" id="cancellation_policy" class="btn p-0 fs-7 fw-bold text-danger border-0 shadow-none" data-bs-toggle="modal" data-bs-target="#modalDesc">
                    <div class="d-flex">
                      <div class="pe-2">
                        <i class="fas fa-exclamation-circle"></i>
                      </div>
                      <div>Cancellation policy</div>
                    </div>
                  </button>
                </div>
              </div>
              <div class="col-12 col-lg-3 pb-3 rn-border-start">
                <div class="pt-3 px-3">
                  <div class="pb-2 fs-7 text-rn-primary fw-bold">
                    Price per ticket
                  </div>
                  <div class="pb-3 pt-1 border-top border-bottom">
                    <?php
                    $dataPerson = [
                      [
                        'type' => 'Adults (12+)',
                        'total' => 2,
                        'price' => 21.32,
                        'currency' => 'CAD',
                      ],
                      [
                        'type' => 'Children',
                        'total' => 0,
                        'price' => 18.40,
                        'currency' => 'CAD',
                      ],
                      [
                        'type' => 'Senior (70+)',
                        'total' => 0,
                        'price' => 18.40,
                        'currency' => 'CAD',
                      ],
                    ];

                    foreach ($dataPerson as $key => $item) {
                    ?>
                      <div class="py-2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="">
                            <div class="row g-2">
                              <div class="col-auto fs-7 text-secondary">
                                <?php echo $item['total'] . ' ' . $item['type']; ?>
                              </div>
                              <div class="col-auto fs-7 text-primary">
                                <?php echo $item['currency'] . ' ' . number_format($item['price'], 2); ?>
                              </div>
                            </div>
                          </div>
                          <div class="">
                            <div class="d-flex">
                              <div class="pe-1">
                                <?php
                                $classBtn = $item['total'] == 0 ? 'btn-outline-secondary' : 'btn-outline-dark';
                                $disable = $item['total'] == 0 ? 'disabled' : '';
                                ?>
                                <button class="btn <?php echo $classBtn; ?> border-2 rounded-circle p-0 fw-bold fs-5" style="width: 24px; height: 24px;" <?php echo $disable; ?>>
                                  <div class="d-flex justify-content-center align-items-center p-0 w-100 h-100">-</div>
                                </button>
                              </div>
                              <div class="ps-1">
                                <button class="btn btn-outline-dark border-2 rounded-circle p-0 fw-bold fs-5" style="width: 24px; height: 24px;">
                                  <div class="d-flex justify-content-center align-items-center p-0 w-100 h-100">+</div>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
                <div class="pt-3 px-3 fs-8 text-secondary text-start text-md-center ">
                  Total Price
                </div>
                <div class="pt-0 px-3 ">
                  <div class="text-title text-dark fw-bold text-start text-md-center">
                    <small class="pe-1 fs-6">CAD</small>
                    <span class="ps-0 fs-4 fw-bold"> 42.64</span>
                  </div>
                </div>
                <div class="pt-2 px-3 text-start text-md-center ">
                  <div class="fs-8 text-secondary">
                    Excluded taxes &amp; fees
                  </div>
                </div>
                <div class="pt-3 px-3 ">
                  <button target="_blank" class="btn py-2 btn-sm w-100 btn-primary">
                    Add to cart
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>

    <br>
    <br>
    <br>
    <br>

  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalDesc" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title fs-6 fw-bold text-primary">
          Cancellation Policy
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="pb-2 fs-7 fw-bold">
          15 Mar 2024 - 30 Sep 2024 apply to Keisei Skyliner One-Way + Tokyo Subway Ticket 24 hr.【E-Ticket】
        </div>
        <div class="pb-2 fs-7 text-secondary">
          This reservation is non refundable and can not be amended or cancelled. No refund will be made upon
          cancellation, service date or non arrival (no show). Any extentions for the reservation require a
          new reservation.
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark fs-7 py-2 rounded-1" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
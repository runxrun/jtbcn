<div class="bg-white border-top">

    <div class="container">
        <div class="row g-0">
            <div class="col-auto py-1">
                <button class="btn w-100 py-2 px-0 shadow-none rounded-0 border-0 fs-7 text-secondary"
                    onclick="window.open('/cart', '_self')">
                    <div class="d-flex align-items-center">
                        <div class="pe-2 fs-7 text-secondary"><i class="fas fa-arrow-left"></i></div>
                        <div class="ps-1 fs-7 rn-title text-secondary"> Back </div>
                    </div>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="bg-light border-top">
    <div class="container py-4">
        <div role="alert" class="alert alert-success py-3 px-3">
            <div class="d-flex align-items-center">
                <div class="px-2 fs-7"><i class="fas fa-lock"></i></div>
                <div class="d-flex flex-wrap fs-7">
                    <div class="ps-2 fw-bold"> Secure Hotel Booking </div>
                    <div class="ps-2"> Act fast pricing may change** </div>
                </div>
            </div>
        </div>

        <div class="pb-4">
            <div class="row g-4">
                <div class="col-12 col-lg-8">
                    <?php
          include ('includes/guest-information/sign-up.php');
          include ('includes/pax-detail/pax-detail-hotel.php');
          include ('includes/flight-detail/flight-detail.php');
          ?>

                </div>
                <div class="col-12 col-lg-4">
                    <?php

          print_r($_SESSION);
          include ('includes/booking-detail/activity-booking-detail.php');
          include ('includes/booking-detail/package-booking-detail.php');
          include ('includes/booking-detail/jrpass-booking-detail.php');
          include ('includes/booking-detail/ticket-booking-detail.php');
          include ('includes/booking-detail/hotel-booking-detail.php');

          include ('includes/cancellation/hotel-cancellation.php');
          include ('includes/booking-summary/booking-summary.php');

          ?>
                </div>
                <div class="col-12">
                    <?php
          include ('includes/payment-method/payment-method.php');
          ?>
                </div>

            </div>
        </div>

    </div>
</div>
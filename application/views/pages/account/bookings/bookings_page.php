<div class="bg-white border-top">
    <div class="container py-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb fs-8 p-0 m-0">
                <li class="breadcrumb-item"><a href="/" routerlink="/" class="text-decoration-none"> Home </a></li>
                <li aria-current="page" class="breadcrumb-item active"> Your Booking Number
                </li>
            </ol>
        </nav>
    </div>
</div>
<div class="bg-light border-top">
    <div class="container py-4">
        <div class="row">
            <div class="col-12 col-lg-3 order-2 order-lg-1">
                <?php
        include (__DIR__ . "/../components/menu-account/menu-account.php")
          ?>
            </div>
            <div class="pb-3 pb-lg-0 col-12 col-lg-9 order-1 order-lg-2">
                <div style="min-height: 500px;">
                    <div class="bg-white border mb-3">
                        <div class="p-3 border-bottom">

                            <div class="fs-7 fw-bold text-dark"><span>Pornthip Pim </span><span
                                    class="d-none">pornthipsaefung@gmail.com</span></div>


                            <div class="fs-7 text-secondary"></div>
                        </div>
                        <div class="p-3">
                            <div class="row g-2">
                                <div class="col-9 col-lg-4">
                                    <div class="position-relative">
                                        <div><input type="text"
                                                class="form-control rounded-0 fs-8 ng-untouched ng-pristine ng-valid"
                                                placeholder="Confirm No."></div>

                                    </div>
                                </div>
                                <div class="col-3 col-lg-auto"><button class="btn btn-primary w-100 rounded-0 fs-8">
                                        Search
                                    </button></div>
                            </div>
                        </div>
                    </div>


                    <div class="">


                        <div class="nav row g-2" role="tablist">
                            <div class="col-auto">
                                <button class="btn btn-outline-primary active" data-bs-toggle="tab"
                                    data-bs-target="#currentBookings" type="button">Current Bookings</button>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-outline-primary" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#pastBookings" type="button">Passt Bookings</button>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-outline-primary" id="contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#CancelledBookings" type="button">Cancelled Bookings</button>
                            </div>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="currentBookings" aria-labelledby="home-tab"
                                tabindex="0">


                                <?php include ('bookings-hotels.php'); ?>

                            </div>
                            <div class="tab-pane fade" id="pastBookings" tabindex="0">

                                <?php include ('bookings-hotels.php'); ?>
                            </div>
                            <div class="tab-pane fade" id="CancelledBookings" tabindex="0">

                                <?php include ('bookings-hotels.php'); ?>
                            </div>
                        </div>
                    </div>
                    <div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
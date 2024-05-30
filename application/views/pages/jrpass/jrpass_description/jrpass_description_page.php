<div class="bg-light">
    <div class="position-relative">
        <div class="container py-4">
            <div class="bg-primary position-absolute top-0 start-0 w-100 rn-hcal-sm" style="z-index: 1"></div>
            <div class="position-relative bg-white shadow-sm rounded-1 border-bottom" style="z-index: 2;">
                <?php include (__DIR__ . '/../../../includes/search-jrpass.php'); ?>
            </div>
        </div>
    </div>
</div>

<div class="bg-light">
    <div class="container">
        <?php include (__DIR__ . '/../../../includes/breadcrumb-services.php'); ?>

        <div class="bg-white border-bottom rounded overflow-hidden">
            <div class="row g-0">
                <div class="col-12 col-lg-6">
                    <div class="overflow-hidden">
                        <img src="/application/images/recommend/jrpass/jr-west-japan-1342780_1280.jpg" class="w-100">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="p-4">

                        <div class="row g-3">
                            <div class="col-12">
                                <div class="fs-4 fw-bold text-dark">
                                    JR West All Area Pass 7 Days – for JR-WEST All Area Pass 7 days
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
                                    JR West All Area Pass 7 Days – JR-WEST All Area Pass for 7 days, travel ticket for
                                    traveling in the Kansai area. and the western region of Japan Can be used an
                                    unlimited number of times Within the specified period and service area Convenient
                                    and economical There are also many special privileges.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        for ($jrpass = 1; $jrpass <= 2; $jrpass++) {
            ?>
        <div class="pt-4">
            <div class="border-top border-3 border-primary">
            </div>
            <button class="btn bg-white rounded-0 w-100 text-start border p-3" data-bs-toggle="collapse"
                data-bs-target="<?php echo '#service' . $jrpass; ?>">
                <div class="d-flex justify-content-between">
                    <div class="p-0">
                        <div class="row gx-3">
                            <div class="col-auto">
                                <div class="fs-7 fw-bold text-dark">
                                    JR West All Area Pass 7 Days – for JR-WEST All Area Pass 7 days
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="fs-7 fw-bold text-dark">
                                    Time : 0<?php echo $jrpass + 7; ?>:00
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
            <div class="collapse bg-white border-start border-end border-bottom"
                id="<?php echo 'service' . $jrpass; ?>">
                <div class="row g-0">
                    <div class="col-12 d-flex flex-wrap">
                        <div class="col-12 col-lg-9 p-3">
                            <div class="row justify-content-between">
                                <div class="col-9 col-lg-10">
                                    <div class="fs-5 text-dark fw-bold">
                                        japan rail pass coupon
                                    </div>
                                </div>
                                <div class="col-3 col-lg-2">
                                    <div class="pb-3 text-end">
                                        <button class="btn btn-av py-1 px-2 rounded-1 fs-9 rn-member-blink "> Available
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-3 fs-7 text-secondary">
                                The fastest Keisei Skyliner ticket travels from Narita Airport to the city center in 36
                                minutes.
                            </div>
                            <div class="pt-3">
                                <div class="border-bottom pb-2 mb-3 fs-6 text-dark fw-bold">
                                    Conditions
                                </div>
                                <div class="pb-3 fs-7">
                                    · JR-WEST All Area Pass is valid for unlimited travel in the valid area on the map.
                                    <br>
                                    · Valid trains are below (reserved and non-reserved seating).<br>
                                    - SANYO SHINKANSEN (Shin-Osaka⇔Hakata)<br>
                                    · This pass can be used for "Hello Kitty Shinkansen".<br>
                                    HOKURIKU SHINKANSEN (Tsuruga⇔Joetsu-Myoko)<br>
                                    - Reserved seats on Limited Express Trains<br>
                                    HARUKA,THUNDERBIRD,KUROSHIO,KONOTORI,YAKUMO etc.<br>

                                    <div class="text-danger">
                                        * For reserved seating, ensure you book your seats before boarding the
                                        train.<br>
                                        * Non-reserved seating is not available on trains with exclusively reserved
                                        seats. Click here to check trains with all reserved seats.
                                    </div>

                                    - Special Rapid Services, Rapid Services, and Local trains on JR-WEST Conventional
                                    lines<br>
                                    - JR WEST MIYAJIMA FERRY (Miyajimaguchi⇔Miyajima)<br>
                                    · The pass is only valid on WEST JAPAN JR BUS route buses within the valid area. The
                                    pass cannot be used on expressway buses.
                                </div>
                            </div>
                            <div class="py-3">
                                <button type="button" id="cancellation_policy"
                                    class="btn p-0 fs-7 fw-bold text-danger border-0 shadow-none" data-bs-toggle="modal"
                                    data-bs-target="#modalDesc">
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
                                                        <button
                                                            class="btn <?php echo $classBtn; ?> border-2 rounded-circle p-0 fw-bold fs-5"
                                                            style="width: 24px; height: 24px;" <?php echo $disable; ?>>
                                                            <div
                                                                class="d-flex justify-content-center align-items-center p-0 w-100 h-100">
                                                                -</div>
                                                        </button>
                                                    </div>
                                                    <div class="ps-1">
                                                        <button
                                                            class="btn btn-outline-dark border-2 rounded-circle p-0 fw-bold fs-5"
                                                            style="width: 24px; height: 24px;">
                                                            <div
                                                                class="d-flex justify-content-center align-items-center p-0 w-100 h-100">
                                                                +</div>
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
                                <button target="_blank" class="btn py-2 btn-sm w-100 btn-primary"
                                    onclick="window.open('/cart','_self');">
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
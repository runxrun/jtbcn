<div class="bg-light">
    <div class="position-relative">
        <div class="container py-4">
            <div class="bg-primary position-absolute top-0 start-0 w-100 rn-hcal-sm" style="z-index: 1"></div>
            <div class="position-relative bg-white shadow-sm rounded-1 border-bottom" style="z-index: 2;">
                <?php include (__DIR__ . '/../../../includes/search-ticket.php'); ?>
                <div class="border-top">
                    <div class="row g-0">
                        <div class="col-auto">
                            <div class="dropdown p-3">
                                <button class="btn border-0 fs-7 py-0 dropdown-toggle w-100" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Style
                                </button>
                                <div class="dropdown-menu mt-2 rounded-1 fs-8" Style="width:250px">
                                    <div class="py-2 px-3 fw-bold text-dark">Ticket Style</div>
                                    <div class="border-top">
                                        <div class="py-2 px-3">
                                            <div class="form-check ">
                                                <input class="form-check-input rounded-0" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label text-secondary" for="flexCheckDefault">
                                                    CRUISES
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input rounded-0" type="checkbox" value=""
                                                    id="flexCheckChecked" checked>
                                                <label class="form-check-label text-secondary" for="flexCheckChecked">
                                                    LANDMARKS
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input rounded-0" type="checkbox" value=""
                                                    id="flexCheckChecked" checked>
                                                <label class="form-check-label text-secondary" for="flexCheckChecked">
                                                    RELIGIOUS SITES
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input rounded-0" type="checkbox" value=""
                                                    id="flexCheckChecked" checked>
                                                <label class="form-check-label text-secondary" for="flexCheckChecked">
                                                    ZOOS & AQUARIUMS
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="dropdown p-3">
                                <button class="btn border-0 fs-7 py-0 dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Service Type
                                </button>
                                <div class="dropdown-menu mt-2 rounded-1 fs-8" Style="width:250px">
                                    <div class="py-2 px-3 fw-bold text-dark">Service Type</div>
                                    <div class="border-top ">
                                        <div class="py-2 px-3">
                                            <div class="form-check ">
                                                <input class="form-check-input rounded-0" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label text-secondary" for="flexCheckDefault">
                                                    All Day
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input rounded-0" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label text-secondary" for="flexCheckDefault">
                                                    Night Time
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="dropdown p-3">
                                <button class="btn border-0 fs-7 py-0" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-between">
                                        <div class="pe-2 fs-7 text-secondary">
                                            <i class="fas fa-dollar-sign"></i>
                                        </div>
                                        <div class="ps-0 fs-7 text-secondary">
                                            Sort By Price
                                        </div>
                                    </div>
                                </button>
                                <div class="dropdown-menu mt-2 rounded-1 fs-8 p-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label text-secondary" for="flexRadioDefault1">
                                            HigherPriceFirst
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2" checked>
                                        <label class="form-check-label text-secondary" for="flexRadioDefault2">
                                            LowerPriceFirst
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class=" bg-light">
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
                        Found 1 Activities in Osaka
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
        for ($i = 1; $i <= 1; $i++) {
            ?>
        <div class="pt-3">
            <div class="border bg-white rounded-2 p-3">
                <div class="row gy-3 gx-4">
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="rn-imgcover-center rounded-2"
                            style="background-image: url('https://www.jtbtrip.com/ImageData/Place/keisei-skyliner-e-ticket-th--ma2403000001-general1.jpg');">
                            <a href="<?php echo '/tickets/description/keisei-skyliner/TUEyMzAxMDAwXcvb' . $getURLLang; ?>"
                                class="d-flex">
                                <img src="/application/images/image-ratio-4-3.gif" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div>
                            <div class="row">
                                <div class="col-10">
                                    <div class="pb-2">
                                        <a href="<?php echo '/activities/description/downtown-osaka-walking-and-local-food-tour/TUEyMzAxMDAwMDQw' . $getURLLang; ?>"
                                            class="fs-5 fw-bold text-dark text-decoration-none">
                                            Keisei Skyliner【E-Ticket】【TH】
                                        </a>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <span class="pb-2 d-flex justify-space-end">
                                        <div class="btn btn-danger btn-sm fs-9 text-white border-0">
                                            Available </div>
                                    </span>
                                </div>
                            </div>

                            <div class="pb-4 fs-6 text-secondary ">
                                <span class="pb-2"><i class="fas fa-map-marker-alt"></i></span>
                                Tokyo
                            </div>

                            <div>
                                <div class="fs-6 fw-bold pb-2">KEISEI SKYLINER</div>
                                <div class="fs-7">
                                    ตั๋วสุดคุ้มที่ท่านสามารถเดินทางได้อย่างรวดเร็วและสะดวกสบาย ซึ่งเป็น
                                    ตั๋วโดยสารรถด่วนพิเศษ Skyliner ที่เชื่อมต่อระหว่าง Narita Airport และ Tokyo และ
                                    ตั๋วโดยสาร Tokyo Subway Ticket ที่ท่านสามารถจะขึ้นรถไฟใต้ดินได้ทุกสาย
                                    โดยไม่จำกัดจำนวนเที่ยวภายใน Tokyo ได้ภายในระยะเวลา 24 ชั่วโมง 48 ชั่วโมง และ 72
                                    ชั่วโมง...

                                </div>
                                <a href="javascript:void(0)" class="fs-8 py-2 fw-bold text-danger text-decoration-none"
                                    onclick="window.open('/tickets/description/keisei-skyliner/TUEyMzAxMDAwXcvb')"> More
                                    Detail</a>
                            </div>

                            <div class="py-2">
                                <div class="p-3 mb-0 rounded bg-light fs-7">
                                    <b class="text-primary">[KSSLCP]
                                    </b>
                                    <b>Keisei Skyliner Coupon【E-Ticket】</b>
                                </div>
                            </div>

                            <div class=" mb-1 text-primary fw-bold fs-8 ">
                                <a href="javascript:void(0)" class="text-decoration-none"
                                    onclick="window.open('/tickets/description/keisei-skyliner/TUEyMzAxMDAwXcvb')"> View
                                    Description </a>
                                <b class="text-primary ng-star-inserted">[KSSLCP] </b>
                                <b>Keisei Skyliner Coupon【E-Ticket】</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3 border-start">
                        <div class="py-4">
                            <div class="pt-0 px-3">
                                <div class="text-title text-dark fw-bold text-start text-md-center">
                                    <small class="pe-1 fs-6">THB</small>
                                    <span class="ps-0 fs-4 fw-bold"> 570.00 </span>
                                </div>
                            </div>
                            <div class="pt-3 px-3">
                                <button class="btn py-2 btn-sm w-100 btn-primary"
                                    onclick="window.open('/tickets/description/keisei-skyliner/TUEyMzAxMDAwXcvb')">Select</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>


    </div>
</div>
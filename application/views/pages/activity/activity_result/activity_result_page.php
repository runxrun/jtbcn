<div class="bg-light">
    <div class="position-relative">
        <div class="container py-4">
            <div class="bg-primary position-absolute top-0 start-0 w-100 rn-hcal-sm" style="z-index: 1"></div>
            <div class="position-relative bg-white shadow-sm rounded-1 border-bottom" style="z-index: 2;">
                <?php include (__DIR__ . '/../../../includes/search-activity.php'); ?>
                <div class="border-top">
                    <div class="row g-0">
                        <div class="col-auto">
                            <div class="dropdown p-3">
                                <button class="btn border-0 fs-7 py-0 dropdown-toggle w-100" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Style
                                </button>
                                <div class="dropdown-menu mt-2 rounded-1 fs-8" Style="width:250px">
                                    <div class="py-2 px-3 fw-bold text-dark">Activity Style</div>
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
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="rn-imgcover-center rounded-2"
                            style="background-image: url('https://www.jtbtrip.com/SightSeeing/images/350/CL207/downtown-osaka-walking-and-local-food-tour-ma2301000040-general1.jpg');">
                            <a href="<?php echo '/activities/description/downtown-osaka-walking-and-local-food-tour/TUEyMzAxMDAwMDQw' . $getURLLang; ?>"
                                class="d-flex">
                                <img src="/application/images/image-ratio-4-3.gif" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-9">
                        <div>
                            <div class="pb-2">
                                <a href="<?php echo '/activities/description/downtown-osaka-walking-and-local-food-tour/TUEyMzAxMDAwMDQw' . $getURLLang; ?>"
                                    class="fs-5 fw-bold text-dark text-decoration-none">
                                    Downtown Osaka Walking and Local Food Tour
                                </a>
                            </div>
                            <div class="pb-4 fs-7 text-secondary">
                                veniam debitis at dolorum, ratione deserunt qui provident, sint
                                quisquam, officia laudantium
                                aut minus ipsam adipisci! Repudiandae. Fugit, illo. Error quod adipisci
                                nulla unde odit
                                assumenda
                                sunt aspernatur consequatur illum dolor. Suscipit dolorum doloribus
                                vitae pariatur
                                exercitationem
                                illo facere. Quia quae nemo molestias quaerat quibusdam repudiandae ut.
                            </div>
                        </div>

                        <?php
              for ($j = 1; $j <= rand(1, 3); $j++) {
                ?>
                        <div>
                            <div class="py-3 border-top">
                                <div class="row g-3">
                                    <div class="col-12 col-lg-9">
                                        <div class="d-flex w-100 justify-content-between">
                                            <div class="w-100">
                                                <button class="btn border-0 p-0 text-start fs-7 fw-bold text-dark"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="<?php echo '#collapseDetail' . $i . $j; ?>"
                                                    aria-expanded="false">
                                                    [2024] 1-Day Kyoto & Nara Tour (No Meals, Round-trip
                                                    from Osaka)
                                                </button>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="border border-primary text-primary fs-9 py-1 px-3 rounded-pill">
                                                    Available
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <button class="btn border-0 p-0 fs-7 w-100 text-dark fw-bold text-end">
                                                    CAD 105.27
                                                </button>
                                            </div>
                                            <div class="col-4">
                                                <button class="btn btn-primary rounded-1 border-0 p-0 fs-7 w-100"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="<?php echo '#collapseDetail' . $i . $j; ?>"
                                                    aria-expanded="false">
                                                    <i class="fas fa-angle-down"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="collapse" id="<?php echo 'collapseDetail' . $i . $j; ?>">
                                <div class="pb-3 border-top">
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-9">
                                            <div class="pt-3">
                                                <div class="row g-2">
                                                    <div class="col-auto">
                                                        <div
                                                            class="border border-primary py-1 px-3 fs-8 fw-bold text-primary rounded-1">
                                                            Seat in coach
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="border border-secondary py-1 px-3 fs-8 text-secondary rounded-1"
                                                            title="Thing to do code">
                                                            205412
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="border border-secondary py-1 px-3 fs-8 text-secondary rounded-1"
                                                            title="Tour">
                                                            ALL DAY
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="border border-secondary py-1 px-3 fs-8 text-secondary rounded-1"
                                                            title="Start time">
                                                            08:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-3">
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <button class="btn border-0 p-0" data-bs-toggle="modal"
                                                            data-bs-target="#modalDesc">
                                                            <div class="d-flex">
                                                                <div class="pe-2 text-secondary fs-7"><i
                                                                        class="fas fa-info-circle"></i>
                                                                </div>
                                                                <div
                                                                    class="ps-0 text-secondary fs-7 text-decoration-underline">
                                                                    View Description</div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-3">
                                                <div class="fs-7 text-secondary">
                                                    Minimum Person(s) : 1 Person(s)
                                                </div>
                                                <div class="fs-7 text-secondary">
                                                    Starting from : Osaka
                                                </div>
                                                <div class="fs-7 text-secondary">
                                                    Duration : 4 Hours
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-3">
                                            <div class="pt-3">
                                                <div class="row g-2">
                                                    <div class="col-12">
                                                        <div class="border bg-light rounded-1 px-2 py-1">
                                                            <div class="text-center fs-8 text-dark">1
                                                                Adult x CAD 105.27
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="border bg-light rounded-1 px-2 py-1">
                                                            <div class="text-center fs-8 text-dark">0
                                                                Child x CAD 0.00</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-3">
                                                <button
                                                    class="btn btn-outline-primary w-100 fs-7 fw-bold rounded-1 py-2"
                                                    onclick="window.open('/activities/description/downtown-osaka-walking-and-local-food-tour/TUEyMzAxMDAwMDQw')">
                                                    View Detail
                                                </button>
                                            </div>
                                            <div class="pt-3">
                                                <button class="btn p-0 fs-8 text-danger border-0 shadow-none">
                                                    <div class="d-flex">
                                                        <div class="pe-2"><i class="fas fa-exclamation-circle"></i>
                                                        </div>
                                                        <div> Cancellation policy </div>
                                                    </div>
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
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>

        <div class="">
            <br>
            <br>
            <br>
            <br>
        </div>

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalDesc" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-6 fw-bold">[2024] 1-Day Kyoto & Nara Tour (No
                    Meals, Round-trip from
                    Osaka)</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="pb-2 fs-7 text-secondary">
                    Molestiae, nesciunt. Esse, molestiae quisquam dolorum ratione cum optio
                    blanditiis
                    ipsa rem nostrum? Iusto, nam iste neque doloremque dolores
                    exercitationem! Architecto
                    fugit cum nostrum error harum minima inventore amet voluptatum.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark fs-7 rounded-1" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
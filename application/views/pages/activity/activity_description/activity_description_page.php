<div class="bg-light">
    <div class="position-relative">
        <div class="container py-4">

            <div class="row">
                <div class="col-12">
                    <div class="pb-2">
                        <span class="fs-4 fw-bold text-dark pe-2"> Downtown Osaka Walking and Local Food
                            Tour </span>
                    </div>
                    <div class="pb-4">
                        <span class="fs-7 text-secondary">
                            <p>
                                veniam debitis at dolorum, ratione deserunt qui provident, sint quisquam, officia
                                laudantium aut minus ipsam adipisci! Repudiandae. Fugit, illo. Error quod adipisci nulla
                                unde odit assumenda sunt aspernatur consequatur illum dolor. Suscipit dolorum doloribus
                                vitae pariatur exercitationem illo facere. Quia quae nemo molestias quaerat quibusdam
                                repudiandae ut.
                            </p>
                        </span>
                    </div>
                </div>
            </div>

            <?php
            $hotelGallery = [
                ['pic' => 'japan-3664500_1280.jpg'],
                ['pic' => 'content.jfif'],
                ['pic' => 'japan-3679115_960_720.jpg'],
                ['pic' => 'gm7flruzsx.jpg'],
                ['pic' => 'squid-5392679_960_720.jpg'],
                ['pic' => 'content.jfif'],

            ];
            ?>

            <div class="row g-2 pt-2">
                <div class="col-12 col-lg-6">
                    <div class="h-100">
                        <?php
                        foreach ($hotelGallery as $key => $item) {
                            if ($key == 0) {
                                $image = '/application/images/recommend/activitty/' . $item['pic'];
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
                                $image = '/application/images/recommend/activitty/' . $item['pic'];
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

            <div class="py-3">
                <div class="alert alert-warning">
                    <div class="d-flex flex-wrap justify-content-center">
                        <div class="col-12 col-md-auto px-md-2 text-lg-center">
                            <div class="fs-7 fw-bold"> Country : Japan </div>
                        </div>
                        <div class="col-12 col-md-auto px-md-2 text-lg-center">
                            <div class="fs-7 fw-bold"> City : Osaka </div>
                        </div>
                        <div class="col-12 col-md-auto px-md-2 text-lg-center">
                            <div class="fs-7 fw-bold"> Close : 21.00 </div>
                        </div>
                        <div class="col-12 col-md-auto px-md-2 text-lg-center">
                            <div class="fs-7 fw-bold"> Service date : 21 May 2024 </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="pb-4">
                <span class="d-block fs-5 text-dark fw-bold pb-2">
                    Place Description
                </span>
                <span class="d-block fs-7 text-secondary">
                    Osaka Afternoon Walking Tour (Round Trip from Osaka)

                </span>
            </div>

            <div class="border-top border-2 border-dark"></div>

            <div class="fs-5 fw-bold text-dark pt-3">
                Osaka Afternoon Walking Tour (Round Trip from Osaka) Things to Do Code: 141050
            </div>
            <div class="pb-4">
                <span class="fs-7 text-secondary">
                    <p>
                        veniam debitis at dolorum, ratione deserunt qui provident, sint quisquam, officia
                        laudantium aut minus ipsam adipisci! Repudiandae. Fugit, illo. Error quod adipisci nulla
                        unde odit assumenda sunt aspernatur consequatur illum dolor. Suscipit dolorum doloribus
                        vitae pariatur exercitationem illo facere. Quia quae nemo molestias quaerat quibusdam
                        repudiandae ut.
                    </p>
                </span>
            </div>



            <div class="border rounded bg-white">
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <div class="pt-3 px-3">
                            <div class="row fs-7">
                                <div class="col-12 col-md-4">
                                    <span class="text-dark fw-bold pe-2">Type : </span>
                                    <span class="text-secondary">SIC</span>
                                </div>
                                <div class="col-12 col-md-4">
                                    <span class="text-dark fw-bold pe-2">Start From :</span>
                                    <span class="text-secondary">Osaka</span>
                                </div>
                                <div class="col-12 col-md-4">
                                    <span class="text-dark fw-bold pe-2">Style :</span>
                                    <span class=""> - </span>
                                </div>
                                <div class="col-12 col-md-4">
                                    <span class="text-dark fw-bold pe-2">Service Type : </span>
                                    <span class="text-secondary">Join Tour</span>
                                </div>
                                <div class="col-12 col-md-4">
                                    <span class="text-dark fw-bold pe-2">Period :</span>
                                    <span class="text-secondary">ALL DAY</span>
                                </div>
                                <div class="col-12 col-md-4">
                                    <span class="text-dark fw-bold pe-2">Min Pax :</span>
                                    <span class="text-secondary">1</span>
                                </div>
                            </div>
                        </div>

                        <div class="px-3 pb-3">
                            <div class="row fs-7">
                                <div class="col-12 col-md-4"><span class="text-dark fw-bold pe-2">Tour Duration :
                                    </span><span class="text-secondary"></span></div>
                                <div class="col-12 col-md-4"><span class="text-dark fw-bold pe-2">Time Of Day :
                                    </span><span class="text-secondary">ALL DAY</span></div>
                            </div>
                        </div>
                        <div class="p-3">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="d-flex">
                                        <div class="pe-2">
                                            <div class="fs-7 text-dark"><i class="fas fa-male"></i></div>
                                        </div>
                                        <div class="pe-0">
                                            <div class="fs-7 fw-bold text-dark"> 1 x 6,969.20 = THB 6,969.20 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-flex">
                                        <div class="pe-2">
                                            <div class="fs-8 text-dark"><i class="fas fa-child"></i></div>
                                        </div>
                                        <div class="pe-0">
                                            <div class="fs-7 fw-bold text-dark"> 0 x 6,969.20 = THB 0.00 </div>
                                        </div>
                                    </div>
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                        </div>
                        <!---->
                        <!---->
                        <!---->
                    </div>
                    <div class="col-12 col-lg-3 ">
                        <div class="border-start">
                            <div class=" bg-light p-3">
                                <div class="pb-2 text-center">
                                    <!----><span class="btn fs-9 fw-bold text-white py-1 btn btn-primary">
                                        Available </span>
                                    <!---->
                                </div>
                                <div class="pb-2 pt-2 text-center "><span class="fs-6 text-dark fw-bold"> THB
                                    </span><span class="fs-5 text-dark fw-bold"> 6,969.20
                                    </span>
                                    <!---->
                                    <!---->
                                </div>
                                <div class="pb-2 ">
                                    <button type="button" class="btn btn-primary fs-7 fw-bold w-100 mb-3">
                                        Book Now
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="p-3 border-top">
                            <button data-bs-toggle="collapse"
                                class="btn p-0 shadow-none text-primary fs-7 collapsed border-0"
                                data-bs-target="#serviceInfo0" aria-expanded="false">
                                <span class="pe-2">
                                    <i class="fas fa-info-circle"></i>
                                </span>
                                <span>Service Info</span>
                            </button>
                            <div class="collapse" id="serviceInfo0" style="">

                                <div class="pt-3">
                                    <div role="alert" class="alert alert-danger py-2 m-0">
                                        <span class="fs-7 pe-2">
                                            <i class="fa fa-exclamation-circle"></i>
                                        </span>
                                        <span class="fs-7 fw-bold">No Policy</span>
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
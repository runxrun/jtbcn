<div class="bg-light">
  <div class="position-relative">
    <div class="container py-4">
      <div class="bg-primary position-absolute top-0 start-0 w-100 rn-hcal-sm" style="z-index: 1"></div>
      <div class="position-relative bg-white shadow-sm rounded-1 border-bottom" style="z-index: 2;">
        <?php include(__DIR__ . '/../../../includes/search-package.php'); ?>
        <div class="border-top">
          <div class="row g-0">
            <div class="col-auto">
              <div class="dropdown p-3">
                <button class="btn border-0 fs-7 py-0 dropdown-toggle w-100" type="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Style
                </button>
                <div class="dropdown-menu mt-2 rounded-1 fs-8" Style="width:250px">
                  <div class="py-2 px-3 fw-bold text-dark">Package Style</div>
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
            Fri, 15 Nov 2024
          </div>
        </div>
        <!-- 
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
         -->
      </div>
    </div>

    <?php
    for ($i = 1; $i <= 1; $i++) {
    ?>
      <div class="pt-3">
        <div class="border bg-white rounded-2">
          <div class="row g-0">
            <div class="col-12 col-md-4 col-lg-3">
              <div class="p-3">
                <div class="rn-imgcover-center rounded-2"
                  style="background-image: url('https://www.jtbtrip.com/SightSeeing/images/350/CL207/downtown-osaka-walking-and-local-food-tour-ma2301000040-general1.jpg');">
                  <a href="<?php echo '/packages/description/3-day-kyoto-osaka-nara-tour-from-tokyo/TUEyMzAxMDEsOeDEU' . $getURLLang; ?>"
                    class="d-flex">
                    <img src="/application/images/image-ratio-4-3.gif" class="w-100">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-8 col-lg-9">
              <div class="row g-0">
                <div class="col-12 col-lg-8">
                  <div class="py-0 ps-3 pe-3 py-md-3 ps-md-0">
                    <div class="pb-2">
                      <a href="<?php echo '/packages/description/3-day-kyoto-osaka-nara-tour-from-tokyo/TUEyMzAxMDEsOeDEU' . $getURLLang; ?>"
                        class="fs-5 fw-bold text-dark text-decoration-none">
                        3 Day Kyoto, Osaka & Nara Tour from Tokyo
                      </a>
                    </div>
                    <div class="pb-2 fs-7 text-primary">
                      TKON0001
                    </div>
                    <div class="pb-2 fs-7 text-secondary">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Quaerat in atque repellat amet, modi sint possimus odio
                      doloribus facere distinctio laborum. Sint exercitationem
                      numquam dolores modi, sit ex animi perspiciatis
                      in reiciendis eligendi eveniet fugiat fugit!...
                    </div>
                    <div class="pb-2">
                      <button class="btn btn-link p-0 fs-8 text-primary pb-3">
                        View More
                      </button>
                    </div>
                    <div class="pb-2">
                      <div class="row gy-1 gx-4">
                        <div class="col-12">
                          <div class="d-flex">
                            <div class="pe-2 fs-7 text-dark fw-bold">Package style :</div>
                            <div class="pe-0 fs-7 text-secondary">Free Day</div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="d-flex">
                            <div class="pe-2 fs-7 text-dark fw-bold">Validity :</div>
                            <div class="pe-0 fs-7 text-secondary">29 May 2024 To 31 Dec 2025</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="pt-2">
                      <button class="btn p-0 fs-7 text-danger border-0 shadow-none">
                        <div class="d-flex">
                          <div class="pe-2"><i class="fas fa-exclamation-circle"></i></div>
                          <div>Cancellation policy</div>
                        </div>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 rn-border-start">
                  <div class="ps-3 pe-3 pb-3 ps-md-0 ps-lg-3 pt-lg-3">
                    <div class="pt-3 pt-lg-0 fs-8 text-secondary text-start text-md-center">
                      Start From
                    </div>
                    <div class="pt-0">
                      <div class="text-title text-dark fw-bold text-start text-md-center">
                        <small class="pe-1 fs-6">CAD</small>
                        <span class="ps-0 fs-4 fw-bold"> 1,400 </span>
                      </div>
                    </div>
                    <!--                   
                      <div class="pt-2 text-start text-md-center">
                        <div class="fs-8 text-secondary">
                          Room Night Inc.Taxes
                        </div>
                      </div>
                    -->
                    <div class="pt-3">
                      <button target="_blank" class="btn py-2 btn-sm w-100 btn-primary" tabindex="0" title="Available" onclick="window.open('<?php echo '/packages/description/3-day-kyoto-osaka-nara-tour-from-tokyo/TUEyMzAxMDEsOeDEU' . $getURLLang; ?>', '_self')">
                        View Rates
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>




          <div class="row g-0 d-none">
            <div class="col-12 col-md-4 col-lg-3">
              <div class="pe-2">
                <div class="rn-imgcover-center rounded-2"
                  style="background-image: url('https://www.jtbtrip.com/SightSeeing/images/350/CL207/downtown-osaka-walking-and-local-food-tour-ma2301000040-general1.jpg');">
                  <a href="<?php echo '/packages/description/3-day-kyoto-osaka-nara-tour-from-tokyo/TUEyMzAxMDEsOeDEU' . $getURLLang; ?>"
                    class="d-flex">
                    <img src="/application/images/image-ratio-4-3.gif" class="w-100">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-8 col-lg-9">

              <div class="row g-0">
                <div class="col-12 col-lg-8 col-xl-9">
                  <div class="pb-2">
                    <a href="<?php echo '/packages/description/3-day-kyoto-osaka-nara-tour-from-tokyo/TUEyMzAxMDEsOeDEU' . $getURLLang; ?>"
                      class="fs-5 fw-bold text-dark text-decoration-none">
                      3 Day Kyoto, Osaka & Nara Tour from Tokyo
                    </a>
                  </div>
                  <div class="pb-2 fs-7 text-primary">
                    TKON0001
                  </div>
                  <div class="pb-4 fs-7 text-secondary">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Quaerat in atque repellat amet, modi sint possimus odio
                    doloribus facere distinctio laborum. Sint exercitationem
                    numquam dolores modi, sit ex animi perspiciatis
                    Voluptas qui doloribus libero magni rem distinctio numquam nihil.
                    Quaerat quae veritatis cum numquam, velit sit, facere pariatur
                    necessitatibus libero dignissimos, officia expedita deleniti
                    in reiciendis eligendi eveniet fugiat fugit!
                  </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-3 rn-border-start">
                  <div class="px-lg-2">
                    <div class="pt-3 pt-lg-0 fs-8 text-secondary text-start text-md-center">
                      Start From
                    </div>
                    <div class="pt-0">
                      <div class="text-title text-dark fw-bold text-start text-md-center">
                        <small class="pe-1 fs-6">CAD</small>
                        <span class="ps-0 fs-4 fw-bold"> 1,400 </span>
                      </div>
                    </div>
                    <!--                   
                      <div class="pt-2 text-start text-md-center">
                        <div class="fs-8 text-secondary">
                          Room Night Inc.Taxes
                        </div>
                      </div>
                    -->
                    <div class="pt-3">
                      <button target="_blank" class="btn py-2 btn-sm w-100 btn-primary" tabindex="0" title="Available">
                        View Rates
                      </button>
                    </div>
                  </div>








                </div>

              </div>

              <?php
              /*
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
                              [2024] 3 Day Kyoto, Osaka & Nara Tour from Tokyo (No Meals)
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
                              class="btn btn-outline-primary w-100 fs-7 fw-bold rounded-1 py-2">
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
              */
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
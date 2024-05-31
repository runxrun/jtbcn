<?php
for ($i = 0; $i < 2; $i++) {
?>
<div class="pt-4">
    <div class="border-top border-3 border-primary">
    </div>
    <div class="border bg-white">
        <div class="py-2 px-3 fs-6 text-dark fw-bold">
            Downtown Osaka Walking and Local Food Tour
        </div>
        <div class="border-top">
            <div class="row g-0">
                <div class="col-12 col-lg-9">
                    <div class="p-3">
                        <div class="row g-2">
                            <div class="col-12">
                                <div class="fs-7 text-primary fw-bold">
                                    PRIVATE
                                </div>
                            </div>
                            <div class="col-12">
                                <?php
                  $dataTime = [
                    ['time' => '07:00 - 10:00', 'start' => null],
                    ['time' => '10.00 - 13.00', 'start' => 'active'],
                    ['time' => '13.00 - 16.00', 'start' => null],
                    ['time' => '16.00 - 19.00', 'start' => null],
                    ['time' => '19.00 - 22.00', 'start' => null],
                  ];
                  ?>
                                <div class="nav row g-2">
                                    <?php
                    foreach ($dataTime as $key => $item) {
                      $classTab = !empty($item['start']) ? 'active' : '';
                    ?>
                                    <div class="col-auto">
                                        <button
                                            class="btn rounded-1 fs-8 text-nowrap btn-outline-primary <?php echo $classTab; ?>"
                                            data-bs-toggle="pill" data-bs-target="<?php echo '#tab' . $key; ?>"
                                            type="button">
                                            <?php echo $item['time']; ?>
                                        </button>
                                    </div>
                                    <?php
                    }
                    ?>
                                </div>
                                <div class="tab-content" id="pills-tabContent">
                                    <?php
                    foreach ($dataTime as $key => $item) {
                      $classTab = !empty($item['start']) ? 'show active' : '';
                    ?>
                                    <div class="tab-pane fade <?php echo $classTab; ?>"
                                        id="<?php echo 'tab' . $key; ?>">
                                        <div class="pt-4">
                                            <div class="row gy-2 gx-3">
                                                <div class="col-6 col-sm-4 col-lg-3">
                                                    <div class="fs-8 text-secondary">Tour Code</div>
                                                    <div class="fs-7 text-dark fw-bold">146604</div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-lg-3">
                                                    <div class="fs-8 text-secondary">Start From</div>
                                                    <div class="fs-7 text-dark fw-bold">Osaka</div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-lg-3">
                                                    <div class="fs-8 text-secondary">Style</div>
                                                    <div class="fs-7 text-dark fw-bold">Day Trips</div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-lg-3">
                                                    <div class="fs-8 text-secondary">Time Of Day</div>
                                                    <div class="fs-7 text-dark fw-bold">AM</div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-lg-3">
                                                    <div class="fs-8 text-secondary">Tour Duration</div>
                                                    <div class="fs-7 text-dark fw-bold">3 hrs.</div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-lg-3">
                                                    <div class="fs-8 text-secondary">Start Time</div>
                                                    <div class="fs-7 text-dark fw-bold"><?php echo $item['time']; ?>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4 col-lg-3">
                                                    <div class="fs-8 text-secondary">Minimum</div>
                                                    <div class="fs-7 text-dark fw-bold">1 Adult</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--                           
                        <div class="pt-4 d-none">
                          <div class="row gy-1 gx-3">
                            <div class="col-12 col-lg-4">
                              <div class="fs-7 text-secondary">Tour code : 146604</div>
                            </div>
                            <div class="col-12 col-lg-4">
                              <div class="fs-7 text-secondary">Start From : Osaka</div>
                            </div>
                            <div class="col-12 col-lg-4">
                              <div class="fs-7 text-secondary">Style : Day Trips</div>
                            </div>
                            <div class="col-12 col-lg-4">
                              <div class="fs-7 text-secondary">Start Time : <?php echo $item['time']; ?></div>
                            </div>
                            <div class="col-12 col-lg-4">
                              <div class="fs-7 text-secondary">Tour Duration : 1 hrs.</div>
                            </div>
                            <div class="col-12 col-lg-4">
                              <div class="fs-7 text-secondary">Time Of Day : ALL Day</div>
                            </div>
                            <div class="col-12 col-lg-4">
                              <div class="fs-7 text-secondary">Minimum : 1 Adult</div>
                            </div>
                          </div>
                        </div>
                      -->
                                        <div class="mt-4 py-3 border-top border-bottom">
                                            <div class="row gy-2 gx-4">
                                                <div class="col-12 col-lg-auto">
                                                    <div class="d-flex">
                                                        <div class="pe-2 fs-7 text-dark fw-bold">Adults Price :</div>
                                                        <div class="ps-1 fs-7 text-secondary">CAD 21.32</div>
                                                    </div>
                                                </div>
                                                <!-- 
                          <div class="col-12 col-lg-auto">
                            <div class="d-flex">
                              <div class="pe-2 fs-7 text-dark fw-bold">Child Price :</div>
                              <div class="ps-1 fs-7 text-secondary">CAD 18.16</div>
                            </div>
                          </div>
                          <div class="col-12 col-lg-auto">
                            <div class="d-flex">
                              <div class="pe-2 fs-7 text-dark fw-bold">Senior Price :</div>
                              <div class="ps-1 fs-7 text-secondary">CAD 18.16</div>
                            </div>
                          </div>
                          -->
                                            </div>
                                        </div>
                                        <div class="pt-4">

                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <div class="row g-3">
                                                        <div class="col-12 col-lg-3">
                                                            <div class="fs-7 text-dark fw-bold">Condition</div>
                                                        </div>
                                                        <div class="col-12 col-lg-9">
                                                            <div class="fs-7 text-secondary">
                                                                Cum veritatis iure necessitatibus eaque inventore vitae
                                                                delectus numquam. Ut, earum! Odit,
                                                                perferendis non autem aliquid excepturi vel quaerat, id
                                                                harum veritatis repudiandae quod
                                                                possimus optio, ex perspiciatis expedita dicta?
                                                                <br>
                                                                <br>
                                                                Cupiditate culpa quas minus quis dolor aliquam earum
                                                                magni iusto illum sapiente. Tempore
                                                                eos id inventore ipsa vel consectetur necessitatibus
                                                                expedita ab velit quia, praesentium
                                                                qui debitis deserunt, obcaecati pariatur.
                                                                <br>
                                                                <br>
                                                                Praesentium, illum nihil. Mollitia minus odit iste iure
                                                                hic inventore? Sed veniam a maiores,
                                                                dolorem quasi dolorum corrupti aut minima delectus esse
                                                                provident quo harum sapiente soluta
                                                                consequatur recusandae tempore!
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-3">
                                                        <div class="col-12 col-lg-3">
                                                            <div class="fs-7 text-dark fw-bold">Pick-up Point</div>
                                                        </div>
                                                        <div class="col-12 col-lg-9">
                                                            <div class="fs-7 text-secondary">Dubai International Airport
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-3">
                                                        <div class="col-12 col-lg-3">
                                                            <div class="fs-7 text-dark fw-bold">Meeting Point</div>
                                                        </div>
                                                        <div class="col-12 col-lg-9">
                                                            <div class="fs-7 text-secondary">Lobby Hotel</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-3">
                                                        <div class="col-12 col-lg-3">
                                                            <div class="fs-7 text-dark fw-bold">Meet Up Time</div>
                                                        </div>
                                                        <div class="col-12 col-lg-9">
                                                            <div class="fs-7 text-secondary">
                                                                <?php echo $item['time']; ?> Hrs.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-4">
                                            <div class="py-3 border-top">
                                                <div class="d-flex">
                                                    <div class="fs-7 text-danger pe-2"><i
                                                            class="fa fa-exclamation-circle"></i></div>
                                                    <div class="fs-7 text-danger fw-bold">Cancellation policy</div>
                                                </div>
                                            </div>
                                            <div class="pb-3">
                                                <div class="fs-7 text-dark fw-bold">13 Dec 2023 To 31 Dec 2024 : Apply
                                                    To Downtown Osaka Walking and Local Food Tour</div>
                                                <div class="fs-7 text-secondary">You have to cancel 3 day(s) prior to
                                                    the service date., Otherwise cancellation charge of Full Charge from
                                                    Grand total will be applied.</div>
                                            </div>
                                        </div>
                                        <!-- 

                        <div class="pt-3">
                          <div class="pb-2">
                            <button class="btn border-0 fs-7 p-0 " type="button" data-bs-toggle="collapse" data-bs-target="<?php echo '#collapseDetail' . $i; ?>" aria-expanded="false">
                              <div class="d-flex">
                                <div class="pe-2 text-primary">
                                  <i class="fas fa-info-circle"></i>
                                </div>
                                <div class="pe-2 text-primary">
                                  Service Information
                                </div>
                              </div>
                            </button>
                          </div>
                          <div class="collapse" id="<?php echo 'collapseDetail' . $i; ?>">
                            <div class="pt-4">

                              <div class="row g-3">
                                <div class="col-12">
                                  <div class="row g-3">
                                    <div class="col-12 col-lg-3">
                                      <div class="fs-7 text-dark fw-bold">Condition</div>
                                    </div>
                                    <div class="col-12 col-lg-9">
                                      <div class="fs-7 text-secondary">
                                        Cum veritatis iure necessitatibus eaque inventore vitae delectus numquam. Ut, earum! Odit,
                                        perferendis non autem aliquid excepturi vel quaerat, id harum veritatis repudiandae quod
                                        possimus optio, ex perspiciatis expedita dicta?
                                        <br>
                                        <br>
                                        Cupiditate culpa quas minus quis dolor aliquam earum magni iusto illum sapiente. Tempore
                                        eos id inventore ipsa vel consectetur necessitatibus expedita ab velit quia, praesentium
                                        qui debitis deserunt, obcaecati pariatur.
                                        <br>
                                        <br>
                                        Praesentium, illum nihil. Mollitia minus odit iste iure hic inventore? Sed veniam a maiores,
                                        dolorem quasi dolorum corrupti aut minima delectus esse provident quo harum sapiente soluta
                                        consequatur recusandae tempore!
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12">
                                  <div class="row g-3">
                                    <div class="col-12 col-lg-3">
                                      <div class="fs-7 text-dark fw-bold">Pick-up Point</div>
                                    </div>
                                    <div class="col-12 col-lg-9">
                                      <div class="fs-7 text-secondary">Dubai International Airport</div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12">
                                  <div class="row g-3">
                                    <div class="col-12 col-lg-3">
                                      <div class="fs-7 text-dark fw-bold">Meeting Point</div>
                                    </div>
                                    <div class="col-12 col-lg-9">
                                      <div class="fs-7 text-secondary">Lobby Hotel</div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12">
                                  <div class="row g-3">
                                    <div class="col-12 col-lg-3">
                                      <div class="fs-7 text-dark fw-bold">Meet Up Time</div>
                                    </div>
                                    <div class="col-12 col-lg-9">
                                      <div class="fs-7 text-secondary"><?php echo $item['time']; ?> Hrs.</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="pt-4">
                              <div class="py-3 border-top">
                                <div class="d-flex">
                                  <div class="fs-7 text-danger pe-2"><i class="fa fa-exclamation-circle"></i></div>
                                  <div class="fs-7 text-danger fw-bold">Cancellation policy</div>
                                </div>
                              </div>
                              <div class="pb-3">
                                <div class="fs-7 text-dark fw-bold">13 Dec 2023 To 31 Dec 2024 : Apply To Downtown Osaka Walking and Local Food Tour</div>
                                <div class="fs-7 text-secondary">You have to cancel 3 day(s) prior to the service date., Otherwise cancellation charge of Full Charge from Grand total will be applied.</div>
                              </div>
                            </div>
                          </div>
                        </div>
                         -->

                                    </div>
                                    <?php
                    }
                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 rn-border-start">
                    <div class="">
                        <div class="pt-3 px-3 fs-8 text-secondary text-start text-md-center">
                            Total Price
                        </div>
                        <div class="pt-0 px-3">
                            <div class="text-title text-dark fw-bold text-start text-md-center">
                                <small class="pe-1 fs-6">CAD</small>
                                <span class="ps-0 fs-4 fw-bold"> 42.64</span>
                            </div>
                        </div>
                        <div class="pt-2 px-3 text-start text-md-center">
                            <div class="fs-8 text-secondary">
                                Excluded taxes &amp; fees
                            </div>
                        </div>
                        <div class="py-3 px-3">
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
</div>
<?php
}
$_SESSION['bookingActivity'] = 1;
?>
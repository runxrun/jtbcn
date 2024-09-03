<div class="bg-light">
  <div class="position-relative">
    <div class="container py-4">
      <div class="bg-primary position-absolute top-0 start-0 w-100 rn-hcal-sm" style="z-index: 1"></div>
      <div class="position-relative bg-white shadow-sm rounded-1 border-bottom" style="z-index: 2;">
        <?php include(__DIR__ . '/../../../includes/search-package.php'); ?>
      </div>
    </div>
  </div>
</div>
<div class="bg-light">
  <div class="container pb-4">
    <?php include(__DIR__ . '/../../../includes/breadcrumb-services.php'); ?>


    <?php
    $hotelGallery = [
      ['pic' => 'japan-3664500_1280.jpg'],
      ['pic' => 'content.jfif'],
      ['pic' => 'japan-3679115_960_720.jpg'],
      ['pic' => 'gm7flruzsx.jpg'],
      ['pic' => 'squid-5392679_960_720.jpg'],
      ['pic' => 'content.jfif'],

    ];
    $type = 'A';
    if ($type === 'A') {
    ?>

      <div class="bg-white overflow-hidden rounded-1 border-bottom">

        <div class="row g-0">
          <div class="col-12 col-lg-6">
            <div class="pb-1">
              <?php
              foreach ($hotelGallery as $key => $item) {
                if ($key == 0) {
                  $image = '/application/images/recommend/activity/' . $item['pic'];
              ?>
                  <div class="rn-imgcover-center" style="background-image: url('<?php echo $image; ?>');">
                    <img src="/application/images/image-ratio-16-9.gif" class="w-100" />
                  </div>
              <?php
                }
              }
              ?>
            </div>
            <div class="row g-1">
              <?php
              foreach ($hotelGallery as $key => $item) {
                if ($key >= 2 && $key <= 5) {
                  $image = '/application/images/recommend/activity/' . $item['pic'];
              ?>
                  <div class="col-3">
                    <div class="rn-imgcover-center" style="background-image: url('<?php echo $image; ?>');">
                      <img src="/application/images/image-ratio-16-9.gif" class="w-100" />
                    </div>
                  </div>
              <?php
                }
              }
              ?>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="p-4">
              <div class="row g-3">
                <div class="col-12">
                  <div class="fs-4 fw-bold text-dark">
                    3 Day Kyoto, Osaka & Nara Tour from Tokyo
                  </div>
                </div>
                <div class="col-12">
                  <div class="row gy-1 gx-3">
                    <div class="col-12">
                      <div class="d-flex">
                        <div class="pe-2 fs-7 text-dark fw-bold text-nowrap">Package code : </div>
                        <div class="pe-0 fs-7 text-secondary">ASA12</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="d-flex">
                        <div class="pe-2 fs-7 text-dark fw-bold text-nowrap">Package style : </div>
                        <div class="pe-0 fs-7 text-secondary">Culture Tour</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="fs-7 text-secondary">
                    <p>
                      Veniam debitis at dolorum, ratione deserunt qui provident, sint quisquam, officia
                      laudantium aut minus ipsam adipisci! Repudiandae. Fugit, illo. Error quod adipisci nulla
                      unde odit assumenda sunt aspernatur consequatur illum dolor. Suscipit dolorum doloribus.
                    </p>
                    <p>
                      Eitae pariatur exercitationem illo facere. Quia quae nemo molestias quaerat quibusdam
                      repudiandae ut. Provident illo vero libero repellat impedit ipsam dolorum rem quod eveniet
                      ratione, exercitationem dicta doloribus maxime autem aliquam tempore officia eligendi.
                      Incidunt aspernatur, quibusdam sit aliquid possimus tenetur quasi doloremque...
                    </p>

                  </div>
                  <div class="pt-3">
                    <button class="btn border-0 p-0">
                      <div class="d-flex">
                        <div class="pe-2 fs-7 text-primary">
                          <i class="fas fa-info-circle"></i>
                        </div>
                        <div class="pe-2 fs-7 text-primary">
                          Show more
                        </div>
                      </div>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <?php } ?>


    <div class="pt-4">
      <div class="bg-white">
        <div class="border-bottom border-3 border-primary p-0"></div>
        <div class="row gy-2 gx-3">
          <div class="col-12 col-lg-8">
            <div class="p-3">
              <div class="row gy-2 gx-3">
                <div class="col-6 col-md-3">
                  <div class="fs-7 text-secondary">Effective date </div>
                  <div class="fs-7 text-dark fw-bold text-nowrap">04/01/2024</div>
                </div>
                <div class="col-6 col-md-3">
                  <div class="fs-7 text-secondary">Expire date </div>
                  <div class="fs-7 text-dark fw-bold text-nowrap">03/31/2025</div>
                </div>
                <div class="col-6 col-md-3">
                  <div class="fs-7 text-secondary">Service Date </div>
                  <div class="fs-7 text-dark fw-bold text-nowrap">Fri, 11/15/2024</div>
                </div>
                <div class="col-6 col-md-3">
                  <div class="fs-7 text-secondary">Length of stay </div>
                  <div class="fs-7 text-dark fw-bold text-nowrap">2 Nights</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="p-3">
              <div class="row gy-2 gx-3">
                <div class="col-6">
                  <div class="fs-7 text-secondary text-center">Start from </div>
                  <div class="fs-5 text-dark fw-bold text-nowrap text-center">CAD 1,400 </div>
                </div>
                <div class="col-6">
                  <button target="_blank" class="btn py-2 btn-sm w-100 btn-primary" tabindex="0" title="Available" onclick="window.open('<?php echo '/packages/rates/TUEyMzAxMDEsOeDEU' . $getURLLang; ?>', '_self')">
                    Select
                  </button>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




    <div class="pt-4">
      <div class="bg-white fs-7">
        <div class="border-bottom border-3 border-primary p-0"></div>
        <div class="py-2 px-3 fs-6 text-dark fw-bold">
          Itinerary
        </div>
        <div>


          <?php
          $itin = [
            [
              "daytime" => [
                [
                  "time" => "07:30",
                  "meal" => "Meal not included",
                  "description" => "Ea odio deserunt repudiandae autem facilis exercitationem commodi perspiciatis hic quas dicta quam saepe laborum molestias laudantium at quaerat, itaque officia nisi quod, repellat ex neque? In molestias maiores dolores.",
                ],
                [
                  "time" => "12:30",
                  "meal" => "Meal not included",
                  "description" => "Sed doloribus iusto consequuntur perspiciatis aperiam? Eveniet suscipit qui, reiciendis blanditiis adipisci repudiandae odio assumenda! Maxime quam hic nisi quia. Nobis tempora exercitationem molestias officia voluptas eos cupiditate dignissimos impedit?",
                ],
                [
                  "time" => "14:00",
                  "meal" => "Meal not included",
                  "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
                ],
              ],
            ],
            [
              "daytime" => [
                [
                  "time" => "07:30",
                  "meal" => "Meal not included",
                  "description" => "Ad consequuntur commodi nihil necessitatibus sapiente unde ea quod nam atque quos? Impedit in dolor facilis optio voluptas non similique? Doloremque eius at voluptatibus sequi nobis quisquam assumenda cupiditate maiores?",
                ],
                [
                  "time" => "12:30",
                  "meal" => "Meal not included",
                  "description" => "Porro illo provident deserunt! Iste minus sint mollitia",
                ],
                [
                  "time" => "14:00",
                  "meal" => "Meal not included",
                  "description" => "Ipsa voluptates sequi pariatur eum odit similique natus sit consequatur ex cupiditate unde laborum , qui vel repellat officia assumenda possimus ullam tenetur dolore harum odio explicabo aspernatur officiis sunt doloremque voluptatum ratione sit ad architecto. Consectetur! Ad consequuntur commodi nihil necessitatibus sapiente unde ea quod nam atque quos? Impedit in dolor facilis optio voluptas non similique? Doloremque eius at voluptatibus sequi nobis quisquam assumenda cupiditate maiores?",
                ],
                [
                  "time" => "19:30",
                  "meal" => "Meal not included",
                  "description" => "Cupiditate, facilis ducimus culpa nobis neque perspiciatis. Quod temporibus sapiente hic sunt consequuntur consequatur repellendus libero iste! Animi, quae. Ut vitae non facilis quidem corrupti quibusdam ipsa soluta, aliquid suscipit.",
                ],
              ],
            ],
            [
              "daytime" => [
                [
                  "time" => "07:30",
                  "meal" => "Meal not included",
                  "description" => "Quisquam mollitia ratione voluptas, porro molestiae similique magnam repudiandae qui minus deleniti ut ab aperiam aliquam libero numquam iusto dolores eum error? Impedit officia totam facilis, amet tempora voluptatum rem!",
                ],
                [
                  "time" => "12:30",
                  "meal" => "Meal not included",
                  "description" => "Excepturi libero itaque quis voluptatibus nesciunt placeat ipsam architecto laudantium error repudiandae.",
                ],
              ],
            ],
          ];
          ?>


          <?php foreach ($itin as $key => $item) { ?>
            <div class="border-top">
              <div class="row g-0">
                <div class="col-12 col-lg-2">
                  <div class="py-3 ps-3 pe-0">
                    <div class="d-flex">
                      <div class="pe-2 fw-bold text-dark">DAY</div>
                      <div class="pe-0 fw-bold text-dark"><?php echo $key + 1; ?></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-10">
                  <div class="p-3 text-secondary">
                    <div class="row gy-2 gx-0">
                      <?php foreach ($item['daytime'] as $event) { ?>
                        <div class="col-12">
                          <div class="pb-2">
                            <div class="d-flex">
                              <div class="pe-2 fw-bold text-dark"><?php echo $event['time']; ?></div>
                              <div class="pe-2 text-secondary">/</div>
                              <div class="pe-2 fw-bold text-dark"><?php echo $event['meal']; ?></div>
                            </div>
                          </div>
                          <div class="pb-3">
                            <div class="text-secondary">
                              <?php echo $event['description']; ?>
                            </div>
                          </div>
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>




        </div>
      </div>
    </div>


    <br>
    <br>
    <br>
    <br>
  </div>
</div>
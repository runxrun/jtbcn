<div class="bg-light">
  <div class="position-relative">
    <div class="container py-4">
      <div class="bg-primary position-absolute top-0 start-0 w-100 rn-hcal-sm" style="z-index: 1"></div>
      <div class="position-relative bg-white shadow-sm rounded-1 border-bottom" style="z-index: 2;">
        <?php include(__DIR__ . '/../../../includes/search-activity.php'); ?>
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
                  $image = '/application/images/recommend/activitty/' . $item['pic'];
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
                  $image = '/application/images/recommend/activitty/' . $item['pic'];
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
                    Downtown Osaka Walking and Local Food Tour
                  </div>
                </div>
                <div class="col-12">
                  <div class="row gy-2 gx-3">
                    <div class="col-auto">
                      <div class="fs-7 text-secondary">Location : Osaka</div>
                    </div>
                    <div class="col-auto">
                      <div class="fs-7 text-secondary">Open : 09.30</div>
                    </div>
                    <div class="col-auto">
                      <div class="fs-7 text-secondary">Close : 23.00</div>
                    </div>
                    <div class="col-auto">
                      <div class="fs-7 text-secondary">Service Date : 28 May 2024</div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="fs-7 text-secondary">
                    Veniam debitis at dolorum, ratione deserunt qui provident, sint quisquam, officia
                    laudantium aut minus ipsam adipisci! Repudiandae. Fugit, illo. Error quod adipisci nulla
                    unde odit assumenda sunt aspernatur consequatur illum dolor. Suscipit dolorum doloribus
                    vitae pariatur exercitationem illo facere. Quia quae nemo molestias quaerat quibusdam
                    repudiandae ut. Provident illo vero libero repellat impedit ipsam dolorum rem quod eveniet
                    ratione, exercitationem dicta doloribus maxime autem aliquam tempore officia eligendi.
                    Incidunt aspernatur, quibusdam sit aliquid possimus tenetur quasi doloremque...
                  </div>
                  <div class="pt-3">
                    <button class="btn border-0 p-0">
                      <div class="d-flex">
                        <div class="pe-2 fs-7 text-primary">
                          <i class="fas fa-info-circle"></i>
                        </div>
                        <div class="pe-2 fs-7 text-primary">
                          More Information
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


    <?php
    } else {
    ?>


      <div class="pb-4">
        <div class="row g-3">
          <div class="col-12">
            <div class="fs-4 fw-bold text-dark">
              Downtown Osaka Walking and Local Food Tour
            </div>
          </div>
          <div class="col-12">
            <div class="row gy-2 gx-3">
              <div class="col-auto">
                <div class="fs-7 text-secondary">Location : Osaka</div>
              </div>
              <div class="col-auto">
                <div class="fs-7 text-secondary">Open : 09.30</div>
              </div>
              <div class="col-auto">
                <div class="fs-7 text-secondary">Close : 23.00</div>
              </div>
              <div class="col-auto">
                <div class="fs-7 text-secondary">Service Date : 28 May 2024</div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="fs-7 text-secondary">
              Veniam debitis at dolorum, ratione deserunt qui provident, sint quisquam, officia
              laudantium aut minus ipsam adipisci! Repudiandae. Fugit, illo. Error quod adipisci nulla
              unde odit assumenda sunt aspernatur consequatur illum dolor. Suscipit dolorum doloribus
              vitae pariatur exercitationem illo facere. Quia quae nemo molestias quaerat quibusdam
              repudiandae ut. Provident illo vero libero repellat impedit ipsam dolorum rem quod eveniet
              ratione, exercitationem dicta doloribus maxime autem aliquam tempore officia eligendi.
              Incidunt aspernatur, quibusdam sit aliquid possimus tenetur quasi doloremque.
            </div>
          </div>
        </div>
      </div>


      <div class="row g-2 pt-2">
        <div class="col-12 col-lg-6">
          <div class="h-100">
            <?php
            foreach ($hotelGallery as $key => $item) {
              if ($key == 0) {
                $image = '/application/images/recommend/activitty/' . $item['pic'];
            ?>
                <a href="javascript:void(0)" class="d-block h-100 overflow-hidden rounded-1 rn-imgcover-center" style="background-image: url('<?php echo $image; ?>');">
                  <div class="d-none d-lg-flex">
                    <img src="/application/images/image-ratio-4-3.gif" class="w-100">
                  </div>
                  <div class="d-flex d-lg-none">
                    <img src="/application/images/image-ratio-16-9.gif" class="w-100" />
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
                    <div href="javascript:void(0)" class="overflow-hidden rounded-1 position-relative rn-imgcover-center" style="background-image: url('<?php echo $image; ?>');">
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


    <?php
    }
    ?>



    <?php include('activity_rates.php');  ?>

  </div>
</div>
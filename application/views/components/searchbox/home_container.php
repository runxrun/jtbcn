<div class="position-absolute bottom-0 start-0 w-100" style="z-index: 2;">
  <div class="container">
    <div class="pb-3 pb-lg-5">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-12 col-xl-10">
          <div class="rounded-2 shadow-sm" style="background-color: rgba(255,255,255,1); backdrop-filter: blur(10px);">
            <?php
            /*
                <div class="p-3">
                  <?php
                  $tabSearch = [
                    ['service'=>'HOTEL', 'icon'=>'<i class="fas fa-hotel"></i>', 'active'=>'active'],
                    ['service'=>'TICKETS', 'icon'=>'<i class="fas fa-ticket-alt"></i>', 'active'=>''],
                    ['service'=>'TRANSFER', 'icon'=>'<i class="fas fa-car"></i>', 'active'=>''],
                    ['service'=>'JR PASS', 'icon'=>'<i class="fas fa-train"></i>', 'active'=>''],
                  ];
                  ?>
                  <div class="row g-2">
                    <div class="col-12 col-md-8">
                      <div class="d-flex">
                        <?php foreach($tabSearch as $item) { ?>
                          <div class="w-100 pe-2 rn-tabservice">
                            <button class="btn rounded-1 text-nowrap w-100 <?php echo $item['active']; ?>">
                              <div class="fs-6">
                                <?php echo $item['icon']; ?>
                              </div>
                              <div class="fs-9">
                                <?php echo $item['service']; ?>
                              </div>
                            </button>
                          </div>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              */
            ?>
            <div class="pb-1">
              <?php
              include_once(__dir__ . '/../../includes/search-hotel.php');
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
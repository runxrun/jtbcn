<div class="position-relative w-100">
  <?php
  $banners = [
    [ 'image' => 'buildings-2297210_1920.jpg', 'position'=>'rn-imgcover-top', 'first'=>'active' ],
    [ 'image' => 'ski-slope-3184931_1920.jpg', 'position'=>'rn-imgcover-top', 'first'=>'' ],
    [ 'image' => 'mountain-477832_1920.jpg', 'position'=>'rn-imgcover-center', 'first'=>'' ],
  ];
  ?>
  <div class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 2;">
    <div class="h-100">
      <div class="container">
        <div class="pt-5">
          <div class="pb-1 fs-7 text-white text-center">
            JTB International (Canada) Ltd. online booking site
          </div>
          <div class="h2 rn-text-title text-white text-center">
            Cannada, Japan Optional tour
          </div>
        </div>
        <div class="py-4">
          <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
              <div 
                class="rounded-2 shadow-sm" 
                style="background-color: rgba(255,255,255,1); backdrop-filter: blur(10px);">
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
                <div class="px-3 pb-3">
                  <?php include_once(__dir__.'/../../../includes/search-hotel.php'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="carouselJTBCA" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <?php 
    /*
    foreach($banners as $key => $item) {
    ?>
    <div class="carousel-indicators">
    <button
    type="button"
    data-bs-target="#carouselJTBCA"
    data-bs-slide-to="<?php echo $key; ?>"
    class="<?php echo $item['first']; ?>" 
    aria-current="true" 
    aria-label="Slide 1">
    </button>
    </div>
    <?php 
    }
    */
    ?>
    <div class="carousel-inner">
      <?php 
      $path = '/application/images/banners/';
      foreach($banners as $key => $item) {
      $banner = $path.$item['image'];
      ?>
      <div 
        class="carousel-item <?php echo $item['position'].' '. $item['first'];?>" 
        style="background-image: url('<?php echo $banner; ?>');">
        <div class="container">
          <div class="d-none d-md-flex">
            <img src="/application/images/image-ratio-16-9.gif" class="d-block w-100" alt="...">
          </div>
          <div class="d-flex d-md-none">
            <img src="/application/images/image-ratio-9-16.gif" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
      <?php 
      }
      ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselJTBCA" data-bs-slide="prev" style="z-index: 3;">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselJTBCA" data-bs-slide="next" style="z-index: 3;">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
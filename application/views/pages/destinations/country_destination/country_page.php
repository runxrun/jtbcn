<div class="bg-white border-top">
  <div class="container py-4">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb fs-8">
        <li class="breadcrumb-item"><a href="/" class="text-primary text-decoration-none">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Japan</li>
      </ol>
    </nav>


    <div class="container py-4">

      <?php
      $country = [
        [
          'photo' => 'fuji-4669294_960_720.jpg',
          'title' => 'Fuji',
          'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, error minus fugiat nulla',
          'price' => '$ 170.00 CAD ',
          'link' => 'javascript: void(0);',
        ],
        [
          'photo' => 'japan-3664500_960_720.jpg',
          'title' => 'Osaka',
          'desc' => 'Itaque quis! Eos cupiditate officia amet facere a nostrum, voluptate alias corrupti, tempora neque optio fugit',
          'price' => '$ 230.00 CAD ',
          'link' => 'javascript: void(0);',
        ],
        [
          'photo' => 'lake-5474856_960_720.jpg',
          'title' => 'japan title',
          'desc' => 'Itaque quis! Eos cupiditate officia amet facere a nostrum, voluptate alias corrupti, tempora neque optio fugit',
          'price' => '$ 230.00 CAD ',
          'link' => 'javascript: void(0);',
        ],
        [
          'photo' => 'station-5128873_960_720.jpg',
          'title' => 'japan title',
          'desc' => 'Itaque quis! Eos cupiditate officia amet facere a nostrum, voluptate alias corrupti, tempora neque optio fugit',
          'price' => '$ 230.00 CAD ',
          'link' => 'javascript: void(0);',
        ],
        [
          'photo' => 'train-2527964_960_720.jpg',
          'title' => 'japan title',
          'desc' => 'Itaque quis! Eos cupiditate officia amet facere a nostrum, voluptate alias corrupti, tempora neque optio fugit',
          'price' => '$ 230.00 CAD ',
          'link' => 'javascript: void(0);',
        ],
      ];

      ?>
      <div class="pb-4">
        <div class="row g-3">
          <?php
          foreach ($country as $key => $item) {
            $image = '/application/images/japan/' . $item['photo'];
            ?>
            <div class="col-12 col-lg-3">
              <div class="">
                <a href="<?php echo '/destinations/japan/osaka/TUEAbcDefGhijK' . $getURLLang; ?>"
                  class="d-flex bg-dark rn-imgcover-center rounded-1"
                  style="background-image: url('<?php echo $image ?>');">
                  <img src="/application/images/image-ratio-4-3.gif" class="w-100">
                </a>
              </div>
              <div class="py-2 fs-7 fw-bold text-dark">
                <?php echo $item['title']; ?>
              </div>
            </div>
            <?php
          }
          ?>
        </div>
      </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
</div>
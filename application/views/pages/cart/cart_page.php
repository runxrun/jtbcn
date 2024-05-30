<div class="bg-light border-top">
  <div class="container py-4">


    <?php
    $dataCart = [
      [
        'serviceType' => 'HOTEL',
        'serviceList' => [
          [
            'name' => 'Best Western Osaka Tsukamoto',
            'location' => 'Osaka, Japan',
            'image' => '/application/images/recommend/hotels/6e49dada27c8000bb92d5b314f848036.webp',
            'price' => 'CAD 38.84',
          ],
          [
            'name' => 'Best Western Osaka Tsukamoto',
            'location' => 'Osaka, Japan',
            'image' => '/application/images/recommend/hotels/6e49dada27c8000bb92d5b314f848036.webp',
            'price' => 'CAD 38.84',
          ],
        ],
      ],
      [
        'serviceType' => 'ACTIVITY',
        'serviceList' => [
          [
            'name' => 'Best Western Osaka Tsukamoto',
            'location' => 'Osaka, Japan',
            'image' => '/application/images/recommend/hotels/6e49dada27c8000bb92d5b314f848036.webp',
            'price' => 'CAD 14.84',
          ],
          [
            'name' => 'Best Western Osaka Tsukamoto',
            'location' => 'Osaka, Japan',
            'image' => '/application/images/recommend/hotels/6e49dada27c8000bb92d5b314f848036.webp',
            'price' => 'CAD 14.84',
          ],
        ],
      ],
    ];
    ?>

    <?php
    foreach ($dataCart as $key => $value) {
    ?>
      <div class="py-3">
        <div class="fs-6 text-primary fw-bold">
          <?php echo $value['serviceType']; ?>
        </div>
      </div>
      <?php
      foreach ($value['serviceList'] as $key2 => $item) {
      ?>
        <div class="bg-white border mb-3">
          <div class="row g-3">
            <div class="col-3 col-md-2">
              <img src="<?php echo $item['image']; ?>" class="w-100">
            </div>
            <div class="col-9 col-md-10">
              <div class="row">
                <div class="col-12 col-md-9">
                  <div class="py-2">
                    <div class="fs-6 text-dark fw-bold"><?php echo $item['name']; ?></div>
                    <div class="fs-7 text-secondary"><?php echo $item['location']; ?></div>
                  </div>
                  <div class="pb-2">
                    <div class="row gx-3">
                      <div class="col-auto">
                        <div class="fs-7 text-dark fw-bold">
                          <i class="fas fa-calendar-day"></i>
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="fs-7 text-secondary">
                          Tue - Wed, 28 - 29 May 2024,
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="fs-7 text-secondary">
                          1 Night(s)
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-3">
                <?php echo $item['price']; ?>
                </div>
              </div>

            </div>
          </div>
        </div>
      <?php
      }
      ?>
    <?php
    }
    ?>

    <div class="py-4">

      <button onclick="window.open('/payment','_self');">
        <div class="">
          Continue
        </div>
      </button>
    </div>
  </div>
</div>
<div class="bg-white">
  <div class="container">
    <div class="py-5">
      <div class="pb-4 rn-text-title fs-4 text-dark rn-title-decor">
        <div class="pb-2">Recommend tour in Japan</div>
      </div>
      <div class="py-4">
        <div class="row g-3">
          <?php
          $recommend = [
            [
              'photo'=>'m_153923.jpg', 
              'title'=>'1-Day Kyoto Tour',
              'desc'=>'Recommended for people on the first trip to Kyoto!',
              'price'=>'$ 170.00 CAD ',
              'link'=>'javascript: void(0);',
            ],
            [
              'photo'=>'A19J01901-01.jpg', 
              'title'=>'Ghibli Museum and Ghibli Film Appreciation Bus Tour ',
              'desc'=>'This hugely popular bus tour',
              'price'=>'$ 230.00 CAD ',
              'link'=>'javascript: void(0);',
            ],
            [
              'photo'=>'Ghibli_Grand_Warehouse.png', 
              'title'=>'Ghibli Park Hotel Stay and 2nd Day Park Admission Package',
              'desc'=>'Popular package!',
              'price'=>'$ 180.00 CAD ',
              'link'=>'javascript: void(0);',
            ],
            [
              'photo'=>'A19JFUJIHAKO-02.jpg', 
              'title'=>'Mt. Fuji & Hakone 1-Day Tour',
              'desc'=>'Must join from Tokyo',
              'price'=>'$ 180.00 CAD',
              'link'=>'javascript: void(0);',
            ],
            [
              'photo'=>'A99JN01S1-03.jpg', 
              'title'=>'Nikko World Heritage 1-Day Tour',
              'desc'=>'Tokyo departure',
              'price'=>'$ 160.00 CAD',
              'link'=>'javascript: void(0);',
            ],

          ];
          ?>
          <?php 
          foreach($recommend as $key => $item) {
            $image = '/application/images/recommend/'.$item['photo'];
          ?>
          <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <div class="d-flex align-items-end flex-column flex-wrap h-100">
              <div class="w-100">
                <div class="hover-zoom-effect rounded-1 overflow-hidden">
                  <a href="<?php echo $item['link']; ?>" class="d-flex rn-imgcover-center" style="background-image: url('<?php echo $image; ?>'); ">
                    <img src="/application/images/image-ratio-4-3.gif" class="w-100">
                  </a>
                </div>
                <div class="pt-2 fs-7 fw-bold text-dark">
                  <?php echo $item['title']; ?>
                </div>
                <div class="pt-1 fs-8 text-secondary">
                  <?php echo $item['desc']; ?>
                </div>
              </div>
              <div class="w-100 mt-auto">
                <div class="pt-2">
                  <div class="fs-8 text-secondary">Form</div>
                  <div class="fs-7 fw-bold text-info"><?php echo $item['price']; ?></div>              
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
</div>

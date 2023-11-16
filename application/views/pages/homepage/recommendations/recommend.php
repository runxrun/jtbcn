<div class="bg-white">
  <div class="container">
    <div class="py-5">
      <div class="pb-4 rn-text-title fs-4 text-dark rn-title-decor">
        <div class="pb-2">Recommend tour in Japan</div>
      </div>      
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
      
      <div class="item">
        <ul id="blog-slider" class="content-slider">
          <?php 
          foreach($recommend as $key => $item) {
            $image = '/application/images/recommend/'.$item['photo'];
          ?>
          <li class="h-100">
            <div class="pb-4 bg-white shadow-sm rounded-1 border h-100" style="min-height: 300px;">        
              <div class="hover-zoom-effect rounded-top overflow-hidden">
                <a
                  href="<?php echo $item['link']; ?>"
                  class="d-flex rn-imgcover-center overflow-hidden"
                  style="background-image: url('<?php echo $image; ?>');">
                  <img src="/application/images/image-ratio-4-3.gif" class="w-100">
                </a>
              </div>
              <div class="pt-3 px-3 fs-7 fw-bold text-dark">
                <?php echo $item['title']; ?>
              </div>
              <div class="pt-1 px-3 fs-8 text-secondary">
                <?php echo $item['desc']; ?>
              </div>        
              <div class="pt-2 px-3">
                <div class="fs-8 text-secondary">Form</div>
                <div class="fs-7 fw-bold text-info"><?php echo $item['price']; ?></div>              
              </div>        
            </div>
          </li>
          <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </div>
</div>






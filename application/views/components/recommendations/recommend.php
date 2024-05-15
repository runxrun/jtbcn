<?php

if (strtoupper($currentPage[0]) === 'HOTELS') {
  $recommend = [
    [
      'photo' => 'hotels/1115906_16032715390041097261.jpg',
      'title' => 'APA Hotel Ueno Ekikita',
      'desc' => '7-12-11 Ueno, Taito-ku, Ueno, Tokyo, Japan, 110-0005',
      'price' => '$ 170.00 CAD ',
      'link' => 'javascript: void(0);',
    ],
    [
      'photo' => 'hotels/5d6c078aee05f8d4adfe0f7721b4a379.jpg',
      'title' => 'APA Hotel Higashi-Nihonbashi-Ekimae',
      'desc' => '3-12-14 Higashinihonbashi,Chuo-Ku, Tokyo Station, Tokyo, Japan, 103-0004',
      'price' => '$ 170.00 CAD ',
      'link' => 'javascript: void(0);',
    ],
    [
      'photo' => 'hotels/ad3b954ef8bb8498fbdc23a93998de72.jpeg',
      'title' => 'Hilton Tokyo',
      'desc' => 'Tokyo-to, Shinjuku-ku, Nishishinjuku 6-6-2, Japan, Shinjuku, Tokyo, Japan, 160-0023',
      'price' => '$ 170.00 CAD ',
      'link' => 'javascript: void(0);',
    ],
    [
      'photo' => 'hotels/2_22591.jpg',
      'title' => '9h nine hours woman Shinjuku',
      'desc' => '2-13-13 Shinjuku, Shinjuku-ku, Shinjuku, Tokyo, Japan, 160-0022',
      'price' => '$ 170.00 CAD ',
      'link' => 'javascript: void(0);',
    ],
    [
      'photo' => 'hotels/4a1dcb579cfa4e73728f17aef6bac82d.jpg',
      'title' => 'APA Hotel Asakusa Tawaramachi Ekimae',
      'desc' => '1-2-3 Nishi Asakusa, Taito-ku, Asakusa, Tokyo, Japan, 111-0035',
      'price' => '$ 170.00 CAD ',
      'link' => 'javascript: void(0);',
    ],
  ];
} else {

  $recommend = [
    [
      'photo' => 'm_153923.jpg',
      'title' => '1-Day Kyoto Tour',
      'desc' => 'Recommended for people on the first trip to Kyoto!',
      'price' => '$ 170.00 CAD ',
      'link' => 'javascript: void(0);',
    ],
    [
      'photo' => 'A19J01901-01.jpg',
      'title' => 'Ghibli Museum and Ghibli Film Appreciation Bus Tour ',
      'desc' => 'This hugely popular bus tour',
      'price' => '$ 230.00 CAD ',
      'link' => 'javascript: void(0);',
    ],
    [
      'photo' => 'Ghibli_Grand_Warehouse.png',
      'title' => 'Ghibli Park Hotel Stay and 2nd Day Park Admission Package',
      'desc' => 'Popular package!',
      'price' => '$ 180.00 CAD ',
      'link' => 'javascript: void(0);',
    ],
    [
      'photo' => 'A19JFUJIHAKO-02.jpg',
      'title' => 'Mt. Fuji & Hakone 1-Day Tour',
      'desc' => 'Must join from Tokyo',
      'price' => '$ 180.00 CAD',
      'link' => 'javascript: void(0);',
    ],
    [
      'photo' => 'A99JN01S1-03.jpg',
      'title' => 'Nikko World Heritage 1-Day Tour',
      'desc' => 'Tokyo departure',
      'price' => '$ 160.00 CAD',
      'link' => 'javascript: void(0);',
    ],
  ];
}

?>
<div class="bg-white">
  <div class="container">
    <div class="py-5">
      <div class="pb-3 fs-5 fw-bold text-dark">
        <div class="pb-2">JTB Recommended</div>
      </div>
      <div class="item">
        <ul id="blog-slider" class="content-slider">
          <?php
          foreach ($recommend as $key => $item) {
            $image = '/application/images/recommend/' . $item['photo'];
          ?>
            <li class="h-100 pb-3">
              <div class="pb-4 bg-white shadow-sm overflow-hidden rounded-1 border h-100">
                <div class="hover-zoom-effect overflow-hidden">
                  <a href="<?php echo $item['link']; ?>" class="d-flex rn-imgcover-center overflow-hidden" style="background-image: url('<?php echo $image; ?>');">
                    <img src="/application/images/image-ratio-4-3.gif" class="w-100">
                  </a>
                </div>
                <div class="pt-3 px-3 fs-7 fw-bold text-dark">
                  <?php echo $item['title']; ?>
                </div>
                <div class="pt-1 px-3 fs-8 text-secondary">
                  <?php echo $item['desc']; ?>
                </div>
                <?php
                if (strtoupper($currentPage[0]) === 'HOTELS') {
                ?>
                  <div class="pt-2 px-3 pb-3">
                    <div class="fs-8 text-secondary">xxx</div>
                    <div class="fs-7 fw-bold text-info">xxx</div>
                  </div>
                <?php
                }
                else
                {                  
                ?>
                <div class="pt-2 px-3 pb-3">
                  <div class="fs-8 text-secondary">Form</div>
                  <div class="fs-7 fw-bold text-info"><?php echo $item['price']; ?></div>
                </div>
                <?php
                }
                ?>
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
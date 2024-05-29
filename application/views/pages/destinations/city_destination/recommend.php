<?php
if (strtoupper($currentPage[0]) === 'HOTELS') {
  $recommendSlider = 'recommend-hotels-slider';
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
} elseif (strtoupper($currentPage[0]) === 'ACTIVITIES') {
  $recommendSlider = 'city-activities-slider';
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
} elseif (strtoupper($currentPage[0]) === 'PACKAGES') {
  $recommendSlider = 'recommend-packages-slider';
  $recommend = [
    [
      'photo' => 'packages/2005191127393D2N_Cheap_Private_Land_Tour_Package_in_Okinawa_big.jpg',
      'title' => '3D2N Cheap Private Land Tour Package in Okinawa',
      'desc' => 'Starting from ¥26,000 per pax, this is a private tour package that will bring you to see all highlight in Okinawa region with reasonable price. Easy Travel will bring you to visit a must see places in Okinawa',
      'price' => '$ 226.86 CAD ',
      'link' => 'javascript: void(0);',
    ],
    [
      'photo' => 'packages/1906271214413D2N_Cheap_Private_Tour_Tokyo_&_Fuji_big.jpg',
      'title' => '3D2N Cheap Private Land Tour Tokyo & Fuji',
      'desc' => 'Starting from ¥24,000 per pax, this is a private tour package that will bring you to see all highlight in Tokyo region with reasonable price. Easy Travel will bring you to visit a must see Tokyo & Fuji',
      'price' => '$ 209.47 CAD ',
      'link' => 'javascript: void(0);',
    ],
    [
      'photo' => 'packages/USJ-Osaka-iStock-ymgerman-1024x752.jpg',
      'title' => '3D2N Universal Studios Japan Package (Private)',
      'desc' => 'Universal Studios Japan, affectionately known as USJ, is an amusement park that is very popular with tourists and is considered an important highlight of Osaka.',
      'price' => '$ 147.47 CAD ',
      'link' => 'javascript: void(0);',
    ],
    [
      'photo' => 'packages/Kyoto-Japan-Cityscape.jpg',
      'title' => '5D4N Kansai Package (Private Group)',
      'desc' => 'Travel Osaka (Osaka) - Kyoto (Kyoto) - Nara (Nara) in a private group. Experience the beauty of nature, culture, and modernity of 3 prominent cities in the Kansai region in an exclusive private car service with a guide.',
      'price' => '$ 1,489.19 CAD ',
      'link' => 'javascript: void(0);',
    ],
    [
      'photo' => 'packages/0e95a0a1-52a2-4ec4-9c8d-2e7146b5124c.webp',
      'title' => 'One Day Tour Hokkaido',
      'desc' => 'Hokkaido, the dream destination of many people. There are still many beautiful tourist attractions waiting for everyone to come and admire their beauty throughout the year.',
      'price' => '$ 148.92 CAD ',
      'link' => 'javascript: void(0);',
    ],
  ];
} elseif (strtoupper($currentPage[0]) === 'TICKETS') {
  $recommendSlider = 'recommend-tickets-slider';
  $recommend = [
    [
      'photo' => 'tickets/1 Universal Studios Japan Globe-L.png',
      'title' => 'Universal Studios Japan theme park ticket, Studio Pass type',
      'desc' => 'Meet the world is first Mario-themed amusement park zone. That comes with the most exciting rides like Mario Kart: Koopa is Challenge. Guaranteed fun with Thea Awards, which are honorable awards from world-class entertainment institutions.',
      'price' => '$ 75.03 CAD ',
      'link' => 'javascript: void(0);',
    ],
    [
      'photo' => 'tickets/Osaka-Aquarium-Kaiyukan-and-Santa-Maria-Cruise-Tour-88351167-99f2-438c-be58-3214b2c808cd.webp',
      'title' => 'Osaka Aquarium Kaiyukan',
      'desc' => 'Osaka Aquarium Kaiyukan is known as one of the largest aquariums in the world. It features displays of marine life from the waters of Japan, the Pacific Ocean, and more, as well as over 15 large tanks (the largest is 9 meters deep).',
      'price' => '$ 23.56 CAD ',
      'link' => 'javascript: void(0);',
    ],
    [
      'photo' => 'tickets/ff32066eea9e5b3e6ffbdb2f56567d6e-TicketstoTokyoTower6.avif',
      'title' => 'Tokyo Tower Observatory Ticket',
      'desc' => 'Tokyo Tower is one of the most iconic landmarks and observation decks in Tokyo. It is renowned for its iconic red and white lattice structure that resembles the Eiffel Tower in Paris. Some people even call it the Eiffel Tower of Japan!',
      'price' => '$ 10.48 CAD ',
      'link' => 'javascript: void(0);',
    ],
    [
      'photo' => 'tickets/4189512b2ef257092c947b701b22cdaf53182920171003.jpg',
      'title' => 'TOKYO SKYTREE® Ticket',
      'desc' => 'Tokyo Skytree is a modern landmark in Tokyo, Japan, known for its impressive height of 634 meters, making it one of the tallest towers in the world. Visiting Tokyo Skytree and its observation deck is an awe-inspiring experience that takes you to new heights in Japan is bustling capital,',
      'price' => '$ 16.22 CAD ',
      'link' => 'javascript: void(0);',
    ],
    [
      'photo' => 'tickets/21610.jpg',
      'title' => 'Madame Tussauds Ticket in Tokyo',
      'desc' => 'Take the opportunity to visit and explore the Tokyo branch of Madame Tussauds, the world is most famous wax museum.',
      'price' => '$ 18.33 CAD ',
      'link' => 'javascript: void(0);',
    ],
  ];
}

?>
<div class="bg-white">
  <div class="container">
    <div class="py-5">
      <div class="pb-3 fs-5 fw-bold text-dark">
        <div class="pb-2"><?php echo getTS('_JTBRecommended', $lang, $mlangs); ?></div>
      </div>
      <div class="item">
        <ul id="<?php echo $recommendSlider; ?>" class="content-slider">
          <?php
          foreach ($recommend as $key => $item) {
            $image = '/application/images/recommend/' . $item['photo'];
            ?>
            <li class="h-100 pb-3">
              <div class="pb-4 bg-white shadow-sm overflow-hidden rounded-1 border h-100">
                <div class="hover-zoom-effect overflow-hidden">
                  <a href="<?php echo $item['link']; ?>" class="d-flex rn-imgcover-center overflow-hidden"
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
                <?php
                if (strtoupper($currentPage[0]) === 'HOTELS') {
                  ?>
                  <div class="p-3">
                    <a href="/" class="fs-8 text-primary text-decoration-none">
                      Check Price
                    </a>
                  </div>
                  <?php
                } else {
                  ?>
                  <div class="pt-2 px-3 pb-3">
                    <div class="fs-8 text-secondary">Form</div>
                    <div class="fs-7 fw-bold text-primary"><?php echo $item['price']; ?></div>
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
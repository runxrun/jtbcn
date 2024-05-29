<?php
$recommendPackageName = 'recommend-tickets-slider';
$recommend_package = [
  [
    'photo' => 'tickets/keisei-skyliner-e-ticket-th--ma2403000001-general1.jpg',
    'title' => 'Keisei Skyliner (E-Ticket)',
    'desc' => 'Great value tickets that allow you to travel quickly and comfortably, which are the Skyliner limited express ticket that connects Narita Airport and Tokyo...',
    'price' => '$ 23.56 CAD ',
    'link' => 'javascript: void(0);',
  ],
  [
    'photo' => 'tickets/keisei-skyliner-e-ticket-th--ma2403000001-general1.jpg',
    'title' => 'Keisei Skyliner (E-Ticket)',
    'desc' => 'Great value tickets that allow you to travel quickly and comfortably, which are the Skyliner limited express ticket that connects Narita Airport and Tokyo...',
    'price' => '$ 23.56 CAD ',
    'link' => 'javascript: void(0);',
  ],
  [
    'photo' => 'tickets/keisei-skyliner-e-ticket-th--ma2403000001-general1.jpg',
    'title' => 'Keisei Skyliner (E-Ticket)',
    'desc' => 'Great value tickets that allow you to travel quickly and comfortably, which are the Skyliner limited express ticket that connects Narita Airport and Tokyo...',
    'price' => '$ 23.56 CAD ',
    'link' => 'javascript: void(0);',
  ],
  [
    'photo' => 'tickets/keisei-skyliner-e-ticket-th--ma2403000001-general1.jpg',
    'title' => 'Keisei Skyliner (E-Ticket)',
    'desc' => 'Great value tickets that allow you to travel quickly and comfortably, which are the Skyliner limited express ticket that connects Narita Airport and Tokyo...',
    'price' => '$ 23.56 CAD ',
    'link' => 'javascript: void(0);',
  ],
];
?>
<div class="item">
  <ul id="<?php echo $recommendPackageName; ?>" class="content-slider">
    <?php
    foreach ($recommend_package as $key => $item) {
      $image = '/application/images/recommend/' . $item['photo'];
    ?>
      <li class="h-100 pb-3">
        <div class="pb-4 bg-white shadow-sm overflow-hidden rounded-1 border h-100">
          <div class="hover-zoom-effect overflow-hidden">
            <a href="<?php echo $item['link']; ?>" class="d-flex rn-imgcover-center overflow-hidden #1?" style="background-image: url('<?php echo $image; ?>');">
              <img src="/application/images/image-ratio-4-3.gif" class="w-100" onclick="window.open('/tickets/description/downtown-osaka-walking-and-local-food-tour/TUEyMzAxMDAwMDQw')">
            </a>
          </div>
          <div class="pt-3 px-3 fs-7 fw-bold text-dark" onclick="window.open('/tickets/description/downtown-osaka-walking-and-local-food-tour/TUEyMzAxMDAwMDQw')">
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
<?php
$toppage = [
  ['pic' => 'HImeji.png', 'name' => 'Japan'],
  ['pic' => 'Whistler.jpg', 'name' => 'Whistler'],
  ['pic' => 'banff300.jpg', 'name' => 'Canadian Rockies'],
  ['pic' => 'TORONTO.png', 'name' => 'Toronto'],
  ['pic' => 'NIAGARA.jpg', 'name' => 'Niagara'],
  ['pic' => 'Montreal-300x300.jpg', 'name' => 'Montreal'],
  ['pic' => 'YELLOWKNIFE.jpg', 'name' => 'Yellowknife'],
  ['pic' => 'Vancouver300.jpg', 'name' => 'Vancouver'],
];
?>
<div class="bg-white">
  <div class="container py-4">
    <div class="pb-4">
      <div class="pb-0 fs-3 text-center fw-bold text-dark"><?php echo getTS('_FeaturedDestinations', $lang, $mlangs); ?></div>
      <div class="pb-2 fs-7 text-center text-secondary"><?php echo getTS('_FeaturedDestinationsDesc', $lang, $mlangs); ?></div>
    </div>
    <div class="row g-3">
      <div class="col-12 col-lg-5">
        <?php
        foreach ($toppage as $key => $item) {
          if ($key == 0) {
            $image = '/application/images/toppage/' . $item['pic'];
        ?>
            <div class="w-100 h-100 bg-secondary rn-imgcover-center rounded-1" style="background-image: url('<?php echo $image; ?>');">
              <a href="/" class="d-flex d-lg-none">
                <img src="/application/images/image-ratio-16-9.gif" class="w-100">
              </a>
            </div>
        <?php
          }
        }
        ?>
      </div>
      <div class="col-12 col-lg-7">
        <div class="row g-3">
          <?php
          foreach ($toppage as $key => $item) {
            if ($key >= 2 && $key < 8) {
              $image = '/application/images/toppage/' . $item['pic'];
          ?>
              <div class="col-4 col-lg-4">
                <div class="rounded-1 rn-imgcover-center" style="background-image: url('<?php echo $image; ?>');">
                  <img src="/application/images/image-ratio-4-3.gif" class="w-100">
                </div>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
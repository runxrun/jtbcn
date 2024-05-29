<?php
$toppage = [
  ['pic' => 'osaka-6023328_1280.jpg', 'name' => 'Osaka, Japan', 'name_jp' => '姫路, 日本', 'link' => 'japan-osaka/TUEAbcDefGhijK' ],
  ['pic' => 'Whistler.jpg', 'name' => 'Whistler, Canada', 'name_jp' => 'カナダ', 'link' => 'canada-whistler/TUEAbcDefGhijK' ],
  ['pic' => 'banff300.jpg', 'name' => 'Alberta, Canada', 'name_jp' => 'カナダ', 'link' => 'canada-alberta/TUEAbcDefGhijK' ],
  ['pic' => 'TORONTO.png', 'name' => 'Toronto, Canada', 'name_jp' => 'カナダ', 'link' => 'canada-toronto/TUEAbcDefGhijK' ],
  ['pic' => 'NIAGARA.jpg', 'name' => 'Niagara, Canada', 'name_jp' => 'カナダ', 'link' => 'canada-niagara/TUEAbcDefGhijK' ],
  ['pic' => 'Montreal-300x300.jpg', 'name' => 'Montreal, Canada', 'name_jp' => 'カナダ', 'link' => 'canada-montreal/TUEAbcDefGhijK' ],
  ['pic' => 'YELLOWKNIFE.jpg', 'name' => 'Yellowknife, Canada', 'name_jp' => 'カナダ', 'link' => 'canada-yellowknife/TUEAbcDefGhijK' ],
  ['pic' => 'Vancouver300.jpg', 'name' => 'Vancouver, Canada', 'name_jp' => 'カナダ', 'link' => 'canada-vancouver/TUEAbcDefGhijK' ],
];
?>
<div class="bg-white">
  <div class="container py-4">
    <div class="pb-3 fs-5 fw-bold text-dark">
      <div class="pb-2"><?php echo getTS('_FeaturedDestinations', $lang, $mlangs); ?></div>
    </div>
    <?php
    /*
    <div class="pb-4">
      <div class="pb-0 fs-3 text-center fw-bold text-dark"><?php echo getTS('_FeaturedDestinations', $lang, $mlangs); ?></div>
      <div class="pb-2 fs-7 text-center text-secondary"><?php echo getTS('_FeaturedDestinationsDesc', $lang, $mlangs); ?></div>
    </div>
    */
    ?>
    <div class="row g-3">
      <div class="col-12 col-lg-5">
        <?php
        foreach ($toppage as $key => $item) {
          if ($key == 0) {
            $image = '/application/images/toppage/' . $item['pic'];
            $linkUrl = '/destinations/' . $item['link'].$getURLLang;
        ?>
            <div class="w-100 bg-secondary rn-imgcover-center rounded-1" style="background-image: url('<?php echo $image; ?>'); height: calc(100% - 1.8rem);">
              <a href="<?php echo $linkUrl; ?>" class="d-flex h-100">
                <img src="/application/images/image-ratio-16-9.gif" class="w-100">
              </a>
            </div>
            <div class="pt-2 fs-7 text-secondary w-100 text-truncate">
              <?php echo $item['name']; ?>
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
              $linkUrl = '/destinations/' . $item['link'].$getURLLang;
          ?>
              <div class="col-6 col-sm-4 col-lg-4">
                <div class="rounded-1 rn-imgcover-center" style="background-image: url('<?php echo $image; ?>');">
                <a href="<?php echo $linkUrl; ?>" class="d-flex">
                  <img src="/application/images/image-ratio-4-3.gif" class="w-100">
                  </a>
                </div>
                <div class="pt-2 fs-7 text-secondary w-100 text-truncate">
                  <?php echo $item['name']; ?>
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
<?php
$serviceLink = [
  ['image' => '/application/images/services/activity.png', 'urlLink' => '/activity'],
  ['image' => '/application/images/services/package.png', 'urlLink' => '/package'],
  ['image' => '/application/images/services/jrpass.png', 'urlLink' => '/jrpass'],
  ['image' => '/application/images/services/ticket.png', 'urlLink' => '/ticket'],
  ['image' => '/application/images/services/hotel.png', 'urlLink' => '/hotel'],
];
?>
<div class="bg-white">
  <div class="container py-4">
    <div class="row g-2 justify-content-center">
      <?php
      foreach ($serviceLink as $key => $item) {
        $col = $key > 1 ? 'col-4' : 'col-6';
      ?>
        <div class="<?php echo $col; ?> rn-col-lg-x5">
          <a href="<?php echo $item['urlLink']; ?>" class="d-flex bg-dark rn-imgcover-center" style="background-image: url('<?php echo $item['image']; ?>');">
            <img src="/application/images/image-ratio-4-3.gif" class="w-100">
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
</div>


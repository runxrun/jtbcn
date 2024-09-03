<div class="bg-light">
  <div class="position-relative">
    <div class="container py-4">
      <div class="bg-primary position-absolute top-0 start-0 w-100 rn-hcal-sm" style="z-index: 1"></div>
      <div class="position-relative bg-white shadow-sm rounded-1 border-bottom" style="z-index: 2;">
        <?php include(__DIR__ . '/../../../includes/search-package.php'); ?>
      </div>
    </div>
  </div>
</div>
<div class="bg-light">
  <div class="container pb-4">
    <?php include(__DIR__ . '/../../../includes/breadcrumb-services.php'); ?>
    <?php include(__DIR__ . '/package_rates_select_package.php'); ?>
    <?php include(__DIR__ . '/package_rates_select_hotel.php'); ?>
    <?php include(__DIR__ . '/package_rates_select_rooms.php'); ?>
    <?php // include(__DIR__ . '/package_rates_estimate_price.php'); ?>
    <?php include(__DIR__ . '/package_rates_summary_price.php'); ?>
    <?php $_SESSION['bookingPackage'] = 1; ?>
  </div>
</div>


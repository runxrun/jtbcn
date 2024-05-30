<?php
$tabActivities = '/activities';
$tabPackages = '/packages';
$tabTickets = '/tickets';
$tabJRPass = '/jrpass';
$tabHotels = '/hotels';

switch (strtoupper($currentPage[0])) {
  case "ACTIVITIES":
    $activitesActive = 'active';
    $titleService = 'Activities';
    $iconService = '<i class="fas fa-running"></i>';
    break;
  case "PACKAGES":
    $packagesActive = 'active';
    $titleService = 'Packages';
    $iconService = '<i class="fas fa-suitcase-rolling"></i>';
    break;
  case "JRPASS":
    $jrpassActive = 'active';
    $titleService = 'Japan Rail Pass';
    $iconService = '<i class="fas fa-subway"></i>';
    break;
  case "TICKETS":
    $ticketsActive = 'active';
    $titleService = 'Tickets';
    $iconService = '<i class="fas fa-ticket-alt"></i>';
    break;
  case "HOTELS":
    $hotelsActive = 'active';
    $titleService = 'Hotels';
    $iconService = '<i class="fas fa-hotel"></i>';
    break;
}
?>

<?php
if (!empty($currentPage[0])) {
?>
  <div class="pt-3 px-4">
    <div class="d-flex">
      <div class="pe-2 fs-5 text-primary">
        <?php echo $iconService; ?>
        <!-- <i class="fas fa-arrow-circle-right"></i> -->
      </div>
      <div class="ps-2 fs-5 text-primary fw-bold">
        <?php echo $titleService; ?>
      </div>
    </div>
  </div>

<?php
} else {
?>



  <div class="nav d-flex justify-content-between rn-btn-services-search">
    <div class="w-100 px-0 px-md-1 active"  data-bs-toggle="pill" data-bs-target="#seActivities">
      <button >
        <i class="fas fa-running"></i>
        <span><?php echo getTS('_Activities', $lang, $mlangs); ?></span>
      </button>
    </div>
    <div class="w-100 px-0 px-md-1" data-bs-toggle="pill"  data-bs-target="#sePackages">
      <button>
        <i class="fas fa-suitcase-rolling"></i>
        <span><?php echo getTS('_Packages', $lang, $mlangs); ?></span>
      </button>
    </div>
    <div class="w-100 px-0 px-md-1" data-bs-toggle="pill"  data-bs-target="#seJRPass">
      <button>
        <i class="fas fa-subway"></i>
        <span><?php echo getTS('_JapanRailPass', $lang, $mlangs); ?></span>
      </button>
    </div>
    <div class="w-100 px-0 px-md-1" data-bs-toggle="pill"  data-bs-target="#seTickets">
      <button>
        <i class="fas fa-ticket-alt"></i>
        <span><?php echo getTS('_Tickets', $lang, $mlangs); ?></span>
      </button>
    </div>
    <div class="w-100 px-0 px-md-1" data-bs-toggle="pill"  data-bs-target="#seHotels">
      <button>
        <i class="fas fa-hotel"></i>
        <span><?php echo getTS('_Hotels', $lang, $mlangs); ?></span>
      </button>
    </div>
  </div>


<?php
}
/*
  <div class="d-flex justify-content-between rn-btn-services-search">
    <div class="w-100 px-0 px-md-1 <?php echo $activitesActive; ?>">
      <button onclick="window.open('<?php echo $tabActivities . $getURLLang; ?>', '_self');">
        <i class="fas fa-running"></i>
        <span><?php echo getTS('_Activities', $lang, $mlangs); ?></span>
      </button>
    </div>
    <div class="w-100 px-0 px-md-1 <?php echo $packagesActive; ?>">
      <button onclick="window.open('<?php echo $tabPackages . $getURLLang; ?>', '_self');">
        <i class="fas fa-suitcase-rolling"></i>
        <span><?php echo getTS('_Packages', $lang, $mlangs); ?></span>
      </button>
    </div>
    <div class="w-100 px-0 px-md-1 <?php echo $jrpassActive; ?>">
      <button onclick="window.open('<?php echo $tabJRPass . $getURLLang; ?>', '_self');">
        <i class="fas fa-subway"></i>
        <span><?php echo getTS('_JapanRailPass', $lang, $mlangs); ?></span>
      </button>
    </div>
    <div class="w-100 px-0 px-md-1 <?php echo $ticketsActive; ?>">
      <button onclick="window.open('<?php echo $tabTickets . $getURLLang; ?>', '_self');">
        <i class="fas fa-ticket-alt"></i>
        <span><?php echo getTS('_Tickets', $lang, $mlangs); ?></span>
      </button>
    </div>
    <div class="w-100 px-0 px-md-1 <?php echo $hotelsActive; ?>">
      <button onclick="window.open('<?php echo $tabHotels . $getURLLang; ?>', '_self');">
        <i class="fas fa-hotel"></i>
        <span><?php echo getTS('_Hotels', $lang, $mlangs); ?></span>
      </button>
    </div>
  </div>
*/
?>



<?php
/*  
<div class="w-100 px-0 px-md-1 active">
  <button>
    <i class="fas fa-hotel"></i>
    <span>Hotel</span>
  </button>
</div>
<div class="w-100 px-0 px-md-1 ">
  <button>
    <i class="fas fa-running"></i>
    <span>Thing to do</span>
  </button>
</div>
<div class="w-100 px-0 px-md-1 ">
  <button>
    <i class="fas fa-suitcase-rolling"></i>
    <span>Packages</span>
  </button>
</div>
<div class="w-100 px-0 px-md-1 ">
  <button>
    <i class="fas fa-ticket-alt"></i>
    <span>Tickets</span>
  </button>
</div>
<div class="w-100 px-0 px-md-1 ">
  <button>
    <i class="fas fa-subway"></i>
    <span>JR Pass</span>
  </button>
</div>
<div class="w-100 px-0 px-md-1 ">
  <button>
    <i class="fas fa-car"></i>
    <span>Charter</span>
  </button>
</div>
<div class="w-100 px-0 px-md-1 ">
  <button>
    <i class="fas fa-shopping-bag"></i>
    <span>Goodies</span>
  </button>
</div>
*/
?>
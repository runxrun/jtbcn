<div class="position-absolute bottom-0 start-0 w-100" style="z-index: 2;">
  <div class="container">
    <div class="pb-3 pb-lg-5">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-12 col-xl-10">
          <div class="rounded-2 shadow-sm" style="background-color: rgba(255,255,255,1); backdrop-filter: blur(10px);">
            <?php
            switch (strtoupper($currentPage[0])) {
              case "ACTIVITIES": include_once(__dir__ . '/../../includes/search-activity.php'); break;
              case "PACKAGES": include_once(__dir__ . '/../../includes/search-package.php'); break;
              case "JAPAN-RAIL-PASS": include_once(__dir__ . '/../../includes/search-jrpass.php'); break;
              case "TICKETS": include_once(__dir__ . '/../../includes/search-ticket.php'); break;
              case "HOTELS": include_once(__dir__ . '/../../includes/search-hotel.php'); break;
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
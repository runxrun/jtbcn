<div class="p-4">
  <div class="row g-3 align-items-end">
    <div class="col-12 col-md-6 col-lg-3">
      <div class="pb-1 fs-8 text-secondary"><?php echo getTS('_Destination', $lang, $mlangs); ?></div>
      <div class="p-0">
        <input type="text" class="form-control shadow-none border-0 fs-6 fw-bold text-dark px-0 py-0" placeholder="<?php echo getTS('_WhereAreYouGoing', $lang, $mlangs); ?>">
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="pb-1 fs-8 text-secondary"><?php echo getTS('_ServiceDate', $lang, $mlangs); ?></div>
      <div class="p-0">
        <button class="btn p-0 border-0 rounded-0 shadow-none fs-6 fw-bold text-dark">
          Tue 28 May 2024
        </button>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
      <div class="pb-1 fs-8 text-secondary"><?php echo getTS('_Travelers', $lang, $mlangs); ?></div>
      <div class="p-0">
        <button class="btn p-0 border-0 rounded-0 shadow-none fs-6 fw-bold text-dark">
          2 Adults, 0 Child
        </button>
      </div>
    </div>
    <div class="col-12 col-md-3 col-lg-2">
      <div class="p-0">
        <?php $goToResult = '/activities/result' . $getURLLang ?>
        <button class="btn btn-primary rounded-1 border-0 shadow-none fs-6 fw-bold w-100" onclick="window.open('<?php echo $goToResult; ?>', '_self')">
          <?php echo getTS('_Search', $lang, $mlangs); ?>
        </button>
      </div>
    </div>
  </div>
</div>
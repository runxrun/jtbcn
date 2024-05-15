<div class="p-4">
  <div class="row g-3 align-items-end">
    <div class="col-12 col-md-6 col-lg-3">
      <div class="pb-1 fs-8 text-secondary"><?php echo getTS('_Destination', $lang, $mlangs); ?></div>
      <div class="p-0">
        <input type="text" class="form-control shadow-none border-0 fs-6 fw-bold text-dark px-0 py-0" placeholder="<?php echo getTS('_WhereAreYouGoing', $lang, $mlangs); ?>">
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-2">
      <div class="pb-1 fs-8 text-secondary"><?php echo getTS('_ServiceDate', $lang, $mlangs); ?></div>
      <div class="p-0">
        <button class="btn p-0 border-0 rounded-0 shadow-none fs-6 fw-bold text-dark">
          Tue 28 May 2024
        </button>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-2">
      <div class="pb-1 fs-8 text-secondary"><?php echo getTS('_NumberDay', $lang, $mlangs); ?></div>
      <div class="p-0 dropdown">
        <button class="btn text-start w-100 p-0 border-0 rounded-0 shadow-none fs-6 fw-bold text-dark" data-bs-toggle="dropdown" aria-expanded="false">
          7 Days
        </button>
        <ul class="dropdown-menu rounded-1 mt-2">
          <li class="dropdown-item"><button class="btn border-0 text-start w-100 p-0 fs-8">1 Day</button></li>
          <li class="dropdown-item"><button class="btn border-0 text-start w-100 p-0 fs-8">2 Days</button></li>
          <li class="dropdown-item"><button class="btn border-0 text-start w-100 p-0 fs-8">3 Days</button></li>
          <li class="dropdown-item"><button class="btn border-0 text-start w-100 p-0 fs-8">4 Days</button></li>
          <li class="dropdown-item"><button class="btn border-0 text-start w-100 p-0 fs-8">5 Days</button></li>
          <li class="dropdown-item"><button class="btn border-0 text-start w-100 p-0 fs-8">6 Days</button></li>
          <li class="dropdown-item"><button class="btn border-0 text-start w-100 p-0 fs-8">7 Days</button></li>
          <li class="dropdown-item"><button class="btn border-0 text-start w-100 p-0 fs-8">14 Days</button></li>
          <li class="dropdown-item"><button class="btn border-0 text-start w-100 p-0 fs-8">21 Days</button></li>
        </ul>
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
        <button class="btn btn-primary rounded-1 border-0 shadow-none fs-6 fw-bold w-100">
          <?php echo getTS('_Search', $lang, $mlangs); ?>
        </button>
      </div>
    </div>
  </div>
</div>
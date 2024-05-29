<div class="border-top py-2 px-1">
  <div class="row gy-1 gx-3">
    <div class="col-12 col-sm-auto">
      <div class="dropdown pb-1 px-3">
        <button class="btn text-start border-0 w-100 fs-7 text-dark p-0 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php echo getTS('_Style', $lang, $mlangs); ?>
        </button>
        <ul class="dropdown-menu mt-2 rounded-1" Style="width:250px;">
          <li class="mb-2 pt-1 pb-2 px-3 border-bottom">
            <div class="d-flex justify-content-between align-item-center">
              <div class="pe-1 fw-bold fs-7 text-dark">
                <?php echo getTS('_Style', $lang, $mlangs); ?>
              </div>
              <div class="ps-1">
                <button class="btn border-0 p-0 fs-8 text-info">
                  <?php echo getTS('_Clear', $lang, $mlangs); ?>
                </button>
              </div>
            </div>
          </li>
          <?php for ($style = 1; $style <= 5; $style++) { ?>
            <li class="py-1 px-3">
              <div class="form-check">
                <input class="form-check-input fs-7 rounded-0" type="checkbox" value="" id="<?php echo 'chkStyle' . $style; ?>">
                <label class="form-check-label fs-7 text-dark ps-1" for="<?php echo 'chkStyle' . $style; ?>">
                  <?php echo getTS('_Style', $lang, $mlangs); ?> #<?php echo $style; ?>
                </label>
              </div>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</div>


<?php
/*

    <div class="col-12 col-sm-auto">
      <div class="dropdown pb-1 px-3">
        <button class="btn text-start border-0 w-100 fs-7 text-dark p-0 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php echo getTS('_ServiceType', $lang, $mlangs); ?>
        </button>
        <ul class="dropdown-menu mt-2 rounded-1" Style="width:250px;">
          <li class="mb-2 pt-1 pb-2 px-3 border-bottom">
            <div class="d-flex justify-content-between align-item-center">
              <div class="pe-1 fw-bold fs-7 text-dark">
                <?php echo getTS('_ServiceType', $lang, $mlangs); ?>
              </div>
              <div class="ps-1">
                <button class="btn border-0 p-0 fs-8 text-info">
                  <?php echo getTS('_Clear', $lang, $mlangs); ?>
                </button>
              </div>
            </div>
          </li>
          <?php for ($fac = 1; $fac <= 5; $fac++) { ?>
            <li class="py-1 px-3">
              <div class="form-check">
                <input class="form-check-input fs-7 rounded-0" type="checkbox" value="" id="<?php echo 'chkSort' . $fac; ?>">
                <label class="form-check-label fs-7 text-dark ps-1" for="<?php echo 'chkFac' . $fac; ?>">
                  <?php echo getTS('_ServiceType', $lang, $mlangs); ?> #<?php echo $fac; ?>
                </label>
              </div>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <div class="col-12 col-sm-auto">
      <div class="dropdown pb-1 px-3">
        <button class="btn text-start border-0 w-100 fs-7 text-dark p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <div class="d-flex">
            <div class="pe-2"><i class="fas fa-dollar-sign"></i></div>
            <div class="pe-2"><?php echo getTS('_SortByPrice', $lang, $mlangs); ?></div>
          </div>
        </button>
        <ul class="dropdown-menu mt-2 rounded-1" Style="width:250px;">
          <li class="py-1 px-3">
            <div class="form-check">
              <input class="form-check-input fs-7" type="radio" value="" name="chkSortPrice" id="lowerPrice" checked>
              <label class="form-check-label fs-7 text-dark ps-1" for="lowerPrice">
                <?php echo getTS('_LowerPriceFirst', $lang, $mlangs); ?>
              </label>
            </div>
          </li>
          <li class="py-1 px-3">
            <div class="form-check">
              <input class="form-check-input fs-7" type="radio" value="" name="chkSortPrice" id="higherPrice">
              <label class="form-check-label fs-7 text-dark ps-1" for="higherPrice">
                <?php echo getTS('_HigherPriceFirst', $lang, $mlangs); ?>
              </label>
            </div>
          </li>
        </ul>
      </div>
    </div>
    
*/
?>
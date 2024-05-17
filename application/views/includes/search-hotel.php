<?php
$inputNoBorder = 'form-control shadow-none border-0 fs-6 fw-bold text-dark px-0 py-0 rounded-1';
$inputHaveBorder = 'form-control shadow-none border-1 fs-7 fw-bold text-dark py-2 px-3 rounded-1';

$btnNoBorder = 'btn p-0 border-0 rounded-0 shadow-none fs-6 fw-bold text-dark';
$btnHaveBorder = 'btn py-2 px-3 border rounded-1 shadow-none fs-7 fw-bold text-dark w-100 text-start';

$searchNoBorder = 'btn btn-primary rounded-1 shadow-none fs-6 fw-bold w-100';
$searchHaveBorder = 'btn btn-primary rounded-1 shadow-none fs-7 py-2 fw-bold w-100';


if (strtoupper($currentPage[1]) == 'RESULT') {
  $inputStyle = $inputNoBorder;
  $btnStyle = $btnNoBorder;
  $btnSearch = $searchNoBorder;
} else {
  $inputStyle = $inputHaveBorder;
  $btnStyle = $btnHaveBorder;
  $btnSearch = $searchHaveBorder;
}

?>

<div class="p-4">
  <div class="row g-3 align-items-end">
    <div class="col-12 col-md-6 col-lg-3">
      <div class="pb-1 fs-8 text-secondary"><?php echo getTS('_Destination', $lang, $mlangs); ?></div>
      <div class="p-0">
        <input type="text" class="<?php echo $inputStyle; ?>" placeholder="<?php echo getTS('_WhereAreYouGoing', $lang, $mlangs); ?>">
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="pb-1 fs-8 text-secondary"><?php echo getTS('_StayDates', $lang, $mlangs); ?>, 1 <?php echo getTS('_Nights', $lang, $mlangs); ?></div>
      <div class="p-0">
        <button class="<?php echo $btnStyle; ?>">
          Tue - Wed, 28 - 29 May 2024
        </button>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
      <div class="pb-1 fs-8 text-secondary"><?php echo getTS('_RoomsGuests', $lang, $mlangs); ?></div>
      <div class="p-0">
        <button class="<?php echo $btnStyle; ?>">
          1 Room, 2 Adults, 1 Child
        </button>
      </div>
    </div>
    <div class="col-12 col-md-3 col-lg-2">
      <div class="p-0">
        <?php $goToResult = '/hotels/result' . $getURLLang ?>
        <button class="<?php echo $btnSearch; ?>" onclick="window.open('<?php echo $goToResult; ?>', '_self')">
          <?php echo getTS('_Search', $lang, $mlangs); ?>
        </button>
      </div>
    </div>
  </div>
</div>
<?php
/*
<div class="p-2">
  <div class="row gy-2 gx-3">
    <div class="col-12 col-lg-6">
      <div class="fs-8 text-secondary">Destination</div>
      <div class="input-group pt-1">
        <input type="text" class="form-control fs-7 rounded-0" placeholder="Destination" value="Baniff, Alberta, Canada">
        <span class="input-group-text rounded-0"><i class="fas fa-map-marker-alt"></i></span>
      </div>
    </div>
    <div class="col-12 col-lg-6">
      <div class="row g-3">
        <div class="col-6">
          <div class="fs-8 text-secondary">From date</div>
          <div class="input-group pt-1">
            <input type="text" class="form-control fs-7 rounded-0" placeholder="<?php echo date("d M Y"); ?>">
            <span class="input-group-text rounded-0"><i class="fas fa-calendar-day"></i></span>
          </div>
        </div>
        <div class="col-6">
          <div class="fs-8 text-secondary">To date</div>
          <div class="input-group pt-1">
            <input type="text" class="form-control fs-7 rounded-0" placeholder="<?php echo date("d M Y"); ?>">
            <span class="input-group-text rounded-0"><i class="fas fa-calendar-day"></i></span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-6">
      <div class="fs-8 text-secondary">Rooms / Guests</div>
      <div class="input-group pt-1">
        <button class="form-control fs-7 rounded-0 text-start">1 Room, 1 Adult</button>
        <span class="input-group-text rounded-0"><i class="fas fa-bed"></i></span>
      </div>
    </div>
    <div class="col-12 col-lg-auto">
      <div class="fs-8 text-secondary">&nbsp;</div>
      <div class="pt-1">
        <button class="btn btn-primary fs-7 rounded-0 px-4">Search</button>
      </div>
    </div>
  </div>
</div>
<div class="p-2">
  <div class="py-2 fs-8 fw-bold text-dark">
    RECOMMENDED DESTINATION
  </div>
  <div class="pb-2">
    <div class="row g-2">
      <div class="col-auto">
        <button class="btn btn-outline-secondary fs-8 rounded-1">
          Baniff
        </button>
      </div>
      <div class="col-auto">
        <button class="btn btn-outline-secondary fs-8 rounded-1">
          Vancouver
        </button>
      </div>
      <div class="col-auto">
        <button class="btn btn-outline-secondary fs-8 rounded-1">
          Tokyo
        </button>
      </div>
    </div>
  </div>
</div>
*/
?>
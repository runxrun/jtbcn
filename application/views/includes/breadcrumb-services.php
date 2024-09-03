<!-- 
<div class="pb-2">
  <div class="row gy-2 gx-3">
    <div class="col-auto"><a class="fs-8 text-primary text-decoration-none" href="/hotels">Hotels</a></div>
    <div class="col-auto p-0"><span class="fs-8 text-secondary">/</span></div>
    <div class="col-auto"><a class="fs-8 text-primary text-decoration-none" href="/hotels/result">Hotel Result</a></div>
    <div class="col-auto p-0"><span class="fs-8 text-secondary">/</span></div>
    <div class="col-auto"><span class="fs-8 text-secondary">Hotel Description</span></div>
  </div>
</div>
-->
<?php
switch (strtoupper($currentPage[0])) {
  case "ACTIVITIES":
    $linkService = '/activities';
    $linkResult = '/activities/result';
    $nameService = getTS('_Activities', $lang, $mlangs);
    $nameResult = getTS('_ActivitiesResult', $lang, $mlangs);
    $nameDescription = getTS('_ActivitiesDescription', $lang, $mlangs);
    break;
  case "PACKAGES":
    $linkService = '/packages';
    $linkResult = '/packages/result';
    $nameService = getTS('_Packages', $lang, $mlangs);
    $nameResult = getTS('_PackagesResult', $lang, $mlangs);
    $nameDescription = getTS('_PackagesDescription', $lang, $mlangs);
    break;
  case "HOTELS":
    $linkService = '/hotels';
    $linkResult = '/hotels/result';
    $nameService = getTS('_Hotels', $lang, $mlangs);
    $nameResult = getTS('_HotelsResult', $lang, $mlangs);
    $nameDescription = getTS('_HotelsDescription', $lang, $mlangs);
    break;
  case "TICKETS":
    $linkService = '/tickets';
    $linkResult = '/tickets/result';
    $nameService = getTS('_Tickets', $lang, $mlangs);
    $nameResult = getTS('_TicketsResult', $lang, $mlangs);
    $nameDescription = getTS('_TicketsDescription', $lang, $mlangs);
    break;
  case "JRPASS":
    $linkService = '/jrpass';
    $linkResult = '/jrpass/result';
    $nameService = getTS('_JapanRailPass', $lang, $mlangs);
    $nameResult = getTS('_JapanRailPassResult', $lang, $mlangs);
    $nameDescription = getTS('_JapanRailPassDescription', $lang, $mlangs);
    break;
}

?>
<div class="pb-3">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb fs-8">
      <li class="breadcrumb-item"><a href="<?php echo $linkService . $getURLLang; ?>"
          class="text-primary text-decoration-none"><?php echo $nameService; ?></a></li>
      <li class="breadcrumb-item"><a href="<?php echo $linkResult . $getURLLang; ?>"
          class="text-primary text-decoration-none"><?php echo $nameResult; ?></a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php echo $nameDescription; ?></li>
    </ol>
  </nav>
</div>
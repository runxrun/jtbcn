<?php
include(__dir__ . '/../cms_mockup/cms_mockup.php');
$fakeData = [
  [
    'id' => 'TUEyMzAxMDAAweEd',
    'title' => 'Experience Japan - All Inclusive Tour Packages',
    'title_jp' => '日本を体験する - 全て包括的ツアーパッケージ',
    'description' =>  $data_a,
    'description_jp' =>  $data_a_jp,
  ],
  [
    'id' => 'TUEyMzExIPOESaWL',
    'title' => 'Experience Canada - JTB International (Canada) Ltd. Online Booking Site',
    'title_jp' => 'カナダを体験する - オンライン予約サイト',
    'description' =>  $data_b,
    'description_jp' =>  $data_b_jp,
  ],
];
foreach ($fakeData as $key => $item) {
  if ($currentPage[2] == $item['id']) {
    $dataId = $item['id'];
    $dataTitle = strtoupper($lang) === 'JP' ? $item['title_jp'] : $item['title'];
    $dataDescription =  strtoupper($lang) === 'JP' ? $item['description_jp'] : $item['description'];
  }
}
?>


<div class="bg-white border-top">
  <div class="container py-4">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb fs-8">
        <li class="breadcrumb-item"><a href="<?php echo $backToHome; ?>" class="text-primary text-decoration-none"><?php echo getTS('_Home', $lang, $mlangs); ?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo getTS('_Description', $lang, $mlangs); ?></li>
      </ol>
    </nav>
    <div class="border-top border-3 border-primary py-4">
      <div class="fs-5 fw-bold text-dark">
        <?php echo $dataTitle; ?>
      </div>
    </div>

    <div class="row g-4">
      <div class="col-12 col-lg-9">
        <?php echo $dataDescription; ?>
      </div>
      <div class="col-12 col-lg-3">
        &nbsp;
      </div>
    </div>

  </div>
</div>

<?php
include_once(__DIR__ . '/../../../components/banners/banner-bo.php');
?>
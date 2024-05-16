<div class="d-none d-sm-block pb-4 px-4">
  <div class="fs-8 fw-bold text-dark">    
    <?php echo getTS('_RecommendedDestination', $lang, $mlangs); ?>
  </div>
  <div class="pt-2">
    <?php
    $recommend_search = [
      ['name' => 'Tokyo'],
      ['name' => 'Bangkok'],
      ['name' => 'Yamanashi'],
      ['name' => 'Osaka'],
      ['name' => 'Pattaya, Chon Buri'],
      ['name' => 'Kyoto'],
      ['name' => 'Hokkaido'],
      ['name' => 'Nagano'],
      ['name' => 'Fujikawaguchiko'],
      ['name' => 'Narita'],
      ['name' => 'Samut Prakan'],
    ];
    ?>
    <div class="row g-2">
      <?php
      foreach ($recommend_search as $key => $item) {
      ?>
        <div class="col-auto">
          <button class="btn btn-outline-rn bg-white rounded-1 py-1 px-2 fs-8">
            <div class="p-1"><?php echo $item['name']; ?></div>
          </button>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</div>
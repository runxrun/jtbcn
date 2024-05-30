<?php
$data = [
  [
    'img' => 'https://cdn.pixabay.com/photo/2020/05/20/11/12/mt-5195924_1280.jpg',
    'name' => 'JAPAN',
    'detail' => 'Japan, island country lying off the east coast of Asia. It consists of a great string of islands in a northeast-southwest arc that stretches for approximately 1,500 miles (2,400 km) through the western North Pacific Ocean.',
    'link' => '/',
  ],
  [
    'img' => 'https://cdn.pixabay.com/photo/2018/08/08/22/41/lake-3593378_960_720.jpg',
    'name' => 'CANADA',
    'detail' => 'Canada, the second largest country in the world in area (after Russia), occupying roughly the northern two-fifths of the continent of North America.',
    'link' => '/',
  ],

];
?>
<div class="bg-white">
  <div class="container pb-4">
    <div class="row g-3">
      <?php
      foreach ($data as $key => $item) {
      ?>
        <div class="col-12 col-lg-6">
          <div class="border rounded-1">
            <div class="p-2">
              <div class="row g-0">
                <div class="col-12 col-lg-6 ">
                  <a href="<?php echo '/destinations/japan/-/TUEAbcDefABcdfe'.$getURLLang; ?>">
                    <img src="<?php echo $item['img'] ?>" class="w-100 rounded-1">
                  </a>
                </div>
                <div class="col-12 col-lg-6">
                  <div class="px-4">
                    <div class="pb-2 fw-bold fs-5 text-primary">
                      <?php echo $item['name'] ?>
                    </div>
                    <div class="pb-4 fs-8 text-secondary">
                      <?php echo $item['detail'] ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</div>
<?php 
include_once(__dir__.'/banners/banners.php'); 
include_once(__dir__.'/topics/topiclist.php'); 
?>



<div class="bg-white">
  <div class="container">
    <div class="py-5">
      <div class="row g-0">
        <?php
        $toppage = [
          ['pic'=>'Vancouver300.jpg', 'name'=>'Vancouver'],
          ['pic'=>'Whistler.jpg', 'name'=>'Whistler'],
          ['pic'=>'banff300.jpg', 'name'=>'Canadian Rockies'],
          ['pic'=>'TORONTO.png', 'name'=>'Toronto'],
          ['pic'=>'NIAGARA.jpg', 'name'=>'Niagara'],
          ['pic'=>'Montreal-300x300.jpg', 'name'=>'Montreal'],
          ['pic'=>'YELLOWKNIFE.jpg', 'name'=>'Yellowknife'],
          ['pic'=>'HImeji.png', 'name'=>'Japan'],
        ];
        ?>
        <?php 
        foreach($toppage as $key => $item) {
          $image = '/application/images/toppage/'.$item['pic'];
        ?>
        <div class="col-3">
          <div class="d-flex">
            <a
              href="javascript: void(0);"
              class="d-flex w-100 rn-toppage-link">
              <div class="w-100"><img src="<?php echo $image; ?>" class="w-100"></div>
              <div class="rn-toppage-title" style="z-index: 2"><?php echo $item['name']; ?></div>
            </a>
          </div>
        </div>
        <?php 
        }
        ?>
      </div>
    </div>
  </div>
</div>
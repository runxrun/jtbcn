<div class="bg-white pt-4">
  <div class="container">
    <div class="w-100">
      <?php
      $banners = [
        [ 'image' => '07102020_large_slider_07.jpg', 'first'=>'active' ],
        [ 'image' => '07102020_large_slider_06.jpg', 'first'=>'' ],
        [ 'image' => '07102020_large_slider_05.jpg', 'first'=>'' ],
        [ 'image' => '07102020_large_slider_04.jpg', 'first'=>'' ],
        [ 'image' => '07102020_large_slider_03.jpg', 'first'=>'' ],
        [ 'image' => '07102020_large_slider_02.jpg', 'first'=>'' ],
        [ 'image' => '07102020_large_slider_01.jpg', 'first'=>'' ],
      ];
      ?>

      <div id="carouselJTBCN" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators d-none d-md-flex">
          <?php 
          foreach($banners as $key => $item) {
          ?>
          <button
            type="button"
            data-bs-target="#carouselJTBCN"
            data-bs-slide-to="<?php echo $key; ?>"
            class="<?php echo $item['first']; ?>" 
            aria-current="true" 
            aria-label="Slide 1">
          </button>
          <?php 
          }
          ?>
        </div>
        <div class="carousel-inner">
          <?php 
          $path = '/application/images/banners/';
          foreach($banners as $key => $item) {
          $banner = $path.$item['image'];
          ?>
          <div class="carousel-item <?php echo $item['first'];?>">
            <img src="<?php echo $banner; ?>" class="d-block w-100" alt="...">
          </div>
          <?php 
          }
          ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselJTBCN" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselJTBCN" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</div>
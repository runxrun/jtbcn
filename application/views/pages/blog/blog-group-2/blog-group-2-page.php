<div class="bg-white border-top">
  <div class="container py-4">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb fs-8">
        <li class="breadcrumb-item"><a href="<?php echo $backToHome; ?>" class="text-primary text-decoration-none"><?php echo getTS('_Home', $lang, $mlangs); ?></a></li>
        <li class="breadcrumb-item"><a href="<?php echo '/blog' . $getURLLang; ?>" class="text-primary text-decoration-none"><?php echo getTS('_Blog', $lang, $mlangs); ?></a></li>
        <li class="breadcrumb-item"><a href="<?php echo '/blog/japan-information/TUEyMzA0MDAxMg' . $getURLLang; ?>" class="text-primary text-decoration-none">Japan Information #1</a></li>
        <li class="breadcrumb-item active" aria-current="page">Food Culture - Ramen</li>
      </ol>
    </nav>
    <div class="border-top border-3 border-primary py-4">
      <div class="fs-5 fw-bold text-dark">
      Food Culture - Ramen
      </div>
    </div>


    <?php
    $blog_1 = [
      [
        'photo' => 'Shoyu-Ramen-8285-II.jpg',
        'title' => 'Shoyu Ramen – Recipe from Bizentei, Tokyo 醤油ラーメン',
        'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, error minus fugiat nulla',
        'price' => '$ 170.00 CAD ',
        'link' => 'javascript: void(0);',
      ],
      [
        'photo' => 'ramen-3387316_960_720.jpg',
        'title' => 'Ramen',
        'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, error minus fugiat nulla',
        'price' => '$ 170.00 CAD ',
        'link' => 'javascript: void(0);',
      ],
    ];
    ?>
    <div class="pb-4">
      <div class="row g-3">
        <?php
        foreach ($blog_1 as $key => $item) {
          $image = '/application/images/blogs/' . $item['photo'];
        ?>
          <div class="col-12 col-lg-3">
            <div class="">

              <a href="<?php echo '/blog/japan-information/food-culture/shoyu-ramen-recipe-from-bizentei-醤油ラーメン/TUEyMzA0MDAxMg-TUEyOpE8CXGdAe-TUEwUuP7AQGoDs' . $getURLLang; ?>" class="d-flex bg-dark rn-imgcover-center rounded-1" style="background-image: url('<?php echo $image ?>');">
                <img src="/application/images/image-ratio-4-3.gif" class="w-100">
              </a>
            </div>
            <div class="py-2 fs-7 fw-bold text-dark">
              <?php echo $item['title']; ?>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
</div>
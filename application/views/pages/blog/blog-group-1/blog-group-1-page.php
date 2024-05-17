<div class="bg-white border-top">
  <div class="container py-4">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb fs-8">
        <li class="breadcrumb-item"><a href="<?php echo $backToHome; ?>" class="text-primary text-decoration-none"><?php echo getTS('_Home', $lang, $mlangs); ?></a></li>
        <li class="breadcrumb-item"><a href="<?php echo '/blog' . $getURLLang; ?>" class="text-primary text-decoration-none"><?php echo getTS('_Blog', $lang, $mlangs); ?></a></li>
        <li class="breadcrumb-item active" aria-current="page">Japan Information #1</li>
      </ol>
    </nav>
    <div class="border-top border-3 border-primary py-4">
      <div class="fs-5 fw-bold text-dark">
        Japan Information #1
      </div>
    </div>


    <?php
    $blog_1 = [
      [
        'photo' => 'ramen-2199962_960_720.jpg',
        'title' => 'Food Culture - Ramen',
        'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, error minus fugiat nulla',
        'price' => '$ 170.00 CAD ',
        'link' => 'javascript: void(0);',
      ],
      [
        'photo' => 'teppanyaki-834149_1920.jpg',
        'title' => 'Food Culture - Teppanyaki',
        'desc' => 'Itaque quis! Eos cupiditate officia amet facere a nostrum, voluptate alias corrupti, tempora neque optio fugit',
        'price' => '$ 230.00 CAD ',
        'link' => 'javascript: void(0);',
      ],
      [
        'photo' => 'umeshu-6570071_960_720.jpg',
        'title' => 'Food Culture - Umeshu',
        'desc' => 'Itaque quis! Eos cupiditate officia amet facere a nostrum, voluptate alias corrupti, tempora neque optio fugit',
        'price' => '$ 230.00 CAD ',
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
              <a href="<?php echo '/blog/japan-information/food-culture-ramen/TUEyMzA0MDAxMg-TUEyOpE8CXGdAe' . $getURLLang; ?>" class="d-flex bg-dark rn-imgcover-center rounded-1" style="background-image: url('<?php echo $image ?>');">
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
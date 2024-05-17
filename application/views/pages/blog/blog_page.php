<?php

$blog = [
  [
    'photo' => 'tgsubmenu1s-ma21020029-japan-information.jpg',
    'title' => 'Japan Information #1',
    'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, error minus fugiat nulla',
    'price' => '$ 170.00 CAD ',
    'link' => 'javascript: void(0);',
  ],
  [
    'photo' => 'ma21020500178.jpg',
    'title' => 'Japan Information #2',
    'desc' => 'Itaque quis! Eos cupiditate officia amet facere a nostrum, voluptate alias corrupti, tempora neque optio fugit',
    'price' => '$ 230.00 CAD ',
    'link' => 'javascript: void(0);',
  ],
  [
    'photo' => 'ma21020500110.png',
    'title' => 'Japan Information #3',
    'desc' => 'Neque optio fugit eligendi labore veritatis sapiente doloremque sunt voluptatibus amet officiis ',
    'price' => '$ 180.00 CAD ',
    'link' => 'javascript: void(0);',
  ],
  [
    'photo' => 'ma231100031.png',
    'title' => 'Japan Information #4',
    'desc' => 'perspiciatis recusandae in consectetur sequi consequatur, nam culpa laudantium aspernatur molestiae ',
    'price' => '$ 180.00 CAD',
    'link' => 'javascript: void(0);',
  ],
  [
    'photo' => 'ma21020500220.jpg',
    'title' => 'Japan Information #5',
    'desc' => 'Ad quasi, repellendus ullam a deleniti nemo ex! Consectetur, iste! Obcaecati dolore illo dicta',
    'price' => '$ 160.00 CAD',
    'link' => 'javascript: void(0);',
  ],
];

?>

<div class="bg-white border-top">
  <div class="container py-4">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb fs-8">
        <li class="breadcrumb-item"><a href="<?php echo $backToHome; ?>" class="text-primary text-decoration-none"><?php echo getTS('_Home', $lang, $mlangs); ?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo getTS('_Blog', $lang, $mlangs); ?></li>
      </ol>
    </nav>
    <div class="border-top border-3 border-primary py-4">
      <div class="fs-5 fw-bold text-dark">
        Blog
      </div>
    </div>
    <div class="row g-3">
      <?php
      foreach ($blog as $key => $item) {
        $image = '/application/images/blogs/'.$item['photo'];
      ?>
        <div class="col-12 col-lg-3">
          <div class="">
            <a href="<?php echo '/blog/japan-information/TUEyMzA0MDAxMg' . $getURLLang; ?>" class="d-flex bg-dark rn-imgcover-center rounded-1" style="background-image: url('<?php echo $image?>');">
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
<?php
$recommend = [
  [
    'photo' => 'tgsubmenu1s-ma21020029-japan-information.jpg',
    'title' => 'Japan Information #1',
    'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, error minus fugiat nulla',
    'price' => '$ 170.00 CAD ',
    'link' => '/blog/japan-information/TUEyMzA0MDAxMg',
  ],
  [
    'photo' => 'ma21020500178.jpg',
    'title' => 'Japan Information #2',
    'desc' => 'Itaque quis! Eos cupiditate officia amet facere a nostrum, voluptate alias corrupti, tempora neque optio fugit',
    'price' => '$ 230.00 CAD ',
    'link' => '/blog/japan-information/TUEyMzA0MDAxMg',
  ],
  [
    'photo' => 'ma21020500110.png',
    'title' => 'Japan Information #3',
    'desc' => 'Neque optio fugit eligendi labore veritatis sapiente doloremque sunt voluptatibus amet officiis ',
    'price' => '$ 180.00 CAD ',
    'link' => '/blog/japan-information/TUEyMzA0MDAxMg',
  ],
  [
    'photo' => 'ma231100031.png',
    'title' => 'Japan Information #4',
    'desc' => 'perspiciatis recusandae in consectetur sequi consequatur, nam culpa laudantium aspernatur molestiae ',
    'price' => '$ 180.00 CAD',
    'link' => '/blog/japan-information/TUEyMzA0MDAxMg',
  ],
  [
    'photo' => 'ma21020500220.jpg',
    'title' => 'Japan Information #5',
    'desc' => 'Ad quasi, repellendus ullam a deleniti nemo ex! Consectetur, iste! Obcaecati dolore illo dicta',
    'price' => '$ 160.00 CAD',
    'link' => '/blog/japan-information/TUEyMzA0MDAxMg',
  ],
];
?>
<div class="bg-white">
  <div class="container py-4">
    <div class="pb-3 fs-5 fw-bold text-dark">
      <div class="pb-2"><?php echo getTS('_Blog', $lang, $mlangs); ?></div>
    </div>
    <div class="item">
      <ul id="blog-slider" class="content-slider">
        <?php
        foreach ($recommend as $key => $item) {
          $image = '/application/images/blogs/' . $item['photo'];
        ?>
          <li class="h-100 pb-3">
            <div class="pb-4 bg-white shadow-sm overflow-hidden rounded-1 border h-100">
              <div class="overflow-hidden">
                <!-- hover-zoom-effect -->
                <a href="<?php echo $item['link'].$getURLLang; ?>" class="d-flex rn-imgcover-center overflow-hidden" style="background-image: url('<?php echo $image; ?>');">
                  <img src="/application/images/image-ratio-4-3.gif" class="w-100">
                </a>
              </div>
              <div class="pt-3 px-3 fs-7 fw-bold text-dark">
                <?php echo $item['title']; ?>
              </div>
              <div class="pt-1 px-3 fs-8 text-secondary">
                <?php echo $item['desc']; ?>
              </div>
            </div>
          </li>
        <?php
        }
        ?>
      </ul>
    </div>
  </div>
</div>
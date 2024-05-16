<div class="bg-white">
  <div class="container-fluid">
    <div class="row g-3 justify-content-between align-items-center">
      <div class="col-9 col-md-3">
        <div class="py-2">
          <a href="<?php echo $backToHome; ?>">
            <img src="/application/images/logo.png" class="img-fluid">
          </a>
        </div>
      </div>
      <div class="col-3 col-md-auto d-none d-lg-block">
        <div class="py-3">
          <div class="row gy-2 gx-3">
            <div class="col-auto">
              <a href="<?php echo $backToHome; ?>" class="btn rounded-1 border-0 py-2 px-2">
                <!-- <div class="fs-5 d-none"><i class="fas fa-hotel"></i></div> -->
                <div class="fs-7 fw-bold text-dark">
                  <?php echo getTS('_Home', $lang, $mlangs); ?>
                </div>
              </a>
            </div>
            <div class="col-auto">
              <a href="<?php echo '/activities'.$getURLLang; ?>" class="btn rounded-1 border-0 py-2 px-2">
                <div class="fs-7 fw-bold text-dark">
                  <?php echo getTS('_Activities', $lang, $mlangs); ?>
                </div>
              </a>
            </div>
            <div class="col-auto">
              <a href="<?php echo '/packages'.$getURLLang; ?>" class="btn rounded-1 border-0 py-2 px-2">
                <div class="fs-7 fw-bold text-dark">
                  <?php echo getTS('_Packages', $lang, $mlangs); ?>
                </div>
              </a>
            </div>
            <div class="col-auto">
              <a href="<?php echo '/japan-rail-pass'.$getURLLang; ?>" class="btn rounded-1 border-0 py-2 px-2">
                <div class="fs-7 fw-bold text-dark">
                  <?php echo getTS('_JapanRailPass', $lang, $mlangs); ?>
                </div>
              </a>
            </div>
            <div class="col-auto">
              <a href="<?php echo '/tickets'.$getURLLang; ?>" s class="btn rounded-1 border-0 py-2 px-2">
                <div class="fs-7 fw-bold text-dark">
                  <?php echo getTS('_Tickets', $lang, $mlangs); ?>
                </div>
              </a>
            </div>
            <div class="col-auto">
              <a href="<?php echo '/hotels'.$getURLLang; ?>" class="btn rounded-1 border-0 py-2 px-2">
                <div class="fs-7 fw-bold text-dark">
                  <?php echo getTS('_Hotels', $lang, $mlangs); ?>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3 col-md-3">
        <div class="py-3">
          <?php
          /*
            <div class="d-none d-md-block">
              <div class="row g-2">
                <div class="col-auto">
                  <button class="btn py-0 px-1 fs-5">
                    <div class="text-dark">
                      <i class="far fa-question-circle"></i>
                    </div>
                  </button>
                </div>
                <div class="col-auto">
                  <button class="btn py-0 px-1 fs-5">
                    <div class="text-facebook">
                      <i class="fab fa-facebook"></i>
                    </div>
                  </button>
                </div>
                <div class="col-auto">
                  <div class="dropdown">
                    <button 
                      class="btn btn-outline-dark rounded-1 py-1 px-4 fs-8"
                      data-bs-toggle="dropdown"
                      aria-expanded="false">
                      Login
                    </button>
                    <ul class="dropdown-menu rounded-0 fs-7">
                      <li><a class="dropdown-item" href="#">Login</a></li>
                      <li><a class="dropdown-item" href="#">Register</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="dropdown">
                    <button 
                      class="btn btn-outline-dark rounded-1 py-1 px-4 fs-8"
                      data-bs-toggle="dropdown"
                      aria-expanded="false">
                      English
                    </button>
                    <ul class="dropdown-menu rounded-0 fs-7">
                      <li><a class="dropdown-item" href="#">English</a></li>
                      <li><a class="dropdown-item" href="#">日本語</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          */
          ?>
          <div class="d-none d-md-block">
            <div class="py-3">
              <div class="row justify-content-end g-0">
                <div class="col-auto">
                  <button class="btn btn-primary py-1 px-4 fs-7 rounded-pill" onclick="window.open('/auth/sign-in');">
                    <?php echo getTS('_SignIn', $lang, $mlangs); ?>
                  </button>
                </div>
                <div class="col-auto">
                  <?php
                  if (strtoupper($lang) === "JP") {
                    $clink = $_SERVER['REDIRECT_URL'] . '/?lang=en';
                    echo '<a href="' . $clink . '" class="btn border-0 text-secondary py-1 px-4 fs-7">English</a>';
                  } else {
                    $clink = $_SERVER['REDIRECT_URL'] . '/?lang=jp';
                    echo '<a href="' . $clink . '" class="btn border-0 text-secondary py-1 px-4 fs-7">日本語</a>';
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="d-block d-md-none">
            <div class="py-3">
              <div class="row justify-content-end g-0">
                <div class="col-auto p-0">
                  <button class="btn py-0 px-1 fs-5 border-0" data-bs-toggle="offcanvas" data-bs-target="#sideMenu" aria-controls="sideMenu">
                    <div class="text-dark">
                      <i class="fas fa-bars"></i>
                    </div>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="sideMenu" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">JTB International (Canada) Ltd.</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    ...
  </div>
</div>
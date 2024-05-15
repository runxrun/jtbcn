<div class="bg-white">
  <div class="container-fluid">
    <div class="row g-3 justify-content-between align-items-center">
      <div class="col-9 col-md-3">
        <div class="py-2">
          <a href="/">
            <img src="/application/images/logo.png" class="img-fluid">
          </a>
        </div>
      </div>
      <div class="col-3 col-md-auto d-none d-lg-block">
        <div class="py-3">
          <div class="row gy-2 gx-3">
            <div class="col-auto">
              <a href="/" class="btn rounded-1 border-0 py-2 px-2">
                <!-- <div class="fs-5 d-none"><i class="fas fa-hotel"></i></div> -->
                <div class="fs-7 fw-bold text-dark">Home</div>
              </a>
            </div>
            <div class="col-auto">
              <a href="/activity" class="btn rounded-1 border-0 py-2 px-2">
                <!-- <div class="fs-5 d-none"><i class="fas fa-car"></i></div> -->
                <div class="fs-7 fw-bold text-dark">Activities</div>
              </a>
            </div>
            <div class="col-auto">
              <a href="/package" class="btn rounded-1 border-0 py-2 px-2">
                <!-- <div class="fs-5 d-none"><i class="fas fa-suitcase-rolling"></i></div> -->
                <div class="fs-7 fw-bold text-dark">Packages</div>
              </a>
            </div>
            <div class="col-auto">
              <a href="/jrpass" class="btn rounded-1 border-0 py-2 px-2">
                <!-- <div class="fs-5 d-none"><i class="fas fa-train"></i></div> -->
                <div class="fs-7 fw-bold text-dark">Japan Rail Pass</div>
              </a>
            </div>
            <div class="col-auto">
              <a href="/ticket" class="btn rounded-1 border-0 py-2 px-2">
                <!-- <div class="fs-5 d-none"><i class="fas fa-ticket-alt"></i></div> -->
                <div class="fs-7 fw-bold text-dark">Tickets</div>
              </a>
            </div>
            <div class="col-auto">
              <a href="/hotel" class="btn rounded-1 border-0 py-2 px-2">
                <!-- <div class="fs-5 d-none"><i class="fas fa-hotel"></i></div> -->
                <div class="fs-7 fw-bold text-dark">Hotels</div>
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
                  <button class="btn btn-primary py-1 px-4 fs-7 rounded-pill">
                    Sign in
                  </button>
                </div>
                <div class="col-auto">
                  <?php
                  $countArray = count($currentPage);
                  switch($countArray){
                    case "2" :  $cLink = '/'.$currentPage[0].'/'.$currentPage[1]; break;
                    case "1" :  $cLink = '/'.$currentPage[0]; break;
                    default :  $cLink = '/'; break;
                  }
                  $link =  $cLink ;
                  echo '<a href="'.$link.'" class="btn border-0 text-secondary py-1 px-4 fs-7">日本語</a>';
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="d-block d-md-none">
            <div class="py-3">
              <div class="row justify-content-end g-0">
                <div class="col-auto p-0">
                  <button 
                    class="btn py-0 px-1 fs-5 border-0"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#sideMenu"
                    aria-controls="sideMenu">
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
<div class="bg-white border-top">
  <div class="container py-4">
    <div class="d-flex flex-wrap justify-content-center py-4">
      <div class="col-12 col-md-8 col-xl-5">
        <div class="text-primary fw-bold fs-2 py-4">
          <?php echo getTS('_SignIn', $lang, $mlangs); ?>
        </div>
        <div class="pb-2">
          <div class="input-group mb-3">
            <span class="input-group-text rounded-0">
              <i class="fas fa-user"></i>
            </span>
            <input #us type="text" class="form-control py-2 fs-7 rounded-0" placeholder="<?php echo getTS('_EmailAddress', $lang, $mlangs); ?>" />
          </div>
        </div>
        <div class="pb-2">
          <div class="input-group mb-3">
            <span class="input-group-text rounded-0">
              <i class="fas fa-key"></i>
            </span>
            <input #pw type="password" class="form-control py-2 fs-7 rounded-0" placeholder="<?php echo getTS('_Password', $lang, $mlangs); ?>" />
          </div>
        </div>
        <div class="pt-2 pb-3">
          <button class="btn btn-primary w-100 p-3 fs-7 rounded-1">
            <?php echo getTS('_SignIn', $lang, $mlangs); ?>
          </button>
        </div>
        <div class="py-4">
          <a href="javascript:void(0);" class="fs-7 text-secondary">
            <?php echo getTS('_ForgotPassword', $lang, $mlangs); ?>
          </a>
        </div>
        <div class="pt-3 pb-5 border-top pb-4">
          <div class="row justify-content-between">
            <div class="col-auto">
              <span class="fs-7 text-secondary">
                <?php echo getTS('_DoNotHaveAccount', $lang, $mlangs); ?>
              </span>
            </div>
            <div class="col-auto">
              <a href="<?php echo '/auth/register' . $getURLLang; ?>" class="text-primary fs-7">
                <?php echo getTS('_SignUp', $lang, $mlangs); ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="bg-white border-top">
  <div class="container py-4">
    <div class="d-flex flex-wrap justify-content-center py-4">
      <div class="col-12 col-md-10 col-lg-9 col-xl-8">
        <div class="fw-bold fs-2 text-primary">
          <?php echo getTS('_SignUp', $lang, $mlangs); ?>
        </div>
        <div class="fs-7 text-secondary pt-1 pb-4">
          <?php echo getTS('_ItsQuickEasyAndFree', $lang, $mlangs); ?>
        </div>
        <div class="alert alert-warning py-2" role="alert">
          <div class="d-flex fs-7">
            <div class="pe-2">
              <i class="fas fa-info-circle"></i>
            </div>
            <div class="ps-1">
              <?php echo getTS('_PleaseTypeTheFollowingDetailsInEnglishOnly', $lang, $mlangs); ?>
            </div>
          </div>
        </div>

        <form>
          <div class="row g-3">
            <div class="col-6 col-md-3">
              <div class="fs-8 text-secondary text-truncate">
                <?php echo getTS('_Prefix', $lang, $mlangs); ?>
                <span class="fs-8 px-1 text-danger">*</span>
              </div>
              <div class="pt-1">
                <select class="form-select fs-7 rounded-0">
                  <option value="" disabled>
                    <?php echo getTS('_Prefix', $lang, $mlangs); ?>
                  </option>
                  <option [value]="">
                    <?php echo getTS('_Prefix', $lang, $mlangs); ?>
                  </option>

                </select>
              </div>

            </div>
            <div class="col-12 col-md-9">
              <div class="row g-3">
                <div class="col-12 col-md-6">
                  <div class="fs-8 text-secondary text-truncate">
                    <?php echo getTS('_FirstName', $lang, $mlangs); ?>
                    <span class="fs-8 px-1 text-danger">*</span>
                  </div>
                  <div class="pt-1">
                    <input type="text" class="form-control fs-7 rounded-0" placeholder="<?php echo getTS('_InputEnglish', $lang, $mlangs); ?> " appTypeEngOnly />
                  </div>

                </div>
                <div class="col-12 col-md-6">
                  <div class="fs-8 text-secondary text-truncate">
                    <?php echo getTS('_LastNameSurname', $lang, $mlangs); ?>
                    <span class="fs-8 px-1 text-danger">*</span>
                  </div>
                  <div class="pt-1">
                    <input type="text" class="form-control fs-7 rounded-0" placeholder="<?php echo getTS('_InputEnglish', $lang, $mlangs); ?>" appTypeEngOnly />
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="row g-3 mt-2">
            <div class="col-12 col-md-6">
              <div *ngIf="country$ | async as countryDatas">
                <div class="fs-8 text-secondary text-truncate">
                  <?php echo getTS('_Nationality', $lang, $mlangs); ?>
                </div>
                <div class="pt-1">
                  <select class="form-select fs-7 rounded-0">
                    <option value="" selected>
                      <?php echo getTS('_SelectCountry', $lang, $mlangs); ?>
                    </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="fs-8 text-secondary text-truncate">
                <?php echo getTS('_MobileNumber', $lang, $mlangs); ?>
              </div>
              <div class="pt-1">
                <input type="text" name="mobileNo" class="form-control fs-7 rounded-0" placeholder="+6681234567" autocomplete="off" />
              </div>

            </div>
          </div>

          <div class="row g-3 mt-2">
            <div class="col-12">
              <div class="fs-8 text-secondary text-truncate">
                <?php echo getTS('_Address', $lang, $mlangs); ?>
                <span class="fs-8 px-1 text-danger">*</span>
              </div>
              <div class="pt-1">
                <input typeEngNumOnly type="text" class="form-control fs-7 rounded-0" placeholder="<?php echo getTS('_InputNumericOrEnglish', $lang, $mlangs); ?>" formControlName="address1" />
              </div>


            </div>
            <div class="col-12 col-md-6">
              <div class="">
                <div class="fs-8 text-secondary text-truncate">
                  <?php echo getTS('_Country', $lang, $mlangs); ?>
                  <span class="fs-8 px-1 text-danger">*</span>
                </div>
                <div class="pt-1">
                  <select class="form-select fs-7 rounded-0" (change)="getCity($event.target.value)">
                    <option value="" selected>
                      <?php echo getTS('_SelectCountry', $lang, $mlangs); ?>
                    </option>
                  </select>
                </div>

              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="fs-8 text-secondary text-truncate">
                <?php echo getTS('_City', $lang, $mlangs); ?>
                <span class="fs-8 px-1 text-danger">*</span>
              </div>
              <div class="pt-1">
                <select class="form-select fs-7 rounded-0">
                  <option value="" selected>
                    <?php echo getTS('_SelectCity', $lang, $mlangs); ?>
                  </option>
                </select>
              </div>

            </div>
            <div class="col-12 col-md-6">
              <div class="fs-8 text-secondary text-truncate">
                <?php echo getTS('_StateOptional_bracket', $lang, $mlangs); ?>
              </div>
              <div class="pt-1">
                <input typeEngNumOnly type="text" class="form-control fs-7 rounded-0" autocomplete="off" name="state" placeholder="<?php echo getTS('_InputNumericOrEnglish', $lang, $mlangs); ?>" />
              </div>

            </div>
            <div class="col-12 col-md-6">
              <div class="fs-8 text-secondary text-truncate">
                <?php echo getTS('_ZipCode', $lang, $mlangs); ?>
                <span class="fs-8 px-1 text-danger">*</span>
              </div>
              <div class="pt-1">
                <input numberOnly type="text" class="form-control fs-7 rounded-0" autocomplete="off" name="zipcode" placeholder="<?php echo getTS('_InputNumeric', $lang, $mlangs); ?>" />
              </div>

            </div>
          </div>
          <div class="row g-3 mt-2">
            <div class="col-12">
              <div class="fs-8 text-secondary text-truncate">
                <?php echo getTS('_EmailAddress', $lang, $mlangs); ?>
                <span class="fs-8 px-1 text-danger">*</span>
              </div>
              <div class="pt-1">
                <input type="text" class="form-control fs-7 rounded-0" placeholder="<?php echo getTS('_EmailExample', $lang, $mlangs); ?>" />
              </div>

            </div>
            <div class="col-12 col-md-6">
              <div class="fs-8 text-secondary text-truncate">
                <?php echo getTS('_CreatePassword', $lang, $mlangs); ?>
                <span class="fs-8 px-1 text-danger">*</span>
              </div>
              <div class="pt-1">
                <input type="password" class="form-control fs-7 rounded-0" placeholder="<?php echo getTS('_Password', $lang, $mlangs); ?>" autocomplete="off" />
              </div>
              <div class="pt-2 pb-4 fs-8 text-secondary">
                <?php echo getTS('_MessagePassword', $lang, $mlangs); ?>
              </div>

            </div>
            <div class="col-12 col-md-6">
              <div class="fs-8 text-secondary text-truncate">
                <?php echo getTS('_ConfirmPassword', $lang, $mlangs); ?>
                <span class="fs-8 px-1 text-danger">*</span>
              </div>
              <div class="pt-1">
                <input type="password" class="form-control fs-7 rounded-0" placeholder="<?php echo getTS('_ConfirmPassword', $lang, $mlangs); ?>" autocomplete="off" />
              </div>
            </div>
            <div class="col-12">
              <div class="d-flex fs-7">
                <span class="text-secondary pe-2">
                  <?php echo getTS('_ByRegisterIngAnAccount', $lang, $mlangs); ?>
                </span>
                <a href="<?php echo '/terms-conditions' . $getURLLang; ?>" class="pe-2 text-primary" target="_blank">
                  <?php echo getTS('_TermsofUse', $lang, $mlangs); ?>
                </a>
                <span class="pe-2 text-lowercase text-dark">
                  <?php echo getTS('_And', $lang, $mlangs); ?>
                </span>
                <a href="<?php echo '/privacy-policy' . $getURLLang; ?>" class="text-primary" target="_blank">
                  <?php echo getTS('_PrivacyPolicy', $lang, $mlangs); ?>
                </a>
              </div>
            </div>
          </div>
          <div class="py-4">
            <button class="btn btn-primary w-100 p-3 fs-7 fw-bold rounded-1">
              <?php echo getTS('_SignUp', $lang, $mlangs); ?>
            </button>
          </div>
        </form>
        <div class="py-4">
          <div class="fs-7 text-secondary">
            <?php echo getTS('_HaveAlreadyAccount', $lang, $mlangs); ?>
            <a href="<?php echo '/auth/sign-in' . $getURLLang; ?>" class="ps-2 text-primary">
              <?php echo getTS('_SignIn', $lang, $mlangs); ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
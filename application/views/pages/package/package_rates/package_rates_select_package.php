<div class="bg-white mt-4">
  <div class="border-bottom border-3 border-primary p-0"></div>
  <div class="border">
    <div class="p-0">
      <button class="btn border-0 w-100 text-start py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSelectPackage" aria-expanded="false">
        <div class="d-flex justify-content-between">
          <div class="fs-6 fw-bold text-dark">
            Select Package
          </div>
          <div class="fs-6 text-secondary">
            <i class="fas fa-chevron-down"></i>
          </div>
        </div>
      </button>
    </div>
    <div class="border-top collapse show" id="collapseSelectPackage">
      <div class="p-3">
        <div class="row">
          <div class=" col-auto">
            <div class="form-check fs-7">
              <input class="form-check-input" type="radio" name="rdoPackageType" id="rdoSic" checked>
              <label class="form-check-label ps-1 text-secondary" for="rdoSic">
                Join Tour Package
              </label>
            </div>
          </div>
          <div class=" col-auto">
            <div class="form-check fs-7">
              <input class="form-check-input" type="radio" name="rdoPackageType" id="rdoPrivate">
              <label class="form-check-label ps-1 text-secondary" for="rdoPrivate">
                Private Package
              </label>
            </div>
          </div>
        </div>
      </div>
      <div class="p-3">

        <?php
        $array = [
          [
            "name" => "Grade A",
            "period" => "05/01/2024 to 12/29/2024",
            "active" => true,
          ],
          [
            "name" => "Grade B",
            "period" => "05/01/2024 to 12/29/2024",
            "active" => false,
          ],
          [
            "name" => "Grade C",
            "period" => "05/01/2024 to 12/29/2024",
            "active" => false,
          ],
        ];
        ?>

        <div class="row g-0">
          <?php
          foreach ($array as $key => $item) {
            $item['active'] ? $classActive = 'text-success fw-bold' : $classActive = 'text-secondary';
            $item['active'] ? $iconActive = 'fas fa-check-circle' : $iconActive = 'far fa-circle';
          ?>
            <div class="col-12">
              <div class="border-top py-3">
                <div class="row g-3 justify-content-between">
                  <div class="col-auto">
                    <div class="row g-3">
                      <div class="col-auto  fs-6 <?php echo $classActive; ?>">
                        <i class="<?php echo $iconActive; ?>"></i>
                      </div>
                      <div class="col-auto  fs-6 <?php echo $classActive; ?>">
                        <?php echo $item['name']; ?>
                      </div>
                      <div class="col-auto  fs-6 <?php echo $classActive; ?>">
                        <?php echo $item['period']; ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-auto">
                    <?php if ($item['active'] !== true) { ?>
                      <button class="btn btn-outline-primary rounded-1 fs-7 py-1">
                        Change Package
                      </button>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="bg-white border rounded-1 mb-3">
  <div class="bg-light">
    <div class="border-0 w-100 py-2 px-3 text-start">
      <div class="d-flex align-items-center">
        <div class="fs-7 pe-3 text-secondary"><i class="fas fa-hotel"></i></div>
        <div class="fs-7 fw-bold text-dark">3 Day Kyoto, Osaka & Nara Tour from Tokyo </div>
      </div>
    </div>
  </div>
  <div class="">
    <?php for($room=1;$room<=2;$room++) {?>
    <div class="border-top p-3 ">
      <div class="row gy-1 gx-3">
        <div class="col-auto">
          <div class="fs-8 fw-bold text-dark"> Room <?php echo $room; ?> </div>
        </div>
        <div class="col-auto">
          <div class="fs-8 text-secondary">
            2 Adults, 1 Child(s) </div>
        </div>
      </div>
    </div>
    <div class="pb-3 px-3">
      <div class="row g-3 mb-2 align-items-end  ">
        <div class="col-7 col-md-3">
          <div class="d-block">
            <div class="fs-7 fw-bold text-dark"> Prefix <span class="text-danger">*</span></div>
          </div>
          <div class="pt-1">
            <select formcontrolname="prefixCode" class="form-select rounded-0 fs-7 ">
              <option value=""> Select </option>
              <option value="MA01010001">Mr.</option>
              <option value="MA01010002">Mrs.</option>
              <option value="MA01010004">Ms.</option>
            </select>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="d-block">
            <div class="row justify-content-between align-items-end">
              <div class="col-auto col-md-12 fs-7 fw-bold text-dark"> First name <span class="text-danger">*</span></div>
            </div>
          </div>
          <div class="pt-1"><input type="text" autocomplete="off" formcontrolname="name" class="form-control rounded-0 fs-7 " placeholder="English Only"></div>
        </div>
        <div class="col-12 col-md-4">
          <div class="d-block">
            <div class="row justify-content-between align-items-end">
              <div class="col-auto col-md-12 fs-7 fw-bold text-dark"> Last name / Surname <span class="text-danger">*</span></div>
            </div>
          </div>
          <div class="pt-1"><input type="text" autocomplete="off" formcontrolname="surname" class="form-control rounded-0 fs-7 " placeholder="English Only"></div>
        </div>
      </div>
      <div class="row g-3 mb-2 align-items-end  ">
        <div class="col-7 col-md-3">
          <div class="d-md-none">
            <div class="fs-7 fw-bold text-dark"> Prefix <span class="text-danger">*</span></div>
          </div>
          <div class="pt-1">
            <select formcontrolname="prefixCode" class="form-select rounded-0 fs-7 ">
              <option value=""> Select </option>
              <option value="MA01010001">Mr.</option>
              <option value="MA01010002">Mrs.</option>
              <option value="MA01010004">Ms.</option>
            </select>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="d-md-none">
            <div class="row justify-content-between align-items-end">
              <div class="col-auto col-md-12 fs-7 fw-bold text-dark"> First name <span class="text-danger">*</span></div>
            </div>
          </div>
          <div class="pt-1"><input type="text" autocomplete="off" formcontrolname="name" class="form-control rounded-0 fs-7 " placeholder="English Only"></div>
        </div>
        <div class="col-12 col-md-4">
          <div class="d-md-none">
            <div class="row justify-content-between align-items-end">
              <div class="col-auto col-md-12 fs-7 fw-bold text-dark"> Last name / Surname <span class="text-danger">*</span></div>
            </div>
          </div>
          <div class="pt-1"><input type="text" autocomplete="off" formcontrolname="surname" class="form-control rounded-0 fs-7 " placeholder="English Only"></div>
        </div>
      </div>
      <div class="row g-3 mb-2 align-items-end  ">
        <div class="col-7 col-md-3">
          <div class="d-md-none">
            <div class="fs-7 fw-bold text-dark"> Prefix <span class="text-danger">*</span></div>
          </div>
          <div class="pt-1">
            <select formcontrolname="prefixCode" class="form-select rounded-0 fs-7 ">
              <option value=""> Select </option>
              <option value="MA01010001">Mr.</option>
              <option value="MA01010002">Mrs.</option>
              <option value="MA01010004">Ms.</option>
            </select>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="d-md-none">
            <div class="row justify-content-between align-items-end">
              <div class="col-auto col-md-12 fs-7 fw-bold text-dark"> First name <span class="text-danger">*</span></div>
            </div>
          </div>
          <div class="pt-1"><input type="text" autocomplete="off" formcontrolname="name" class="form-control rounded-0 fs-7 " placeholder="English Only"></div>
        </div>
        <div class="col-12 col-md-4">
          <div class="d-md-none">
            <div class="row justify-content-between align-items-end">
              <div class="col-auto col-md-12 fs-7 fw-bold text-dark"> Last name / Surname <span class="text-danger">*</span></div>
            </div>
          </div>
          <div class="pt-1"><input type="text" autocomplete="off" formcontrolname="surname" class="form-control rounded-0 fs-7 " placeholder="English Only"></div>
        </div>
      </div>
    </div>
    <?php 
    }
    ?>
  </div>
</div>

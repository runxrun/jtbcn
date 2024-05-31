<div class="bg-white border rounded-1 mb-3">
  <div class="bg-light">
    <div class="border-0 w-100 py-2 px-3 text-start">
      <div class="d-flex align-items-center">
        <div class="fs-7 pe-3 text-secondary"><i class="fas fa-running"></i></div>
        <div class="fs-7 fw-bold text-dark"> Downtown Osaka Walking and Local Food Tour </div>
      </div>
    </div>
  </div>

  <div class="collapse show" id="collapseActivityInfo">
    <div class="border-top p-3 ">
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
    </div>

    <div class="pb-3 px-3">
      <div class="row">
        <div class="col-12 col-lg-11">
          <div class="fs-7 fw-bold text-dark"> Remark </div>
          <div class="pt-1">
            <textarea formcontrolname="remark" rows="4" class="form-control rounded-0 fs-7" placeholder="Enter Remark"></textarea>
          </div>
        </div>
      </div>
    </div>

    <div class="d-none" formgroupname="speacialRequest">
      <div class="p-3 border-top">
        <div class="pb-2">
          <div class="pb-2 fs-7 fw-bold text-dark"> Special Request </div>
          <div class="pb-2 fs-8 text-secondary">
            Please note that we cannot guarantee these requests will be fulfilled.
            All special requests are subject to the hotel's availability and may result
            in extra charges to your account.
          </div>
        </div>
        <div class="row fs-7 text-secondary">
          <div class="pb-2 col-12 col-md-4">
            <div class="form-check">
              <input type="checkbox" id="honeymooners" formcontrolname="honeymooners" class="form-check-input rounded-0 ">
              <label for="honeymooners" class="form-check-label">
                Honeymooners
              </label>
            </div>
          </div>
          <div class="pb-2 col-12 col-md-4">
            <div class="form-check">
              <input type="checkbox" id="nonSmoking" formcontrolname="nonSmoking" class="form-check-input rounded-0 ">
              <label for="nonSmoking" class="form-check-label"> Non
                Smoking
              </label>
            </div>
          </div>
          <div class="pb-2 col-12 col-md-4">
            <div class="form-check">
              <input type="checkbox" id="highFloor" formcontrolname="highFloor" class="form-check-input rounded-0 ">
              <label for="highFloor" class="form-check-label"> High
                Floor
              </label>
            </div>
          </div>
          <div class="pb-2 col-12 col-md-4">
            <div class="form-check">
              <input type="checkbox" id="lowFloor" formcontrolname="lowFloor" class="form-check-input rounded-0 ">
              <label for="lowFloor" class="form-check-label"> Low
                Floor
              </label>
            </div>
          </div>
          <div class="pb-2 col-12 col-md-4">
            <div class="form-check">
              <input type="checkbox" id="roomOnSameFloor" formcontrolname="roomOnSameFloor" class="form-check-input rounded-0 ">
              <label for="roomOnSameFloor" class="form-check-label">
                Room On Same Floor
              </label>
            </div>
          </div>
          <div class="pb-2 col-12 col-md-4">
            <div class="form-check">
              <input type="checkbox" id="interconnectingRooms" formcontrolname="interconnectingRooms" class="form-check-input rounded-0 ">
              <label for="interconnectingRooms" class="form-check-label">
                Interconnected Rooms
              </label>
            </div>
          </div>
          <div class="pb-2 col-12 col-md-4">
            <div class="form-check"><input type="checkbox" id="adjoiningRooms" formcontrolname="adjoiningRooms" class="form-check-input rounded-0 "><label for="adjoiningRooms" class="form-check-label">
                Ajoining Rooms
              </label>
            </div>
          </div>
        </div>
        <div class="pt-3">
          <div class="row fs-7 text-secondary">
            <div class="pb-2 col-12 col-md-4">
              <div class="form-check">
                <input type="checkbox" id="earlyCheckin" formcontrolname="earlyCheckin" class="form-check-input rounded-0 ">
                <label for="earlyCheckin" class="form-check-label">
                  Early Check In
                </label>
              </div>
              <div class="row">
                <div class="col-6 col-lg-8 py-1">
                  <input formcontrolname="earlyCheckinInput" placeholder="00:00" class="form-control rounded-0 fs-8 " disabled="">
                </div>
              </div>
            </div>
            <div class="pb-2 col-12 col-md-4">
              <div class="form-check">
                <input type="checkbox" id="lateCheckout" formcontrolname="lateCheckout" class="form-check-input rounded-0 ">
                <label for="lateCheckout" class="form-check-label">
                  Late Check Out
                </label>
              </div>
              <div class="row">
                <div class="col-6 col-lg-8 py-1">
                  <input formcontrolname="lateCheckoutInput" placeholder="00:00" class="form-control rounded-0 fs-8 " disabled="">
                </div>
              </div>
            </div>
            <div class="pb-2 col-12 col-md-4">
              <div class="form-check">
                <input type="checkbox" id="requestBabyCot" formcontrolname="requestBabyCot" class="form-check-input rounded-0 ">
                <label for="requestBabyCot" class="form-check-label">
                  Request Baby Cot
                </label>
              </div>
              <div class="row">
                <div class="col-6 col-lg-8 py-1">
                  <input type="number" formcontrolname="numberOfCot" placeholder="0" min="0" max="9" class="form-control rounded-0 fs-8 " disabled="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="pt-4 pb-2">
          <div class="row">
            <div class="col-12 col-lg-11">
              <div class="fs-7 fw-bold text-dark"> Remark </div>
              <div class="pt-1">
                <textarea formcontrolname="remark" rows="4" class="form-control rounded-0 fs-7" placeholder="Enter Remark"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
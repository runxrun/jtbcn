<div class="bg-white border rounded-1 mb-3">
  <div class="bg-light border-bottom py-2 px-3 ">
    <div class="fs-7 fw-bold text-dark">
      Guest Information and Payment
    </div>
  </div>
  <div class="p-4 ">
    <div class="d-flex align-items-center">
      <div class="fs-7 text-dark rn-arrow-anime"><i class="fas fa-arrow-right"></i></div>
      <div class="ps-1">
        <button class="btn p-0 fs-7 fw-bold text-dark text-decoration-underline border-0">
          Already have an account
        </button>
      </div>
    </div>
  </div>
  <form novalidate="" class="">
    <div class="pt-2 pb-4 px-4">
      <div class="row">
        <div class="pb-3 col-7 col-md-3">
          <div class="fs-7 text-secondary"> 
            Prefix <span class="text-danger">*</span>
          </div>
          <div class="pt-1">
            <select formcontrolname="prefix" class="form-select rounded-0 fs-7 ">
              <option value="" disabled=""> Select </option>
              <option value="MA01010001" class="">Mr.</option>
              <option value="MA01010002" class="">Mrs.</option>
              <option value="MA01010004" class="">Ms.</option>
            </select>
          </div>
        </div>
        <div class="pb-3 col-12 col-md-4">
          <div class="fs-7 text-secondary"> First name <span class="text-danger">*</span></div>
          <div class="pt-1">
            <input type="text" autocomplete="off" formcontrolname="name" class="form-control rounded-0 fs-7 " placeholder="English Only">
          </div>
        </div>
        <div class="pb-3 col-12 col-md-5 col-xl-5">
          <div class="fs-7 text-secondary"> Last name / Surname <span class="text-danger">*</span></div>
          <div class="pt-1">
            <input type="text" autocomplete="off" formcontrolname="surname" class="form-control rounded-0 fs-7 " placeholder="English Only">
          </div>
        </div>
        <div class="pb-3 col-12 col-md-7">
          <div class="fs-7 text-secondary "> 
            Nationality <span class="text-danger">*</span>
          </div>
          <div class="pt-1 ">
            <select formcontrolname="nationality" class="form-select rounded-0 fs-7 ">
              <option value="null"> Select Country </option>
            </select>
          </div>
        </div>
        <div class="pb-3 col-12 col-md-5">
          <div class="fs-7 text-secondary "> Mobile Number <span class="text-danger">*</span>
          </div>
          <div class="pt-1 ">
            <input type="text" name="telNo" autocomplete="off" formcontrolname="mobileNo" class="form-control rounded-0 fs-7 " placeholder="Enter your number">
          </div>
        </div>
      </div>
      <div class="py-3">
        <div class="fs-7 fw-bold text-dark">
          Register a new account
        </div>
      </div>
      <div class="row">
        <div class="pb-3 col-12 col-md-7">
          <div class="fs-7 text-secondary"> Email Address <span class="text-danger">*</span></div>
          <div class="pt-1">
            <input autocomplete="off" formcontrolname="email" class="form-control rounded-0 fs-7 " placeholder="example@email.com">
          </div>
          <div class="pt-2 text-secondary fs-9">
            If you already have an account with JTB, please click on the sign-in.
          </div>
        </div>
        <div class="pb-3 col-12 col-md-5 col-lg-5">
          <div class="fs-7 text-secondary">Password <span class="text-danger">*</span></div>
          <div class="pt-1 input-group">
            <input formcontrolname="password" autocomplete="off" maxlength="6" class="form-control rounded-0 fs-7 text-dark " placeholder="Enter your password" type="password">
            <button class="input-group-text rounded-0 fs-7 bg-white">
              <i class="fas fa-eye-slash"></i>
            </button>
          </div>
          <div class="pt-2 text-secondary fs-9">
            To create a password must have at least 8 characters and contain at least two of the following: uppercase letters, lowercase letters, numbers, and symbols.
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
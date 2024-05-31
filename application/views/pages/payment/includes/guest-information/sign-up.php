<div class="bg-white border rounded-1 mb-3">
    <div class="bg-light border-bottom py-2 px-3 ">
        <div class="fs-7 fw-bold text-dark"> Guest Information and Payment ** </div>
    </div>
    <div class="p-4 ">
        <div class="d-flex align-items-center">
            <div class="fs-7 text-dark rn-arrow-anime"><i class="fas fa-arrow-right"></i></div>
            <div class="ps-1">
                <button class="btn p-0 fs-7 fw-bold text-dark text-decoration-underline border-0">
                    Sign in for Faster Booking **
                </button>
            </div>
        </div>
    </div>
    <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
        <div class="pt-2 pb-4 px-4">
            <div class="row">
                <div class="pb-3 col-7 col-md-3">
                    <div class="fs-7 text-secondary"> Prefix <span class="text-danger">*</span></div>
                    <div class="pt-1">
                        <select formcontrolname="prefix"
                            class="form-select rounded-0 fs-7 ng-untouched ng-pristine ng-invalid">
                            <option value="" disabled=""> Select </option>
                            <option value="MA01010001" class="">Mr.</option>

                            <option value="MA01010002" class="">Mrs.
                            </option>
                            <option value="MA01010004" class="">Ms.</option>

                        </select>
                    </div>
                </div>
                <div class="pb-3 col-12 col-md-4">
                    <div class="fs-7 text-secondary"> First name <span class="text-danger">*</span></div>
                    <div class="pt-1">
                        <input type="text" autocomplete="off" formcontrolname="name" apptypeengonly="" required=""
                            class="form-control rounded-0 fs-7 ng-untouched ng-pristine ng-invalid"
                            placeholder="English Only">
                    </div>
                </div>
                <div class="pb-3 col-12 col-md-5 col-xl-5">
                    <div class="fs-7 text-secondary"> Last name / Surname <span class="text-danger">*</span></div>
                    <div class="pt-1">
                        <input type="text" autocomplete="off" formcontrolname="surname" apptypeengonly="" required=""
                            class="form-control rounded-0 fs-7 ng-untouched ng-pristine ng-invalid"
                            placeholder="English Only">
                    </div>
                </div>
                <div class="pb-3 col-12 col-md-7">
                    <div class="fs-7 text-secondary"> Email Address <span class="text-danger">*</span></div>
                    <div class="pt-1">
                        <input autocomplete="off" formcontrolname="email" required=""
                            class="form-control rounded-0 fs-7 ng-untouched ng-pristine ng-invalid"
                            placeholder="example@email.com">
                    </div>
                </div>
                <div class="pb-3 col-12 col-md-5 col-xl-5">
                    <div class="fs-7 text-secondary "> Nationality <span class="text-danger">*</span>
                    </div>
                    <div class="pt-1 ">
                        <select required="" formcontrolname="nationality"
                            class="form-select rounded-0 fs-7 ng-untouched ng-pristine ng-invalid">
                            <option value="null"> Select Country </option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="py-3">
                <div class="fs-7 fw-bold text-dark"> Kindly provide your phone number and
                    establish a PIN code </div>
            </div>
            <div class="row">
                <div class="pb-3 col-12 col-md-7">
                    <div class="fs-7 text-secondary"> Mobile Number <span class="text-danger">*</span></div>
                    <div class="pt-1">
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <select formcontrolname="countryCodeRegister"
                                    class="form-select rounded-0 fs-8 ng-untouched ng-pristine ng-valid ">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-text rounded-0 fs-8 text-secondary">+66 </span>
                                    <input type="text" name="telNo" autocomplete="off" formcontrolname="mobileNo"
                                        required=""
                                        class="form-control rounded-0 fs-7 ng-untouched ng-pristine ng-invalid"
                                        placeholder="Enter your number">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-3 col-12 col-md-5 col-lg-5">
                    <div class="fs-7 text-secondary"> Create A Pin <span class="text-danger">*</span></div>
                    <div class="pt-1 input-group">
                        <input formcontrolname="password" autocomplete="off" maxlength="6" required=""
                            class="form-control rounded-0 fs-7 text-dark ng-untouched ng-pristine ng-invalid"
                            placeholder="Enter a 6-digit PIN code only" type="password">
                        <button class="input-group-text rounded-0 fs-7 bg-white">
                            <i class="fas fa-eye-slash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="bg-white border-top">
    <div class="container py-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb fs-8 p-0 m-0">
                <li class="breadcrumb-item"><a href="/" routerlink="/" class="text-decoration-none"> Home </a></li>
                <li aria-current="page" class="breadcrumb-item active"> Change Password
                </li>
            </ol>
        </nav>
    </div>
</div>
<div class="bg-light border-top">
    <div class="container py-4">
        <div class="row">
            <div class="col-12 col-lg-3 order-2 order-lg-1">
                <?php
                include (__DIR__ . "/../components/menu-account/menu-account.php")
                    ?>
            </div>
            <div class="pb-3 pb-lg-0 col-12 col-lg-9 order-1 order-lg-2">
                <div style="min-height: 500px;">
                    <div class="bg-white border mb-3">
                        <div class="p-3 border-bottom">
                            <div class="fs-7 fw-bold text-dark ng-star-inserted"><span>Pornthip Pim </span><span
                                    class="d-none">pornthipsaefung@gmail.com</span></div>
                            <div class="fs-7 text-secondary"></div>
                        </div>
                        <div class="p-3">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="pb-4 fs-4 fw-bold text-sp"> Change Password </div>
                                    <div class="pb-3">
                                        <div class="pb-1 fs-7 text-secondary"> Current Password </div>
                                        <div><input type="password" formcontrolname="oldPassword"
                                                class="form-control rounded-0">
                                        </div>
                                    </div>
                                    <div class="pb-3">
                                        <div class="pb-1 fs-7 text-secondary"> Create New Password </div>
                                        <div><input type="password" formcontrolname="newPassword"
                                                class="form-control rounded-0">
                                        </div>
                                    </div>
                                    <div class="pb-3">
                                        <div class="pb-1 fs-7 text-secondary"> Confirm New Password </div>
                                        <div><input type="password" formcontrolname="confirmPassword"
                                                class="form-control rounded-0">
                                        </div>
                                    </div>
                                    <div class="pt-2 fs-7 text-secondary"> Passwords must have at least 8 characters and
                                        contain at least two of the following: uppercase letters, lowercase letters,
                                        numbers, and symbols. </div>
                                    <div class="py-4"><button class="btn btn-primary fs-7 rounded-0 px-4"> Change
                                            Password </button></div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
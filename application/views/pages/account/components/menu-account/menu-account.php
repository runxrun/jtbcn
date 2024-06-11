<div class="rn-sticky">
    <div class="bg-white border">
        <div class="border-bottom py-3 px-4">
            <div class="fs-7 fw-bold text-dark"> MY ACCOUNT </div>
        </div>
        <div class="py-2 p-lg-0 rn-sidemenu-account"><button routerlink="/account/bookings" routerlinkactive="active"
                class="btn border-0 rounded-0 w-100 py-2 px-3 py-lg-3 px-lg-3 text-start" tabindex="0">
                <div class="d-flex" onclick="window.open('/account/bookings', '_parent')">
                    <div class="pe-2 fs-7 text-secondary"><i class="fas fa-calendar-check"></i>
                    </div>
                    <div class="ps-1 fs-7 text-secondary">My Bookings</div>
                </div>
            </button><button routerlink="/account/profile" routerlinkactive="active"
                class="btn border-0 rounded-0 w-100 py-2 px-3 py-lg-3 px-lg-3 text-start " tabindex="0">
                <div class="d-flex" onclick="window.open('/account/profile', '_parent')">
                    <div class="pe-2 fs-7 text-secondary"><i class="fas fa-address-card"></i>
                    </div>
                    <div class="ps-1 fs-7 text-secondary">User Profile</div>
                </div>
            </button>
            <!----><button routerlink="/account/changepassword" routerlinkactive="active"
                class="btn border-0 rounded-0 w-100 py-2 px-3 py-lg-3 px-lg-3 text-start" tabindex="0">
                <div class="d-flex" onclick="window.open('/account/change-password' , '_parent')">
                    <div class="pe-2 fs-7 text-secondary"><i class="fas fa-lock"></i></div>
                    <div class="ps-1 fs-7 text-secondary">Change Password</div>
                </div>
            </button>
            <!----><button routerlink="/account/" routerlinkactive="active"
                class="btn border-0 rounded-0 w-100 py-2 px-3 py-lg-3 px-lg-3 text-start" tabindex="0">
                <div class="d-flex" onclick="window.open('/account/')">
                    <div class="pe-2 fs-7 text-secondary"><i class="fas fa-power-off"></i></div>
                    <div class="ps-1 fs-7 text-secondary">Log out</div>
                </div>
            </button>
        </div>
    </div>
</div>
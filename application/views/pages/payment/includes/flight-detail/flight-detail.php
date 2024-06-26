<div class="bg-white border rounded-1 mb-3 text-sp ">
    <div class="bg-light">
        <div class="border-0 w-100 py-2 px-3 text-start">
            <div class="row g-2 align-items-center">
                <div class="col-auto">
                    <div class="fs-7 text-secondary"><i class="fas fa-plane-departure"></i></div>
                </div>
                <div class="col-auto">
                    <button data-bs-toggle="collapse" data-bs-target="#collapseFlightDetail" aria-expanded="false"
                        aria-controls="collapseFlightDetail" class="btn border-0 p-0 fs-7 fw-bold text-dark"> Flight
                        detail </button>
                </div>
                <div class="col-auto">
                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseFlightDetail"
                        aria-expanded="false" aria-controls="collapseFlightDetail"
                        class="btn border-0 p-0 fs-7 text-primary"> Update flight information </button>
                </div>
            </div>
        </div>
    </div>
    <div formgroupname="flightDetail" class="">
        <div class="p-3 border-top">
            <div id="collapseFlightDetail" class="collapse show">
                <div class="row">
                    <div class="pb-3 col-6 col-xl-3">
                        <div class="fs-7 text-secondary text-truncate"> Flight from date
                        </div>
                        <div class="dropdown">
                            <div id="dropdownFlightCalendarFrom" data-bs-toggle="dropdown" aria-expanded="false"
                                class="pt-1 input-group">
                                <input type="text" autocomplete="off" class="form-control rounded-0 fs-7">
                                <span class="input-group-text rounded-0 fs-7">
                                    <i class="fas fa-calendar-day"></i>
                                </span>
                            </div>
                            <div aria-labelledby="dropdownFlightCalendarFrom" class="dropdown-menu border-0">
                                <div class="pt-1">
                                    calendar
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="pb-3 col-6 col-xl-3">
                        <div class="fs-7 text-secondary text-truncate"> Estimate Arrival Time </div>
                        <div class="pt-1">
                            <input type="text" formcontrolname="fromTime" placeholder="00:00" autocomplete="off"
                                class="form-control rounded-0 fs-7 ">
                        </div>
                    </div>
                    <div class="pb-3 col-6 col-xl-3">
                        <div class="fs-7 text-secondary text-truncate"> Flight number
                        </div>
                        <div class="pt-1">
                            <input type="text" formcontrolname="fromFlight" autocomplete="off"
                                class="form-control rounded-0 fs-7 ">
                        </div>
                    </div>
                    <div class="pb-3 col-6 col-xl-3">
                        <div class="fs-7 text-secondary text-truncate"> Travel from
                        </div>
                        <div class="pt-1">
                            <input type="text" formcontrolname="voyageFrom" autocomplete="off"
                                class="form-control rounded-0 fs-7 ">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="pb-3 col-6 col-xl-3">
                        <div class="fs-7 text-secondary text-truncate"> Flight to date
                        </div>
                        <div class="dropdown">
                            <div id="dropdownFlightCalendarTo" data-bs-toggle="dropdown" aria-expanded="false"
                                class="pt-1 input-group">
                                <input type="text" autocomplete="off" class="form-control rounded-0 fs-7">
                                <span class="input-group-text rounded-0 fs-7">
                                    <i class="fas fa-calendar-day"></i>
                                </span>
                            </div>
                            <div aria-labelledby="dropdownFlightCalendarTo" class="dropdown-menu border-0">
                                <div class="pt-1">
                                    calendar
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-3 col-6 col-xl-3">
                        <div class="fs-7 text-secondary text-truncate"> Estimate
                            Departure Time </div>
                        <div class="pt-1">
                            <input type="text" formcontrolname="toTime" placeholder="00:00" autocomplete="off"
                                class="form-control rounded-0 fs-7 ">
                        </div>
                    </div>
                    <div class="pb-3 col-6 col-xl-3">
                        <div class="fs-7 text-secondary text-truncate"> Flight number
                        </div>
                        <div class="pt-1">
                            <input type="text" formcontrolname="toFlight" autocomplete="off"
                                class="form-control rounded-0 fs-7 ">
                        </div>
                    </div>
                    <div class="pb-3 col-6 col-xl-3">
                        <div class="fs-7 text-secondary text-truncate"> Travel to </div>
                        <div class="pt-1">
                            <input type="text" formcontrolname="voyageTo" autocomplete="off"
                                class="form-control rounded-0 fs-7 ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
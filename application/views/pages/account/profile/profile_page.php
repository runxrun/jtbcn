<div class="bg-white border-top">
    <div class="container py-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb fs-8 p-0 m-0">
                <li class="breadcrumb-item"><a href="/" routerlink="/" class="text-decoration-none"> Home </a></li>
                <li aria-current="page" class="breadcrumb-item active"> User Profile </li>
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
                <div class="bg-white border p-4 ">
                    <div class="input-group">
                        <div class="pb-4 fs-4 fw-bold text-sp">
                            <i class="fas fa-user-alt pe-2"></i>User Profile
                        </div>
                    </div>

                    <div class="">
                        <div class="row">
                            <div class="pb-3 col-7 col-md-3 col-xl-2">
                                <div class="fs-7 text-secondary"> Prefix </div>
                                <div class="pt-1"><select formcontrolname="title" class="form-select rounded-0 fs-7">
                                        <option value="NONE" disabled=""> Select </option>
                                        <option value="MA01010001" class="">
                                            Mr.</option>
                                        <!---->
                                        <option value="MA01010002" class="">
                                            Mrs.</option>
                                        <!---->
                                        <option value="MA01010004" class="">
                                            Ms.</option>
                                        <!---->
                                        <!---->
                                    </select></div>
                            </div>
                            <div class="pb-3 col-12 col-md-6 col-xl-3">
                                <div class="fs-7 text-secondary"> First Name </div>
                                <div class="pt-1"><input apptypeengonly="" type="text" value="" formcontrolname="name"
                                        class="form-control rounded-0 fs-7" placeholder="First Name"></div>
                            </div>
                            <div class="pb-3 col-12 col-md-6 col-xl-5">
                                <div class="fs-7 text-secondary"> Last name / Surname </div>
                                <div class="pt-1"><input apptypeengonly="" type="text" value=""
                                        formcontrolname="lastName" class="form-control rounded-0 fs-7"
                                        placeholder="Last name / Surname"></div>
                            </div>
                            <div class="pb-3 col-12 col-md-6 col-xl-5">
                                <div class="fs-7 text-secondary"> Nationality </div>
                                <div class="pt-1">
                                    <select class="form-select rounded-0 fs-7">
                                        <option value="NONE" disabled=""> Select Nationality
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="pb-3 col-12 col-md-6 col-xl-5">
                                <div class="fs-7 text-secondary"> Phone Number </div>
                                <div class="pt-1">
                                    <div class="input-group">
                                        <span class="input-group-text rounded-0 fs-7">
                                            <i class="fas fa-mobile-alt"></i>
                                        </span>
                                        <input appnumberonly="" type="text" formcontrolname="mobileNo"
                                            class="form-control rounded-0 fs-7 ng-pristine" placeholder="Phone Number"
                                            disabled="">
                                    </div>
                                </div>
                            </div>
                            <div class="pb-3 col-12 col-xl-7">
                                <div class="row g-3">
                                    <div class="col-12 col-sm-4">
                                        <div class="fs-7 text-secondary"> Birthday </div>
                                        <div class="pt-1">
                                            <div class="input-group">
                                                <select formcontrolname="birthDate"
                                                    class="form-control fs-7 rounded-0 m-0">
                                                    <option value="Mr." disabled="">
                                                        Birthday </option>
                                                    <option value="00" disabled=""> Day
                                                    </option>
                                                    <option value="01">1</option>
                                                    <option value="02">2</option>
                                                    <option value="03">3</option>
                                                    <option value="04">4</option>
                                                    <option value="05">5</option>
                                                    <option value="06">6</option>
                                                    <option value="07">7</option>
                                                    <option value="08">8</option>
                                                    <option value="09">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>
                                                <span class="input-group-text rounded-0 fs-7">
                                                    <i class="far fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="fs-7 text-secondary"> Month </div>
                                        <div class="pt-1">
                                            <div class="input-group">
                                                <select formcontrolname="birthMonth"
                                                    class="form-control rounded-0 fs-7">
                                                    <option value="00" disabled=""> Month
                                                    </option>
                                                    <option value="01"> January </option>
                                                    <option value="02"> February </option>
                                                    <option value="03"> March </option>
                                                    <option value="04"> April </option>
                                                    <option value="05"> May </option>
                                                    <option value="06"> June </option>
                                                    <option value="07"> July </option>
                                                    <option value="08"> August </option>
                                                    <option value="09"> September </option>
                                                    <option value="10"> October </option>
                                                    <option value="11"> November </option>
                                                    <option value="12"> December </option>
                                                </select>
                                                <span class="input-group-text rounded-0 fs-7">
                                                    <i class="far fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="fs-7 text-secondary"> Year </div>
                                        <div class="pt-1">
                                            <div class="input-group">
                                                <select formcontrolname="birthYear" class="form-control rounded-0 fs-7">
                                                    <option value="0000" disabled=""> Year
                                                    </option>
                                                    <option value="2024" class=""> 2024 </option>
                                                    <option value="2023" class=""> 2023 </option>
                                                    <option value="2022" class=""> 2022 </option>
                                                    <option value="2021" class=""> 2021 </option>
                                                    <option value="2020" class=""> 2020 </option>
                                                    <option value="2019" class=""> 2019 </option>
                                                    <option value="2018" class=""> 2018 </option>
                                                    <option value="2017" class=""> 2017 </option>
                                                    <option value="2016" class=""> 2016 </option>
                                                    <option value="2015" class=""> 2015 </option>
                                                    <option value="2014" class=""> 2014 </option>
                                                    <option value="2013" class=""> 2013 </option>
                                                    <option value="2012" class=""> 2012 </option>
                                                    <option value="2011" class=""> 2011 </option>
                                                    <option value="2010" class=""> 2010 </option>
                                                    <option value="2009" class=""> 2009 </option>
                                                    <option value="2008" class=""> 2008 </option>
                                                    <option value="2007" class=""> 2007 </option>
                                                    <option value="2006" class=""> 2006 </option>
                                                    <option value="2005" class=""> 2005 </option>
                                                    <option value="2004" class=""> 2004 </option>
                                                    <option value="2003" class=""> 2003 </option>
                                                    <option value="2002" class=""> 2002 </option>
                                                    <option value="2001" class=""> 2001 </option>
                                                    <option value="2000" class=""> 2000 </option>
                                                    <option value="1999" class=""> 1999 </option>
                                                    <option value="1998" class=""> 1998 </option>
                                                    <option value="1997" class=""> 1997 </option>
                                                    <option value="1996" class=""> 1996 </option>
                                                    <option value="1995" class=""> 1995 </option>
                                                    <option value="1994" class=""> 1994 </option>
                                                    <option value="1993" class=""> 1993 </option>
                                                    <option value="1992" class=""> 1992 </option>
                                                    <option value="1991" class=""> 1991 </option>
                                                    <option value="1990" class=""> 1990 </option>
                                                    <option value="1989" class=""> 1989 </option>
                                                    <option value="1988" class=""> 1988 </option>
                                                    <option value="1987" class=""> 1987 </option>
                                                    <option value="1986" class=""> 1986 </option>
                                                    <option value="1985" class=""> 1985 </option>
                                                    <option value="1984" class=""> 1984 </option>
                                                    <option value="1983" class=""> 1983 </option>
                                                    <option value="1982" class=""> 1982 </option>
                                                    <option value="1981" class=""> 1981 </option>
                                                    <option value="1980" class=""> 1980 </option>

                                                    <!---->
                                                </select>
                                                <span class="input-group-text rounded-0 fs-7">
                                                    <i class="far fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pt-4 pb-3">
                            <div class="fs-7 fw-bold text-dark text-sp"> We will send the
                                information to your email </div>
                        </div>
                        <div class="pb-3 col-12 col-md-6 col-xl-7">
                            <div class="fs-7 text-secondary"> Email Address </div>
                            <div class="pt-1"><input type="text" formcontrolname="email"
                                    class="form-control rounded-0 fs-7 ng-pristine" disabled=""></div>
                            <!---->
                        </div>
                        <div class="pt-4 pb-3">
                            <div class="fs-7 fw-bold text-dark text-sp"> Address Information
                            </div>
                        </div>
                        <div class="row">
                            <div class="pb-3 col-12 col-md-12 col-xl-4">
                                <div class="fs-7 text-secondary"> Address 1 </div>
                                <div class="pt-1"><input type="text" formcontrolname="address1"
                                        class="form-control rounded-0 fs-7"></div>
                                <!---->
                            </div>
                            <div class="pb-3 col-12 col-md-6 col-xl-4">
                                <div class="fs-7 text-secondary"> Address 2 </div>
                                <div class="pt-1"><input type="text" formcontrolname="address2"
                                        class="form-control rounded-0 fs-7"></div>
                            </div>
                            <div class="pb-3 col-12 col-md-6 col-xl-4">
                                <div class="fs-7 text-secondary"> Address 3 </div>
                                <div class="pt-1"><input type="text" formcontrolname="address3"
                                        class="form-control rounded-0 fs-7"></div>
                            </div>
                            <div class="pb-3 col-12 col-md-6 col-xl-4 ">
                                <div class="fs-7 text-secondary"> Country </div>
                                <div class="pt-1">
                                    <select formcontrolname="countryCode" class="form-select rounded-0 fs-7">
                                        <option value="" disabled=""> Select Country
                                        </option>
                                    </select>
                                </div>
                                <!---->
                            </div>
                            <!---->
                            <div class="pb-3 col-12 col-md-6 col-xl-4">
                                <div class="fs-7 text-secondary"> City </div>
                                <div class="pt-1">
                                    <select formcontrolname="cityCode" class="form-select rounded-0 fs-7 ">
                                        <option value="" disabled=""> Select City </option>
                                    </select>
                                </div>
                                <!---->
                            </div>
                        </div>
                        <div class="row d-none">
                            <div class="pb-3 col-12 col-md-6 col-xl-4">
                                <div class="fs-7 text-secondary"> State </div>
                                <div class="pt-1"><input type="text" formcontrolname="state"
                                        class="form-control rounded-0 fs-7"></div>
                                <!---->
                            </div>
                            <div class="pb-3 col-12 col-md-6 col-xl-4">
                                <div class="fs-7 text-secondary"> Zip Code </div>
                                <div class="pt-1"><input type="text" formcontrolname="zipcode"
                                        class="form-control rounded-0 fs-7"></div>
                                <!---->
                            </div>
                        </div>
                        <div hidden="">
                            <div> Optional </div>
                            <div>
                                <div> Email Subcription </div>
                                <div><input type="checkbox" id="ReceivedEmails" name="ReceivedEmails"
                                        formcontrolname="subScription" class="></div>
                                <div for=" ReceivedEmails"> Would Like To REceived Emails
                                </div>
                            </div>
                        </div>
                        <div class="py-4"><button class="btn btn-primary fs-7 rounded-0 px-4" disabled=""> Update
                                Profile </button>
                        </div>
                    </div>
                    <!---->
                </div>
            </div>
        </div>
    </div>
</div>
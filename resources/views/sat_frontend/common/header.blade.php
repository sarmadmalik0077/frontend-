<header class="container-fluid py-19 border-bottom">
    <div class="container">
        <div class="row">
            <div class="col-5 px-0 d-flex align-items-center justify-content-start gap-2">
                <a href="javascript:;">
                    <img src="{{asset('assets/images/logo/logosv.svg')}}" alt="Logo" width="182" height="61" class="d-inline-block align-text-top logo1024">
                </a>
                <div class="input-group w-361 align-self-center mt-2">
                    <input type="text" class="form-control plc h-46 h1024-28 br-bottom-left-6 br-top-left-6 bg-grey-100" placeholder="Search Your Dream Car" aria-label="Search Your Dream Car" aria-describedby="button-addon2">
                    <button class="btn search_header bg-black-900 clr-white-900 w-52 h-46 h1024-28 pt-3s1024" type="button" id="button-addon2">
                        <i class="fas fa-search clr-white-900"></i>
                    </button>
                </div>
            </div>
            <div class="col-7 d-flex justify-content-between align-items-center mt-2">
                <div class="dropdown">
                    <a class="remove_icon_drop btn-custom bg-white-900 clr-black-40 px-0 ff-Lato fs-16 fsr-12 fw-500 line-h-24 dropdown-toggle text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Country
                        <img src="{{asset('assets/images/common/countries-flag/pk.svg')}}" height="22" width="32px" class="img-fluid ms-1 bg-grey-100 p-1" alt="">
                    </a>

                    <!-- <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </li>
                    </ul> -->
                </div>
                <div class="dropdown">
                    <a class="bg-white-900 btn-custom clr-black-40 ff-Lato fs-16 fsr-12 fw-500 line-h-24 dropdown-toggle text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Currency <span class="fs-14 fsr-10 fw-600 ms-1">USD</span>
                    </a>

                    <ul class="dropdown-menu w-71 shadow">
                        <li class="hov-item-dd">
                            <a class="dropdown-item ff-Lato fs-14 fsr-10 clr-black-50 fw-600 line-h-20 px-2 py-0" href="#">JPY</a>
                        </li>
                        <li class="hov-item-dd">
                            <a class="dropdown-item ff-Lato fs-14 fsr-10 clr-black-50 fw-600 line-h-20 px-2 py-0" href="#">ERU</a>
                        </li>
                        <li class="hov-item-dd">
                            <a class="dropdown-item ff-Lato fs-14 fsr-10 clr-black-50 fw-600 line-h-20 px-2 py-0" href="#">NZD</a>
                        </li>
                        <li class="hov-item-dd">
                            <a class="dropdown-item ff-Lato fs-14 fsr-10 clr-black-50 fw-600 line-h-20 px-2 py-0" href="#">ZAR</a>
                        </li>
                        <li class="hov-item-dd">
                            <a class="dropdown-item ff-Lato fs-14 fsr-10 clr-black-50 fw-600 line-h-20 px-2 py-0" href="#">GBP</a>
                        </li>
                        <li class="hov-item-dd">
                            <a class="dropdown-item ff-Lato fs-14 fsr-10 clr-black-50 fw-600 line-h-20 px-2 py-0" href="#">CNY</a>
                        </li>
                        <li class="hov-item-dd">
                            <a class="dropdown-item ff-Lato fs-14 fsr-10 clr-black-50 fw-600 line-h-20 px-2 py-0" href="#">AUD</a>
                        </li>
                        <li class="hov-item-dd">
                            <a class="dropdown-item ff-Lato fs-14 fsr-10 clr-black-50 fw-600 line-h-20 px-2 py-0" href="#">CAD</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="bg-white-900 btn-custom clr-black-40 ff-Lato fs-16 fsr-12 fw-500 line-h-24 dropdown-toggle text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        English
                    </a>

                    <ul class="dropdown-menu w-100-s shadow">
                        <li class="hov-item-dd">
                            <a class="dropdown-item ff-Lato fs-14 fsr-10 clr-black-50 fw-600 line-h-20 px-2 py-0" href="#">English</a>
                        </li>
                        <li class="hov-item-dd">
                            <a class="dropdown-item ff-Lato fs-14 fsr-10 clr-black-50 fw-600 line-h-20 px-2 py-0" href="#">Urdu</a>
                        </li>
                        <li class="hov-item-dd">
                            <a class="dropdown-item ff-Lato fs-14 fsr-10 clr-black-50 fw-600 line-h-20 px-2 py-0" href="#">Japanese</a>
                        </li>
                        <li class="hov-item-dd">
                            <a class="dropdown-item ff-Lato fs-14 fsr-10 clr-black-50 fw-600 line-h-20 px-2 py-0" href="#">French</a>
                        </li>
                    </ul>
                </div>

                <div class="clr-black-40 ff-Lato fs-16 fsr-12 fw-500 line-h-24">
                    <img src="{{asset('assets/images/index/icon/heart-icon.svg')}}" width="27" height="25" alt="">
                    <span class="ms-1">Favorite</span>
                </div>
                <div class="cursor-pointer d-none">
                    <div class="dropdown">
                        <a class="btn-border-none bg-white-900 btn-custom clr-black-40 ff-Lato fs-16 fw-500 line-h-24 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="position-relative">
                                <svg width="21" height="26" class="dashborad_bell_icons img-bell1024">
                                    <use href="#bell_svg"></use>
                                </svg>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill fs-12 fsr-8 fw-600 bg-danger">
                  3
                </span>
                            </div>
                        </a>
                        <ul class="dropdown-menu w-300 shadow br-none">
                            <li class="p-1  border-bottom drop_hov_notific">
                                <a class="dropdown-item px-2" href="#">
                                    <div class="d-flex justify-content-between gap-2">
                                        <img src="{{asset('assets/images/index/icon/notifysvgbasket.svg')}}" width="38" height="38" class="align-self-start" alt="">
                                        <div>
                                            <div class="position-relative">
                                                <span class="position-absolute top-0 start-100 translate-middle h-8 w-8 rounded-pill bg-danger"></span>
                                                <p class="ff-Lato fs-12 fw-700 clr-black-40 text-wrap mb-0">Buy your car with SAT and save up to 30% off as compared to buying with local dealers</p>
                                            </div>
                                            <!-- <p class="text-end clr-blue-50 fs-14 fw-700 ff-Lato mb-0 me-3">How to Buy</p> -->
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="p-1  border-bottom drop_hov_notific">
                                <a class="dropdown-item px-2" href="#">
                                    <div class="d-flex justify-content-between gap-2">
                                        <img src="{{asset('assets/images/index/icon/shipnotify.svg')}}" width="38" height="38" class="align-self-start" alt="">
                                        <div>
                                            <div class="position-relative">
                                                <span class="position-absolute top-0 start-100 translate-middle h-8 w-8 rounded-pill bg-danger"></span>
                                                <p class="ff-Lato fs-12 fw-700 clr-black-40 text-wrap mb-0">Buy your car with SAT and save up to 30% off as compared to buying with local dealers</p>
                                            </div>
                                            <!-- <p class="text-end clr-blue-50 fs-14 fw-700 ff-Lato mb-0 me-3">Select your port</p> -->
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="p-1  border-bottom drop_hov_notific">
                                <a class="dropdown-item px-2" href="#">
                                    <div class="d-flex justify-content-between gap-2">
                                        <img src="{{asset('assets/images/index/icon/favnotify.svg')}}" width="38" height="38" class="align-self-start" alt="">
                                        <div>
                                            <div class="position-relative">
                                                <span class="position-absolute top-0 start-100 translate-middle h-8 w-8 rounded-pill bg-danger"></span>
                                                <p class="ff-Lato fs-12 fw-700 clr-black-40 text-wrap mb-0">Buy your car with SAT and save up to 30% off as compared to buying with local dealers</p>
                                            </div>
                                            <!-- <p class="text-end clr-blue-50 fs-14 fw-700 ff-Lato mb-0 me-3">Favorite list</p> -->
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="p-1 drop_hov_notific">
                                <a class="dropdown-item px-2" href="#">
                                    <div class="d-flex justify-content-between gap-2">
                                        <img src="{{asset('assets/images/index/icon/profilenotify.svg')}}" width="38" height="38" class="align-self-start" alt="">
                                        <div>
                                            <div class="position-relative">
                                                <span class="position-absolute top-0 start-100 translate-middle h-8 w-8 rounded-pill bg-danger"></span>
                                                <p class="ff-Lato fs-12 fw-700 clr-black-40 text-wrap mb-0">Buy your car with SAT and save up to 30% off as compared to buying with local dealers</p>
                                            </div>
                                            <!-- <p class="text-end clr-blue-50 fs-14 fw-700 ff-Lato mb-0 me-3">Login</p> -->
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="cursor-pointer d-none">
                    <div class="dropdown">
                        <a class="btn-border-none bg-white-900 btn-custom clr-black-40 ff-Lato fs-16 fw-500 line-h-24 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="position-relative">
                                <img src="{{asset('assets/images/index/icon/loginprofile-icon.jpg')}}" class="rounded-circle hov-login-img" height="41" width="41" alt="">
                                <img src="{{asset('assets/images/index/icon/arrow-down-icon.svg')}}" width="11" height="11" class="position-absolute bottom-ve13 left-80 translate-middle rounded-pill" alt="">
                            </div>
                        </a>

                        <ul class="dropdown-menu w-251 shadow br-none">
                            <li class="hov-item-dd px-10">
                                <a class="dropdown-item ff-Lato fs-14 fsr-12 clr-black-50 fw-600 line-h-20 px-2 py-10 d-flex justify-content-between" href="#">
                      <span>
                        <svg width="24" height="24" class="dashborad_icons">
                          <use href="#dashboard_svg"></use>
                        </svg>
                        <span class="ms-2"> Dashboard </span>
                      </span>
                                    <span>
                        <i class="fas fa-chevron-right fs-10"></i>
                      </span>
                                </a>
                            </li>
                            <!-- <li class="hov-item-dd px-10">
                              <a
                                class="dropdown-item ff-Lato fs-14 fsr-12 clr-black-50 fw-600 line-h-20 px-2 py-10 d-flex justify-content-between"
                                href="#"
                              >
                                <span>
                                  <svg width="24" height="24" class="dashborad_icons">
                                    <use href="#notification_svg"></use>
                                  </svg>
                                  <span class="ms-2"> Notification </span>
                                </span>
                                <span>
                                  <i class="fas fa-chevron-right fs-10"></i>
                                </span>
                              </a>
                            </li> -->
                            <li class="hov-item-dd px-10">
                                <a class="dropdown-item ff-Lato fs-14 fsr-12 clr-black-50 fw-600 line-h-20 px-2 py-10 d-flex justify-content-between" href="#">
                      <span>
                        <svg width="24" height="24" class="dashborad_icons">
                          <use href="#inquiries_svg"></use>
                        </svg>
                        <span class="ms-2"> My Inquires </span>
                      </span>
                                    <span>
                        <i class="fas fa-chevron-right fs-10"></i>
                      </span>
                                </a>
                            </li>
                            <li class="hov-item-dd px-10">
                                <a class="dropdown-item ff-Lato fs-14 fsr-12 clr-black-50 fw-600 line-h-20 px-2 py-10 d-flex justify-content-between" href="#">
                      <span>
                        <svg width="24" height="24" class="dashborad_icons">
                          <use href="#Orders_svg"></use>
                        </svg>
                        <span class="ms-2"> My Orders </span>
                      </span>
                                    <span>
                        <i class="fas fa-chevron-right fs-10"></i>
                      </span>
                                </a>
                            </li>
                            <li class="hov-item-dd px-10">
                                <a class="dropdown-item ff-Lato fs-14 fsr-12 clr-black-50 fw-600 line-h-20 px-2 py-10 d-flex justify-content-between" href="#">
                      <span>
                        <svg width="20" height="19" class="dashborad_icons">
                          <use href="#heart_svg"></use>
                        </svg>
                        <span class="ms-2"> Favorites </span>
                      </span>
                                    <span>
                        <i class="fas fa-chevron-right fs-10"></i>
                      </span>
                                </a>
                            </li>
                            <li class="hov-item-dd px-10">
                                <a class="dropdown-item ff-Lato fs-14 fsr-12 clr-black-50 fw-600 line-h-20 px-2 py-10 d-flex justify-content-between" href="#">
                      <span>
                        <svg width="20" height="20" class="dashborad_icons">
                          <use href="#Settings_svg"></use>
                        </svg>
                        <span class="ms-2"> Settings </span>
                      </span>
                                    <span>
                        <i class="fas fa-chevron-right fs-10"></i>
                      </span>
                                </a>
                            </li>
                            <li class="hov-item-dd px-10">
                                <a class="dropdown-item ff-Lato fs-14 fsr-12 clr-black-50 fw-600 line-h-20 px-2 py-10 d-flex justify-content-between" href="#">
                      <span>
                        <svg width="19" height="20" class="dashborad_icons">
                          <use href="#Logout_svg"></use>
                        </svg>
                        <span class="ms-2"> Sign Out </span>
                      </span>
                                    <span>
                        <i class="fas fa-chevron-right fs-10"></i>
                      </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- d-none -->
                <div class="clr-black-40  ff-Lato fs-16 fsr-12 fw-500 line-h-24 cursor-pointer" data-bs-toggle="modal" data-bs-target="#LoginModal">
                    <img src="{{asset('assets/images/index/icon/profile-icon.svg')}}" class="res1024_register_img"
                            width="23" height="27" alt="">
                    <span class="ms-1">Register</span>
                </div>
            </div>
        </div>
    </div>
</header>
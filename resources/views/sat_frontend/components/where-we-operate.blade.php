<section class="container-fluid mt-24">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="fs-24 fsr-18 fw-600 line-h-20 clr-black-100"> Popular Used Car Makes </h2>
            </div>
        </div>
        <div class="row mt-33">
            <div class="col-2">
                <div class="card br-24 h-126 w-126 bg-white-600 hov-makes border-0 h-178 w-100 cursor-pointer">
                    <div class="card-body">
                        <a href="" class="text-decoration-none" style="color: unset">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{asset('assets/images/common/countries-flag/au.jpg')}}" class="rounded-circle object_fit_cover used_cars_imgs_1024" width="60" height="60" alt="" />
                                    <h4 class="fw-600 fs-20 fsr-14 mt-3 mb-0">Australia</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card br-24 h-126 w-126 bg-white-600 hov-makes border-0 h-178 w-100 cursor-pointer">
                    <div class="card-body">
                        <a href="" class="text-decoration-none" style="color: unset">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{asset('assets/images/common/countries-flag/bhamas.jpg')}}" class="rounded-circle object_fit_cover used_cars_imgs_1024" width="60" height="60" alt="" />
                                    <h4 class="fw-600 fs-20 fsr-14 mt-3 mb-0">Bahamas</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card br-24 h-126 w-126 bg-white-600 hov-makes border-0 h-178 w-100 cursor-pointer">
                    <div class="card-body">
                        <a href="" class="text-decoration-none" style="color: unset">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{asset('assets/images/common/countries-flag/botswana.jpg')}}" class="rounded-circle object_fit_cover used_cars_imgs_1024" width="60" height="60" alt="" />
                                    <h4 class="fw-600 fs-20 fsr-14 mt-3 mb-0">Botswana</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card br-24 h-126 w-126 bg-white-600 hov-makes border-0 h-178 w-100 cursor-pointer">
                    <div class="card-body">
                        <a href="" class="text-decoration-none" style="color: unset">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{asset('assets/images/common/countries-flag/burundi.jpg')}}" class="rounded-circle object_fit_cover used_cars_imgs_1024" width="60" height="60" alt="" />
                                    <h4 class="fw-600 fs-20 fsr-14 mt-3 mb-0">Burundi</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card br-24 h-126 w-126 bg-white-600 hov-makes border-0 h-178 w-100 cursor-pointer">
                    <div class="card-body">
                        <a href="" class="text-decoration-none" style="color: unset">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{asset('assets/images/common/countries-flag/cambodia.jpg')}}" class="rounded-circle object_fit_cover used_cars_imgs_1024" width="60" height="60" alt="" />
                                    <h4 class="fw-600 fs-20 fsr-14 mt-3 mb-0">Cambodia</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card br-24 h-126 w-126 bg-white-600 hov-makes border-0 h-178 w-100 cursor-pointer">
                    <div class="card-body">
                        <a href="" class="text-decoration-none" style="color: unset">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{asset('assets/images/common/countries-flag/pakistan.jpg')}}" class="rounded-circle object_fit_cover used_cars_imgs_1024" width="60" height="60" alt="" />
                                    <h4 class="fw-600 fs-20 fsr-14 mt-3 mb-0">Pakistan</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid mt-24">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mt-3 para-with">
                    <h2 class="fs-16 fsr-12 ff-Lato fw-600 clr-black-40 active_clr_listing-none cursor-pointer line-h-20" onclick="ShowHideListing()">
                        <span id="show_hide_listing">Show All Countries</span>
                        <span>
                          <svg width="24" height="24" class="plus_icon_clr active_clr_listing-none ms-1 mt-1">
                            <use href="#plus_icon"></use>
                          </svg>
                        </span>
                    </h2>
                </div>
            </div>
        </div>
        <div id="countries_lists" style="display: none">
            <div class="row">
                <div class="col-2 mt-24">
                    <ul class="list-group">
                        <a href="#" class="list-group-item px-8 py-8 br-none border-dark-20 hov_flags_listing">
                            <img src="{{asset('assets/images/common/countries-flag/chile.svg')}}"
                                    class="car_listing_imgs1024" width="57" height="38" alt="chile" />
                            <span class="fs-16 ff-Lato px-8 fsr-12 fw-500 clr-black-40">Chile</span>
                        </a>
                    </ul>
                </div>
                <div class="col-2 mt-24">
                    <ul class="list-group">
                        <a href="#" class="list-group-item px-8 py-8 br-none border-dark-20 hov_flags_listing">
                            <img src="{{asset('assets/images/common/countries-flag/congo.svg')
                            }}" class="car_listing_imgs1024" width="57" height="38" alt="congo" />
                            <span class="fs-16 ff-Lato px-8 fsr-12 fw-500 clr-black-40">Congo</span>
                        </a>
                    </ul>
                </div>
                <div class="col-2 mt-24">
                    <ul class="list-group">
                        <a href="#" class="list-group-item px-8 py-8 br-none border-dark-20 hov_flags_listing">
                            <img src="{{asset('assets/images/common/countries-flag/cote.svg')}}"
                                    class="car_listing_imgs1024"
                                    width="57" height="38" alt="cote" />
                            <span class="fs-16 ff-Lato px-8 fsr-12 fw-500 clr-black-40">Côte</span>
                        </a>
                    </ul>
                </div>
                <div class="col-2 mt-24">
                    <ul class="list-group">
                        <a href="#" class="list-group-item px-8 py-8 br-none border-dark-20 hov_flags_listing">
                            <img src="{{asset('assets/images/common/countries-flag/cyprus.svg')}}"
                                    class="car_listing_imgs1024" width="57" height="38" alt="cyprus" />
                            <span class="fs-16 ff-Lato px-8 fsr-12 fw-500 clr-black-40">Cyprus</span>
                        </a>
                    </ul>
                </div>
                <div class="col-2 mt-24">
                    <ul class="list-group">
                        <a href="#" class="list-group-item px-8 py-8 br-none border-dark-20 hov_flags_listing">
                            <img src="{{asset('assets/images/common/countries-flag/dominican.svg')}}"
                                    class="car_listing_imgs1024" width="57" height="38" alt="dominican" />
                            <span class="fs-16 ff-Lato px-8 fsr-12 fw-500 clr-black-40">Dominican</span>
                        </a>
                    </ul>
                </div>
                <div class="col-2 mt-24">
                    <ul class="list-group">
                        <a href="#" class="list-group-item px-8 py-8 br-none border-dark-20 hov_flags_listing">
                            <img src="{{asset('assets/images/common/countries-flag/fiji.svg')}}"
                                    class="car_listing_imgs1024" width="57" height="38" alt="fiji" />
                            <span class="fs-16 ff-Lato px-8 fsr-12 fw-500 clr-black-40">Fiji</span>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
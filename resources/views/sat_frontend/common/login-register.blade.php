<!-- modals login and register -->
<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
    <div class="modal-dialog w-685 modal-dialog-centered">
        <div class="modal-content br-none">
            <div class="modal-body ps-0 py-0">
                <div class="row">
                    <div class="col-6">
                        <img src="{{asset('assets/images/logo/login-register-svg.jpg')}}" alt="logo" />
                    </div>
                    <div class="col-6 px-0" style="display: none" id="loginform">
                        <div class="col-12 text-end">
                            <button type="button" class="btn-close pa-27" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="ml-36 mr-27">
                            <div class="col-12 text-center">
                                <h4 class="mb-0 fs-24 line-h-20 clr-black-80 fw-600"> Log in </h4>
                                <p class="mb-0 clr-black-30 ff-Lato fs-10 fw-400 line-h-20"> Enter your credential and get ready to explore your dream car </p>
                            </div>
                            <div class="col-12 new-home-page mt-24">
                                <form action="">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="exampleInputEmail1" class="form-label clr-black-80
                                                ff-Lato fs-12 fw-500">Email</label>
                                            <input type="email" class="form-control bg-white-50 h-46 plc-style-modal fs-16 brr-none br-4p" id="exampleInputEmail1" placeholder="example@gmail.com" aria-describedby="emailHelp" />
                                        </div>
                                        <div class="col-12 mt-3">
                                            <div class="input-groups" name="password">
                                                <label class="form-label  clr-black-80 ff-Lato fs-12 fw-500" for="password">Password</label>
                                                <div class="input-icon-container h-35 px-3">
                                                    <input class="" type="password" placeholder="************"
                                                            id="password" name="password"/>
                                                    <img src="{{asset('assets/images/index/icon/eye-close-icon.svg')
                                                    }}" class="cursor-pointer" id="passwordIcon" alt="eye-close-icon" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <ul class="list-group list-group-flush brb-none">
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <div>
                                                        <input class="form-check-input me-1 clr-purple-500 br-none" type="checkbox" value="" id="firstCheckbox" />
                                                        <label class="form-check-label ff-Lato fs-12 fw-400 clr-purple-500" for="firstCheckbox">First checkbox</label>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="ff-Lato fs-12 fw-400 clr-blue-60 text-decoration-none">Forgot Password?</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-12 mt-33">
                                            <button class="btn fs-12 fw-700 ff-Lato clr-white-900 w-100 br-4p h-39 bg-blue-50" target="hovbtn"> Log in</button>
                                        </div>
                                        <div class="col-12">
                                            <h4 class="fs-12 fw-600 text-center clr-black-20s my-2"> Or </h4>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn fs-12 fw-700 ff-Lato clr-blue-50 w-100 br-4p border-blue-50 h-39 bg-white-900" target="hovbtn">
                                            <img src="{{asset('assets/images/index/icon/google-svg.svg')}}" alt="google" />
                                            <span class="ms-2"> Log in with Google </span>
                                        </button>
                                    </div>
                                    <div class="col-12 text-center mt-3">
                    <span class="fs-12 fw-500 ff-Lato clr-black-80">Don’t have an account ? <a class="cursor-pointer clr-blue-50 ms-1 text-decoration-none" id="showRegisterForm" onclick="showRegisterForm()">Sign Up Now</a>
                    </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 px-0" id="registerform" style="display: block">
                        <div class="col-12 text-end pb-0 pt-3">
                            <button type="button" class="btn-close px-3 pb-0" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="ml-36 mr-27">
                            <div class="col-12 text-center">
                                <h4 class="mb-0 fs-24 line-h-20 clr-black-80 fw-600"> Sign Up </h4>
                                <p class="mb-0 clr-black-30 ff-Lato fs-10 fw-400 line-h-20"> Enter your credential and get ready to explore your dream car </p>
                            </div>
                            <div class="col-12 new-home-page">
                                <form action="">
                                    <div class="row">
                                        <div class="col-12 mt-2">
                                            <label for="Nametext" class="form-label mb-1  clr-black-80 ff-Lato fs-12 fw-500">Name</label>
                                            <input type="text" class="form-control bg-white-50 h-46 plc-style-modal fs-16 brr-none br-4p" id="Nametext" placeholder="Name..." aria-describedby="emailHelp" />
                                        </div>
                                        <div class="col-12 mt-2">
                                            <label class="form-label mb-1  clr-black-80 ff-Lato fs-12 fw-500">Email</label>
                                            <input type="email" class="form-control bg-white-50 h-46 plc-style-modal fs-16 brr-none br-4p" placeholder="example@gmail.com" aria-describedby="emailHelp" />
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="input-groups" name="password">
                                                <label class="form-label mb-1  clr-black-80 ff-Lato fs-12 fw-500" for="password">Password</label>
                                                <div class="input-icon-container h-35 px-3">
                                                    <input class="" type="password" placeholder="************"
                                                            id="new-password" name="new-password"/>
                                                    <img src="{{asset('assets/images/index/icon/eye-close-icon.svg')
                                                    }}" class="cursor-pointer" id="password" alt="eye-close-icon" />
                                                    <!-- <i class="fa fa-eye-slash cursor-pointer" id="passwordIcon1"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="input-groups" name="password">
                                                <label class="form-label mb-1  clr-black-80 ff-Lato fs-12 fw-500" for="password">Confirm Password</label>
                                                <div class="input-icon-container h-35 px-3">
                                                    <input class="" type="password" placeholder="************"
                                                            id="confirm-password" name="confirm-password"/>
                                                    <img src="{{asset('assets/images/index/icon/eye-close-icon.svg')
                                                    }}" class="cursor-pointer" id="passwordIcon2" alt="eye-close-icon" />
                                                    <!-- <i class="fa fa-eye-slash cursor-pointer" id="passwordIcon2"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="form-check">
                                                <input class="form-check-input br-none" type="checkbox" value="" id="flexCheckDefault" />
                                                <label class="form-check-label fs-12 fw-400 ff-Lato clr-purple-500" for="flexCheckDefault"> By creating an account, you agree to SAT Terms & Conditions and Privacy Policy </label>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <button class="btn fs-12 fw-700 ff-Lato clr-white-900 w-100 br-4p h-39 bg-blue-50" target="hovbtn"> Sign Up</button>
                                        </div>
                                        <div class="col-12 text-center">
                      <span class="fs-12 fw-500 ff-Lato clr-black-80">Already have an account? <a class="cursor-pointer clr-blue-50 ms-1 text-decoration-none" id="showloginform" onclick="showLoginForm()"> Login </a>
                      </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
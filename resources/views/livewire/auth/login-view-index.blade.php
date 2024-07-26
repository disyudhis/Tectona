@section('page-title', $page_title)
<!--begin::Login-->
<div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
    <!--begin::Aside-->
    <div
        class="login-aside order-2 order-lg-1 d-flex flex-column-fluid flex-lg-row-auto bgi-size-cover bgi-no-repeat p-7 p-lg-10">
        <!--begin: Aside Container-->
        <div class="d-flex flex-row-fluid flex-column justify-content-between">
            <!--begin::Aside body-->
            <div class="d-flex flex-column-fluid flex-column flex-center mt-5 mt-lg-0">
                <a href="#" class="mb-15 text-center">
                    <img src="{{ asset('assets/media/logos/tectona-login.png') }}" class="min-h-75px" alt="" />
                </a>
                <!--begin::Signin-->
                <div class="login-form login-signin">
                    <div class="text-center mb-10 mb-lg-20">
                        <h2 class="font-weight-bold">Sign In</h2>
                        <p class="text-muted font-weight-bold">Enter your username and password</p>
                    </div>
                    <!--begin::Form-->
                    <form method="POST" action="{{ route('login') }}" class="form">
                        @csrf
                        <div class="form-group py-3 m-0">
                            <input
                                class="form-control @error('email') is-invalid
                            @enderror h-auto border-0 px-0 placeholder-dark-75"
                                type="email" placeholder="Email" name="email" autocomplete="off" />
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group py-3 border-top m-0">
                            <input
                                class="form-control @error('password') is-invalid

                            @enderror h-auto border-0 px-0 placeholder-dark-75"
                                type="password" placeholder="Password" name="password" />
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-2">
                            <div class="my-3 mr-2">
                            </div>
                            <button type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3">Sign
                                In</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Signin-->
            </div>
            <!--end::Aside body-->
            <!--begin: Aside footer for desktop-->
            <div class="d-flex flex-column-auto justify-content-between mt-15">
                <div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">© 2021 Metronic</div>
            </div>
            <!--end: Aside footer for desktop-->
        </div>
        <!--end: Aside Container-->
    </div>
    <!--begin::Aside-->
    <!--begin::Content-->
    <div class="order-1 order-lg-2 flex-column-auto flex-lg-row-fluid d-flex flex-column p-7"
        style="background-image: url(assets/media/bg/bg-2.jpg);">
        <!--begin::Content body-->
        <div class="d-flex flex-column-fluid flex-lg-center">
            <div class="d-flex flex-column justify-content-center">
            </div>
        </div>
        <!--end::Content body-->
    </div>
    <!--end::Content-->
</div>
<!--end::Login-->

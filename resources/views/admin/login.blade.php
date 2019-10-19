<!doctype html>
<html lang="en" dir="ltr">
    <!--Head : meta, css -->
    @include('admin.layouts.head')
    <!--End Head-->
    <body>
        <!-- page -->
        <div class="page">
            <!-- page-content -->
            <div class="page-content">
                <div class="container text-center text-dark">
                    <div class="row">
                        <div class="col-lg-4 d-block mx-auto">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center mb-6">
                                                <img src="../assets/images/brand/logo1.png" class="" alt="">
                                            </div>
                                            <h3>Login</h3>
                                            <p class="text-muted">Sign In to your account</p>
                                        <form method="POSt" action="{{ route('login') }}">
                                                @csrf
                                                @method('POST')
                                            <div class="input-group mb-3">
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="input-group mb-4">
                                                <span class="input-group-addon "><i class="fa fa-unlock-alt"></i></span>
                                                <input type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Password" name="password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                                </div>
                                                <div class="col-12">
                                                    <a href="" class="btn btn-link box-shadow-0 px-0">Forgot password?</a>
                                                </div>
                                            </div>
                                            <div class="mt-6 btn-list">
                                                <button type="button" class="btn btn-icon btn-facebook"><i class="fa fa-facebook"></i></button>
                                                <button type="button" class="btn btn-icon btn-google"><i class="fa fa-google"></i></button>
                                                <button type="button" class="btn btn-icon btn-twitter"><i class="fa fa-twitter"></i></button>
                                                <button type="button" class="btn btn-icon btn-dribbble"><i class="fa fa-dribbble"></i></button>
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
            <!-- page-content end -->
        </div>
        <!-- page End-->

        <!-- Jquery js-->
        @include('admin.layouts.script')

    </body>
</html>

<!doctype html>
<html lang="en">
    <head>
    	<title>Administrasi Tugas Akhir - Register</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('auth/css/style.css')}}">
    </head>

	<body>
        <section class="ftco-section">
            <div class="container">

                <!--TITLE  -->
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <h2 class="heading-section">Selamat datang!</h2>
                        <p>Aplikasi ini dikembangkan untuk memanajemen proses Administrasi Tugas Akhir mahasiswa/i program studi Teknologi Infomrasi Universitas Sumatera Utara. </p>
                    </div>
                </div>
                <!-- END TITLE SECTION -->

                <!-- LOGIN  SECTION-->
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6">
                        <div class="wrap">
                            <div class="img" style="background-image: url(auth/images/graduation.jpg);"></div>
                            <div class="login-wrap p-4 p-md-5">
                                <div class="d-flex">
                                    <div class="w-100">
                                        <center><h3>Daftar untuk melanjutkan</h3></center>
                                    </div>
                                </div>

                                <!-- REGISTER FORM -->
                                <form method="POST" action="{{ route('register') }}" class="signin-form">
                                @csrf
                                    <div class="form-group mt-3">
                                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                        <label class="form-control-placeholder" for="username">Username</label>
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group ">
                                        <label class="col-form-label text-md-end" for="email">Email Address</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label text-md-end" for="status">Status</label>
                                        <select name="status" id="status" required class="form-control">
                                            <option value=""></option>
                                            <option value="mahasiswa">Mahasiswa</option>
                                            <option value="dosen">Dosen</option>
                                            <option value="admin">Admin</option>
                                            <option value="kaprodi">Kaprodi</option>
                                        </select>
                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label text-md-end" for="password">Password</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="password-confirm" class="col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                    
                                    <div class="form-group">
                                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">Daftar</button>
                                    </div>

                                    <div class="form-group d-md-flex">
                                        <div class="w-50 text-left">
                                            <label for="remember" class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="w-50 text-md-right">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                                <!-- END OF FORM REGISTER -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- END LOGIN SECTION -->
            </div>
        </section>

        <!-- ANY NECESSARY SCRIPT -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/popper.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>

	</body>
</html>


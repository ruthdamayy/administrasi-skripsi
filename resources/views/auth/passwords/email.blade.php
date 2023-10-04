<!doctype html>
<html lang="en">
    <head>
    	<title>Administrasi Tugas Akhir</title>
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
                        <h2 class="heading-section">Reset Password</h2>
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
                                        <center><h3>Login untuk melanjutkan</h3></center>
                                    </div>
                                </div>

                                <!-- LOGIN FORM -->
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf 
                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Send Password Reset Link') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- END OF FORM LOGIN -->

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
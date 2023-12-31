<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{asset('a/https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('a/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('a/css/owl.carousel.min.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('a/css/bootstrap.min.css')}}">
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('a/css/style.css')}}">
    <style>


        
        .contents {
        background-color: #ffffff;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
      }

      .form-block {
        max-width: 800px;
        margin: 0 auto;
        margin-top: 50px;
        
      }

      .mb-0 {
        margin-bottom: 0;
      }

      .btn-primary {
        width: 100%;
      }

      .btn-link {
        display: block;
        text-align: center;
        margin-top: 10px;
      }
    </style>
    <title>Registration</title>
</head>
<body>
    <div class="d-md-flex half">
        <div class="bg" style="background-image: url('a/images/bg_1.jpg');"></div>
        <div class="contents">
            <div class="container">
                <div class="form-block mt-5 center-text"> <!-- Tambahkan class center-text di sini -->
                    <div class="text-center mb-4">
                        <h3>Create an Account</h3>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                <div class="form-group">
                    <label for="name">{{ __('Name') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-0">
                    <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Register') }}
                    </button>
                    <div class="text-center mt-3">
                        <a href="{{ route('login') }}" class="btn btn-link">Back to Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>

<script src="{{asset('a/vendor/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('a/vendor/js/popper.min.js')}}"></script>
<script src="{{asset('a/vendor/js/bootstrap.min.js')}}"></script>
<script src="{{asset('a/vendor/js/main.js')}}"></script>
</body>
</html>
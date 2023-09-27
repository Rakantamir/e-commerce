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
    <title>Login #4</title>
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
        margin-top: 150px;
        
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
  </head>
  <body>
    <div class="d-md-flex half">
      <div class="bg" style="background-image: url('a/images/bg_1.jpg');"></div>
      <div class="contents">
        <div class="container">
          <div class="form-block mx-auto">
            <div class="text-center mb-4">
              <h3>Login to <strong>Robuust</strong></h3>
            </div>
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <div class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <div class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-primary">Login</button>
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('register') }}">Register</a>
                @endif
              </div>
            </form>
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

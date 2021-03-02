<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/app.css">
    <title>App</title>
</head>
<body>
    <!--=============navbar=======-->
    <div id="navbar">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light light pt-3">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Applogin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
              </ul>
              <ul class="navbar-nav">
                <li class="nav-item mx-1">
                    <a href="{{route('register')}}" class="btn btn-primary">Sign Up</a>
                </li>
                </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!--===================navbarend=========-->
    <!--===================login_form_section======-->
    <section id="login">
      <div class="container">
        <div class="d-flex flex-column py-4 justify-content-center align-items-center">
          <form class="formlogin mt-5"  method="POST" action="{{route('login')}}">
          @csrf
            <h1 class="text-center">Welcome</h1>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" placeholder="Enter email" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Enter password" required>
            </div>
            <button type="submit" class="btn btn-block btn-primary">Sign In</button>
            <div class="block">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="flex items-center justify-end">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
            <p class="mt-2">Don't have an account? <a href="{{route('register')}}">Register</a></p>
          </form>
        </div>
      </div>
    </section>
    <!--=====================Endlogin_form_section=========-->
    
   
    
</body>
</html>
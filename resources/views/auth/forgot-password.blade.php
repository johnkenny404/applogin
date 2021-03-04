<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/app.css">
    <title>Forget-password</title>
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
                  <a class="nav-link active" aria-current="page" href="/">Home</a>
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
    <!--==================forget form=======-->
    <section id="login">
    <div class="container">
        <div class="d-flex flex-column py-4 justify-content-center align-items-center">
         <!-- Session Status -->
         <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form class="formlogin mt-5" method="POST" action="{{ route('password.email') }}">
        <p>Forgot your password? No problem. Just let us know your email address
         and we will email you a password reset link that will allow you to choose a new one.</p>
        @csrf
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" placeholder="Enter email" required>
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="btn btn-block btn-primary">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
        </div>
    </div>
    </section>
    
</body>
</html>










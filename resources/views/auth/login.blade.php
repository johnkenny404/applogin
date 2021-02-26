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
              <form class="d-flex">
                <button class="btn btn-info mr-2" type="submit">Login</button>
                <button class="btn btn-primary" type="submit">Sign-up</button>
              </form>
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
          <form class="formlogin mt-5">
            <h1 class="text-center">Welcome</h1>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" placeholder="Enter email" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" placeholder="Enter password" required>
            </div>
            <button type="submit" class="btn btn-block btn-primary">Login</button>
            <p class="mt-2 text-center">Don't have an account? <a href="register.html">Register</a></p>
          </form>
        </div>
      </div>
    </section>
    <!--=====================Endlogin_form_section=========-->
    
   
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/app.css">
    <title>Profile form</title>
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
      <!--==========profile_section=============-->
      <div id="profile">
          <div class="container">
            <div class="d-flex flex-column py-4 ">
                <h1>Personal profile</h1>
                <div class="">
                    <img src="./image/2593366.jpg" class="rounded" alt="...">
                </div>  
                <div class="row">
                    <div class="col-md-5">
                        <ul class="mt-5 profiling">
                            <li>NAME</li>
                            <li>AGE</li>
                            <li>LOCATION</li>
                            <li>EXPERIENCE</li>
                            <li>DEGREE</li>
                            <li>John Joe</li>
                            <li>35</li>
                            <li>Lagos, Nigeria</li>
                            <li>2years</li>
                            <li>Bsc Computer Science</li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
      </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/app.css">
    <title>Personal Info</title>
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
                <form class="d-flex" method="POST" action="{{route('logout')}}">
                @csrf
                  <button class="btn btn-info" type="submit">SIGNOUt</button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
      <!--===================navbarend=========-->
      <!--========personal-info_form============-->
      <div id="personalinfo">
          <div class="container">
            <div class="d-flex flex-column py-4 justify-content-center align-items-center">
                <form action="{{route('create.profile')}}" method="post" class="formlogin" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                    <h1 class="heading">Bio-Data</h1>
                    <div class="form-group">
                        <labeb>Upload Images</label>
                        <input type="file" name="image" class="mt-2 font-weight-bold" multiple>
                    </div>
                    <div class="form-group">
                        <label for="fullName">full Name</label>
                        <input type="text" name="fullname" placeholder="Enter Full Name" class="form-control">
                        @error('fullname')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="number" name="age" value="number" class="form-control">
                        @error('age')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Location">Location</label>
                        <input type="location" name="location" class="form-control" placeholder="Location">
                        @error('location')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Experience">Experience</label>
                        <input type="number" name="experience" class="form-control" placeholder="Experience">
                        @error('experience')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Experience">Degree</label>
                        <input type="Text" name="degree" class="form-control" placeholder="Degree">
                        @error('degree')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-block btn-primary">Submit</button>
                    
                </form>
            </div>
          </div>
      </div>
    
</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="templatelogin/fonts/icomoon/style.css">

    <link rel="stylesheet" href="templatelogin/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="templatelogin/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="templatelogin/css/style.css">

    <title>Login || SEKARSARI</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="templatelogin/images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In to <strong>SekarSari</strong></h3>
              <br>
              <p class="mb-4">Sign In untuk masuk ke Apotek Sekar Sari Online</p>
            </div>
            <form action="" method="post">
              @csrf
              <div class="form-group first">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password">
              </div>
              <br>
              <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">
            </form>
            <br>
            <p class="mb-4">Belum memiliki akun ? <a href="{{url('/daftar')}}">daftar disini</a></p>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="templatelogin/js/jquery-3.3.1.min.js"></script>
    <script src="templatelogin/js/popper.min.js"></script>
    <script src="templatelogin/js/bootstrap.min.js"></script>
    <script src="templatelogin/js/main.js"></script>
  </body>
</html>
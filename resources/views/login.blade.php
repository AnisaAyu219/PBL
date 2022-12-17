<!DOCTYPE html>
<html lang="en">
<head>
<?php session_start();
  if(isset($_SESSION["login"])){
    header("Location:profile.blade.php");
    exit;
  }
  ?>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jurnal PKL</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!---CSS Buatan sendiri-->
  <link rel="stylesheet" href="style.css">

  <script src="animasi.js"> </script>
</head>
<body class="hold-transition login-page gradasi">
  <div class="e1_27"><span  class="e1_28">Jurnal PKL SMKN 1 Banyuwangi</span></div>
  
<div class="login-box">
  
  <!-- /.login-logo -->
  <div class="card mb-3">
    <div class="card-body login-card-body">
      <h4 class="login-box-msg mt-3">LOGIN</h4>
      <div class="underline-title"></div>

      <form action="proses\login_proses.php" method="post">

        <div class="mt-3 ml-4 mr-4">
        <p>Username</p>
          <input type="username" class="kolom" name="username">
        </div>
        <div class="mt-3 ml-4 mr-4">
        <p>Password</p>
          <input type="password" class="kolom" name="password">
        </div>

        
        <div class="row">
          <div class="col">
          <p>
            <a href="forgot-password.html"><legend id="forgot-pass">Forgot password?</legend></a>
          </p>
          </div>
        </div>
      

          <div class="row">
          <div class="col mt-5 ">
            <button type="submit" class="btn btn-success btn-block">Login</button>
          </div>
        </div>
          
        
      
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
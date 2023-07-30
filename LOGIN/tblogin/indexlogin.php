<?php
 session_start();
 include "../../CRUD/konek.php";   
 
  
 if(isset($_SESSION['login']))
 {
  header("location:../../Admin/examples/index.php");
 } 


 // if(isset($_SESSION['username']))
 //  {
 //    if($_SESSION['level']=="Admin")
 //    {
 //    header('Location:../../Admin/examples/index.php');
 //    }
 //    else if($_SESSION['level']=="User")
 //    {
 //    header('Location:');
 //    }
 //  }

  

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LOGIN</title>
   <style>
      .imglogin
      {
        background-image: url('../../image/login.jpg');
        height: 100vh;
        width:100%;
        background-size: cover;
      }

    </style>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../bootstrap/css/now-ui-dashboard.min.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.css">
    <link rel="stylesheet" href="../../style.css">
  <link rel="stylesheet" href="">
</head>
<body>

  <?php 
    if(isset($_GET['pesan']))
    {
      if($_GET['pesan'] == "gagal")
      {
        ?> 
        <script> 
            alert('Login gagal! username/password yang anda masukkan salah!'); 
        </script> 
        <?php 
        // echo "Login gagal! username/password yang anda masukkan salah!";
      }
      else if($_GET['pesan'] == "logout")
      {
         ?> 
        <script> 
            alert('Anda telah berhasil logout'); 
        </script> 
        <?php 
        // echo "Anda telah berhasil logout";
      }
      else if($_GET['pesan'] == "belum_login")
      {
         ?> 
        <script> 
            alert('Anda harus login untuk mengakses halaman admin'); 
        </script> 
        <?php 
        // echo "Anda harus login untuk mengakses halaman admin";
      }
    }
  ?>



<div class="container-full-bg">
    <div class="row imglogin">
      <div class="col-2"></div>
      <div class="col-sm-4"style="margin-top: 100px">
        <h4 class="text-dark text-center">LOGIN</h4>
        <form action="<?php echo htmlspecialchars('ceklogin.php') ?>" method="post">
          <div class="form-group-row col-sm-12">
            <input type="text" class="form form-control" name="username" placeholder="Username" required>
          </div>
          <div class="form-group-row col-sm-12 mt-3"> 
             <input type="password" class="form form-control" name="password" placeholder="Password" required>
          </div>
          
          <div class="form-group-row col-sm-12 mt-3">
            <button type="submit" name="submit" class="btn btn-danger btn-block btn-round ">Login</button>
          </div>
        </form>
         <div class="text-center">
          <a href="<?php echo htmlspecialchars('register.php') ?>">Belum Punya Akun ?</a>
        </div>
      </div>
      </div>
      <div class="col-6"></div>
    </div>
  </div>




  <script src="../../bootstrap/js/jquery-3.3.1.slim.min.js"></script>
  <script src="../../bootstrap/js/popper.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <script src="../../bootstrap/js/jquery.dataTables.min.js"></script>
  <script src="../../bootstrap/js/dataTables.bootstrap4.min.js"></script>

    <script src="../../lib/jquery/jquery.min.js"></script>
    <script src="../../lib/jquery/jquery-migrate.min.js"></script>
    <script src="../../lib/popper/popper.min.js"></script>
    <script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../lib/easing/easing.min.js"></script>
    <script src="../../lib/counterup/jquery.waypoints.min.js"></script>
    <script src="../../lib/counterup/jquery.counterup.js"></script>
    <script src="../../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../lib/lightbox/js/lightbox.min.js"></script>
    <script src="../../lib/typed/typed.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="../../contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="../../js/main.js"></script>

 
  
</body>
</html>
<?php
  include "../../CRUD/konek.php";  

  $Id = "";
  $nama  = ""; 
  $email = ""; 
  $komentar = "";  
  
    function validasikiriman($n) 
  { 
      $n = trim($n); 
      $n = stripcslashes($n); 
      $n = htmlspecialchars($n); 
 
      return $n; 
  } 
 if ($_SERVER ["REQUEST_METHOD"] == "POST")
 {
  if(isset($_POST['nide'])) 
  { 
      $Id = validasikiriman($_POST['nide']);  //digunakan utk where
  } 
  if(isset($_POST['nama'])) 
  { 
      $nama = validasikiriman($_POST['nama']);  //disimpan ke dalam kolom nama 
  } 
   if(isset($_POST['alamat'])) 
  { 
      $email = validasikiriman($_POST['alamat']);  //disimpan ke dalam kolom alamat
  } 
   if(isset($_POST['notelp'])) 
  { 
      $komentar = validasikiriman($_POST['notelp']);  //disimpan ke dalam kolom no telp 
  } 
 
  //simpan data 
  if($nama !="" && $email !="" && $komentar !="") 
  { 
      $sql = "INSERT INTO tbguestbook (nama, email, komentar)  
              VALUES ('$nama', '$email', '$komentar')"; 
 
      $hsl = $conn->query($sql); 
      if($hsl) 
      { 
          //kembali ke halaman depan 
          header('Location:../../Admin/examples/index.php'); 
      } 
  } 
  else 
  { 
 
?> 
        <script> 
            alert('Data Tidak Disimpan. Karena Tidak Lengkap'); 
        </script> 
<?php 
  } 
 }
?> 
 
  

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tambah Data</title>
   <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.css">
  <link rel="stylesheet" href="">
</head>
<body>

  <center class="display-3 text dark">DATA GUESTBOOK</center>

 
        
      <div class="container-fluid">
       <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
        <div class="card">
        <div class="card-header badge-danger text-white text-center">
        Tambah Data Guestbook
        </div>
        <form action="<?php echo htmlspecialchars('add.php')?>" method="POST" class=" bg-success">
                <div class="form-group row ">
                <label for="nm" class="col-sm-2 mt-2 ml-5 ">Nama</label>
                 <div class="col-sm-9 mt-2">
                  <input class="form-control" id="nm" type="text" name="nama" value="" placeholder="">
                 </div>                
                </div>
                <div class="form-group row">
                <label for="alm" class="col-sm-2 ml-5">Email</label>
                 <div class="col-sm-9">
                  <input  class="form-control" id="alm" type="text" name="alamat" value="" placeholder="">
                 </div>
                </div>
                <div class="form-group row">
                <label for="nohp" class="col-sm-2 ml-5">Komentar</label>
                 <div class="col-sm-9">
                  <input class="form-control" id="nohp" type="text" name="notelp" value="">
                 </div>                
                </div>
               
               <div  class="text-center mt-3 mb-3">
                <button class="bg-danger" type="Submit">
                <i class="fas fa-save"></i>&nbsp; Simpan 
              </button>
              <button class="bg-danger" type="reset">&nbsp; Batal &nbsp;</button>
                </div>
              </form>
      
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
      </div>
      <div class="col-3"></div>
    </div>
  </div>
</div>
      
  
  <script src="../../bootstrap/js/jquery-3.3.1.slim.min.js"></script>
  <script src="../../bootstrap/js/popper.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <script src="../../bootstrap/js/jquery.dataTables.min.js"></script>
  <script src="../../bootstrap/js/dataTables.bootstrap4.min.js"></script>

 
  
</body>
</html>
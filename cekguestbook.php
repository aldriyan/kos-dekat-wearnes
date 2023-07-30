<?php

	include "CRUD/konek.php";

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
          // header('Location:landingpage2.php'); 
?> 
        <script> 
            alert('Data Anda Telah Terkirim'); 
        </script> 
<?php 
          header('Location:landingpage2.php'); 
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
  <title>infokoswearnes</title>
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
  <link rel="stylesheet" href="">
</head>
<body>

  <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
  <script src="bootstrap/js/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="bootstrap/js/jquery.dataTables.min.js"></script>
  <script src="bootstrap/js/dataTables.bootstrap4.min.js"></script>

  </body>
</html>
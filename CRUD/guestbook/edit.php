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
}
 
  //simpan data 


if($nama !="" && $email !="" && $komentar !="") 
{ 
  $sql = "UPDATE tbguestbook SET nama='$nama', email='$email',komentar='$komentar' WHERE Id=$Id";

  $hsl = $conn->query($sql);
  if($hsl)
  {
    header('Location:../../Admin/examples/index.php?hal=guestbook');
  }
  else
  {
    echo "edit gagal";
  }
}
?> 
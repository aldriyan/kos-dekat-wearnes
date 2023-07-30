<?php
  include "../../CRUD/konek.php";  

  $Id = "";
  $nmgambar  = ""; 
  $keterangan = ""; 
  $nmkrir = "";
  $info = "";
  $status = ""; 
  
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
      $nmgambar = validasikiriman($_POST['nama']);  //disimpan ke dalam kolom nama 
  } 
   if(isset($_POST['alamat'])) 
  { 
      $nmkarir = validasikiriman($_POST['alamat']);  //disimpan ke dalam kolom alamat
  } 
   if(isset($_POST['notelp'])) 
  { 
      $keterangan = validasikiriman($_POST['notelp']);  //disimpan ke dalam kolom no telp 
  } 
}
 
  //simpan data 


if($nmgambar !="" && $nmkarir !="" && $keterangan !="") 
{ 
  $sql = "UPDATE tbguestbook SET nmgambar='$nmgambar', nmkarir='$nmkarir',keterangan='$keterangan' WHERE Id=$Id";

  $hsl = $conn->query($sql);
  if($hsl)
  {
    header('Location:../../Admin/examples/index.php?hal=jobkarir');
  }
  else
  {
    echo "edit gagal";
  }
}
?> 
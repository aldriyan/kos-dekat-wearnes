<?php 
 include "../../CRUD/konek.php"; 
 
 if($_SERVER["REQUEST_METHOD"] == "POST") 
   { 
  $nIdp = $_POST['nIdp']; 
 
  $sql = "DELETE tbguestbook.* FROM tbguestbook WHERE Id=$nIdp"; 
 
     $hsl = $conn->query($sql); 
     if($hsl) 
     { 
         //kembali ke halaman depan 
         header('Location:../../Admin/examples/index.php?hal=guestbook'); 
     } 
 } 
?> 
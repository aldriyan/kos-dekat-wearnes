<?php 
// mengaktifkan session php
// session_start();


// menghubungkan dengan koneksi
include "../../CRUD/konek.php";  

if($_SERVER["REQUEST_METHOD"]== "POST")
{
// menangkap data yang dikirim dari form
	$username = $_POST['username'];
	$password = $_POST['password'];

	$npass = md5($password);

	// menyeleksi data admin dengan username dan password yang sesuai
	$data = mysqli_query($conn,"SELECT * FROM tbuser WHERE  username = '$username' AND password = '$npass' AND status='A'");

	$da = mysqli_fetch_array($data);
	// menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($data);

	if($cek > 0){
		 if($da['level']=="Admin")
        {
            session_start();
          $_SESSION['login'] = true;
          $_SESSION['username']= $username;
          $_SESSION['level']= $da['level'];
          $_SESSION['Id']= $da['Id'];
          header('Location:../../Admin/examples/index.php');
        }
         else if($da['level']=="User")
        {
            // session_start();
          $_SESSION['username']= $username;
          $_SESSION['level']= $data['level'];
          $_SESSION['Id']= $data['Id'];
          header('Location:../../Admin/examples/user.php');
      	}
      	 else
        {
          header('Location:indexlogin.php'); 
        }
		// $_SESSION['username'] = $username;
		// $_SESSION['login'] = true;
		// header("location:../../Admin/examples/index.php");
	}else{
		
		header("location:indexlogin.php?pesan=gagal");

	}
}


?>
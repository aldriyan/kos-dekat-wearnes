<?php
// if(!isset($_SESSION))
// {
// 	session_start();
// }


if(isset($_POST['btnupload']))
{
	$nmfoto = $_FILES['foto']['name'];
	$size = $_FILES['foto']['size'];
	$alamatasli = $_FILES['foto']['tmp_name'];
	$alamattujuan ='../image/jumbotron/'.$nmfoto ;
	
	$up = move_uploaded_file($alamatasli, $alamattujuan);
	if($up)
	{
		include "../CRUD/konek.php";
		$sql1 = "UPDATE tbjumbotron set status='P'";
		$q1 = $conn->query($sql1);
		if($q1)
		{
			$sql2 = "INSERT INTO tbjumbotron (nmgambar,status)
				     VALUES ('$nmfoto','A')";
			$q2 = $conn->query($sql2);
			$_SESSION['hsl'] = "berhasil";
			header('location:../Admin/examples/index.php?hal=jumbotron');
		}
	}
	else
	{
		$_SESSION['hsl'] = "gagal";
	}
}


?>




<div class="col">
	<h3 class="text-primary"><b>Upload Foto Jumbotron</b></h3>

<form action="<?php echo htmlspecialchars('../../Jumbotron/uploadjumbotron.php')?>" method="post" enctype="multipart/form-data">
		<label for="upload">
			<h4 class="text-danger">Pilih foto yang ingin di upload</h4>
		</label>
		<input type="file" id="upload" name="foto">
		<button type="submit" name="btnupload" class="btn-danger">
		Upload
		</button>
</form>

	<?php

		// $hasil = $_GET['hsl'];
		if(isset($_SESSION['hsl']))
		{
			if($_GET['hsl'] == 'gagal')
			{
			?>			
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>Failed!</strong>Foto jumbotron gagal diupdate.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>

	        <?php
			}
			else if($_GET['hsl'] == 'berhasil')
			{
			?>

				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>Selamat!</strong>Foto jumbotron berhasil diupdate.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>

			<?php
			}
		}

	?>

</div>
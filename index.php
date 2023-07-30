<?php
  include "CRUD/konek.php";
  $sql = "
  SELECT
  `tbguestbook`.`Id`,
  `tbguestbook`.`nama`,
  `tbguestbook`.`email`,
  `tbguestbook`.`komentar`
  FROM
  `tbguestbook`";

  $sql2 = "SELECT * FROM tbjumbotron WHERE status='A'";
  $jb = $conn->query($sql2);
  $gbrjumbotron = "";
  while ($data = $jb->fetch_array())
  {
     $gbrjumbotron= $data["nmgambar"];
  }
  
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <!-- <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
 -->
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    
    <title>InfoKosWearnes</title>
    <style>
      .backjumbo
      {
        background-image: url('image/jumbotron/<?php echo  $gbrjumbotron ?>');
        height: 100vh;
        width:100%;
        background-size: cover;
      }

    </style>

  </head>
  <body data-spy="scroll" data-target="#nav"> 

  <?php 
   session_start();
  ?>
    
  <nav id="nav" class="navbar navbar-expand-lg navbar-dark badge-dark fixed-top">
    <img src="image/logo-kos-kosan.jpg" alt="infokoswearnes" style=" border-radius: 100px; height: 40px; width: 40px">
    &nbsp;
    <a class="navbar-brand" href="#">Info Kos Wearnes</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size: 15px;">
      <ul class="navbar-nav mr-auto" style="font-weight: bold;">
        <li>
          <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#job">Job (Karier)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#ttg">Tentang Kami</a>
        </li>
         <li class="nav-item">
          <a class="nav-link " href="#pro">Promosikan Kos Anda&nbsp;<span class="badge badge-warning">Gratis</span></a>
        </li>
         <li class="nav-item">
          <!-- <a class="nav-link " href="#gb">Guest Book</a> -->
          <button class="btn btn-link" data-toggle="modal" data-backdrop="static" data-target="#gb" style="color: white; text-decoration: none;">
          Guestbook
          </button>

        </li>
         <li class="nav-item">
          <a class="nav-link " href="#kp">Kebijakan Privasi</a>
        </li>
      </ul>
       
      <ul class="navbar-nav ml-auto" style="font-weight: bold;">
        <li class="nav-item">
          <a href="LOGIN/tblogin/indexlogin.php" target="blank" class="btn btn-warning" name="lgn">
            <i class="fas fa-sign-in-alt"></i>
          login</a>
        </li>
      </ul>
    </div>
</nav>

<div id="home" class="container-full-bg ">
 <div class="jumbotron jumbotron-fluid backjumbo">
  <div class="container-fluid text-white text-center" style="margin-top: 160px;">
    <h1 class="display-5; font-weight-bold;">MAU CARI KOS MURAH???</h1>
    <p class="lead text-danger font-weight-bold" style="font-family: calibri; font-size: 30px; ">Dapatkan Info Kos  Murah, Kos Harian, Dan Info Kos Sekitar Wearnes Disini</p>
    <a href="carikos.html" target="blank" class="btn btn-primary mt-5">
      <i class="fas fa-search-location"></i>
    find kos</a>
  </div>
 </div>
</div>


<section id="job" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="">
              Job Karir
            </h3>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="work-box">
            <a href="image/gambar2.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="image/gambar2.jpg" alt="" class="img-fluid"style="height: 300px">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Administrasi</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="image/gambar3.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="image/gambar3.jpg" alt="" class="img-fluid"style="height: 300px">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Security</h2>
                    <div class="w-more">                     
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="image/gambar4.jpg" data-lightbox="gallery-mf" >
              <div class="work-img">
                <img src="image/gambar4.jpg" alt="" class="img-fluid" style="height: 300px">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Cleaning Service</h2>
                    <div class="w-more">                      
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
       
        
      </div>
    </div>
  </section>
 
<div class="container-fluid mt-5">
  <div class="row">
    <div class="col">
     <div id="ttg" class="card">
      <div class="card-header badge-danger text-white text-center">
      Tentang Kami
      </div>

      <center>
       <img src="image/logo-kos-kosan.jpg" alt="infokoswearnes"style="height: 100px; width: 100px; padding-top: 10px;">
       <p style="font-weight: bold; color: yellowgreen; font-family: Arial; font-size: 20pt">
         INFO KOS WEARNES
       </p>
       <p style=" font-family: arial; font-size: 12pt; font-weight: bold;">
         DAPATKAN "INFO KOS MURAH" HANYA DI BINGUNGKOS APP<BR>
         MAU "SEWA KOS MURAH?"<BR>
         DOWNLOAD BINGUNGKOS APP SEKARANG!<BR>
       </p>
       <p style="font-family: arial; font-size: 18pt; font-weight: bold; color: yellowgreen;">
         Job (Karier) &nbsp;&nbsp;|&nbsp;&nbsp;Tentang Kami&nbsp;&nbsp;|&nbsp;&nbsp;Promosikan Kos Anda-Gratis !!!&nbsp;&nbsp;|&nbsp;&nbsp;Kebijakan Privasi
       </p>
       <p>
         <img src="image/logoFacebook.png" alt="infokoswearnes" style="height: 50px; width: 50px;">
         <img src="image/logotwiter.jpg" alt="infokoswearnes" style="height: 50px; width: 50px;">
         <img src="image/logoig.jpg" alt="infokoswearnes" style="height: 50px; width: 50px;">
       </p>
       <p style="color: yellowgreen; font-size: 16pt; font-family: arial;">
        <img src="image/logoemail.png" alt="infokoswearnes" style="height: 30px; width: 30px;">
         ichetrisnawati878@gmail.com&nbsp;&nbsp;
        <img src="image/logoWA.jpg" alt="infokoswearnes" style="height: 30px; width: 30px;">
         +6282236830565
       </p>
      </center>
     </div>
    </div>
  </div>  
</div>


<!-- <div class="container-fluid mt-5">
  <div class="row">
    <div class="col">
      <div id="pro" class="card">
        <div class="card-header badge-danger text-white text-center">
         Promosikan Kos Anda-Gratis
        </div>

        <div class="card-body">
         <div class="card-deck">
          <div class="card work-box">
           <img class="card-img-top "src="image/gambar5.jpg" alt="" style="height: 355px;">
           <div class="card-body">
            <h5 class="card-title">Kos Putri Nadia</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional  content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
             <div class="card-footer text-muted text-center">
              <a href="#det1" class="btn btn-primary" data-toggle="modal" >Detail</a>
             </div>
           </div>
          </div>
  
          <div class="card">
           <img class="card-img-top" src="image/gambar6.jpg" alt="">
            <div class="card-body">
             <h5 class="card-title">Kos Putra Hamid</h5>
             <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
             <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
              <div class="card-footer text-muted text-center" style="margin-bottom: 20px; margin-left: 20px; margin-right: 20px;">
               <a href="#det2" class="btn btn-primary" data-toggle="modal">Detail</a>
              </div>
          </div>
          
          <div class="card">
           <img class="card-img-top" src="image/gambar7.jpg" alt="" style="height: 355px;">
            <div class="card-body">
             <h5 class="card-title">Kos Muslimah</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            <div class="card-footer text-muted text-center" style="margin-bottom: 20px;  margin-left: 20px; margin-right: 20px;">
             <a href="#det3" class="btn btn-primary" data-toggle="modal">Detail</a>
            </div>
          </div>
         </div>
        </div>
      </div>
    </div>
  </div>  
</div> -->

 <section id="pro" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="">
              Promosikan Kos Anda
            </h3>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="work-box">
            <a href="image/gambar5.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="image/gambar5.jpg" alt="" class="img-fluid"style="height: 300px">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Kos Putri Nadia</h2>
                    <div class="w-more">
                      <div class="card-footer text-muted text-center">
                      <a href="#det1" class="btn btn-primary" data-toggle="modal" >Detail</a>
                      </div>
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="image/gambar6.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="image/gambar6.jpg" alt="" class="img-fluid"style="height: 300px">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Kos Putra Hamid</h2>
                    <div class="w-more">
                      <div class="card-footer text-muted text-center">
                      <a href="#det2" class="btn btn-primary" data-toggle="modal" >Detail</a>
                      </div>
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="image/gambar7.jpg" data-lightbox="gallery-mf" >
              <div class="work-img">
                <img src="image/gambar7.jpg" alt="" class="img-fluid" style="height: 300px">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Kos Muslimah</h2>
                    <div class="w-more">
                       <div class="card-footer text-muted text-center">
                      <a href="#det3" class="btn btn-primary" data-toggle="modal" >Detail</a>
                      </div>
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
       
        
      </div>
    </div>
  </section>
 
 
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="gb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-white bg-success ">
        <h4 class="modal-title" id="exampleModalLabel">Guestbook</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="container-fluid">
       <div class="row">
        <div id="gb" class="col">
         
      <form action="<?php echo htmlspecialchars('cekguestbook.php')?>" method="POST">
                <div class="form-group row">
                <label for="nama" class="col-sm-3">Nama</label>
                 <div class="col-sm-9">
                  <input class="form-control" id="nama" type="text" name="nama" value="" placeholder="Ketikkan Nama Anda">
                 </div>                
                </div>
                <div class="form-group row">
                <label for="email" class="col-sm-3">Email</label>
                 <div class="col-sm-9">
                  <input  class="form-control" id="email" type="email" name="alamat" value="" placeholder="Ketikkan Email Anda">
                 </div>
                </div>               
                <div class="form-group row">
                <label for="koment" class="col-sm-3">Komentar</label>
                 <div class="col-sm-9">
                  <textarea class="form-control" name="notelp" id="koment" rows="3"></textarea>
                 </div>
               </div>
               <div  class="">
                <input type="hidden" name="nide" id="nide" value="">
                </div>
               <div  class="text-center mt-5">
                <button class="bg-danger button button-a button-big button-rouded" type="Submit">Simpan </button>
                </div>
              </form>
       
    </div>
  </div>  
</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 




<div class="container-fluid mt-5">
 <div class="row">
  <div class="col">
   <div id="kp" class="card">
    <div class="card-header badge-danger text-white text-center">
      Kebijakan Privasi
    </div>
     <div class="card-body p-5">
     <ol>
     <li> Pengumpulan Informasi<br>
          Kami mengumpulkan informasi dari Anda ketika Anda mendaftar pada situs kami, masuk ke akun Anda, melakukan pembelian, ikut dalam kontes, dan/atau ketika Anda keluar. Data yang dikumpulkan mencakup nama Anda, alamat email, nomor telepon, dan/atau kartu kredit.<br>
          Selain itu, kami menerima dan merekam informasi secara otomatis dari komputer dan peramban Anda, termasuk alamat IP Anda, perlengakapan perangkat keras dan lunak Anda, dan halaman yang Anda minta.</li>
      
          
     <li> Penggunaan Informasi<br>
          Segala informasi yang kami kumpulkan dari Anda dapat digunakan untuk:<br>
          Personalisasi pengalaman dan tanggapan Anda sesuai kebutuhan pribadi Anda<br>
          Menyediakan konten iklan yang disesuaikan<br>
          Meningkatkan situs web kami<br>
          Meningkatkan layanan pelanggan dan mendukung kebutuhan Anda<br>
          Menghubungi Anda lewat email<br>
          Mengatur kontes, promo, atau survei </li>
          
      <li> Privasi E-Dagang<br>
          Kami adalah pemilik tunggal dari informasi yang dikumpulkan pada situs ini. Informasi pribadi Anda yang dapat diidentifikasi tidak akan dijual, dipertukarkan, ditransfer, atau diberikan kepada perusahaan lain dengan alasan apa pun juga, tanpa mendapatkan izin Anda, selain dari hanya semata-mata untuk memenuhi permohonan dan/ atau transaksi, misalnya untuk pengiriman pesanan. </li>
          
      <li> Pengungkapan Pihak Ketiga<br>
          Kami tidak menjual, memperdagangkan, atau pun memindahkan keluar dari pihak kami informasi pribadi Anda yang dapat diidentifikasi. Kami tidak mengikutkan pihak ketiga tepercaya yang membantu kami dalam mengoperasikan situs web kami atau menyelenggarakan bisnis kami, selama semua pihak setuju untuk menjaga kerahasiaan informasi ini.<br>
          Kami meyakini akan pentingnya berbagi informasi dalam rangka menyelidiki, mencegah, atau mengambil tindakan menyangkut aktivitas ilegal, dugaan penipuan, keadaan yang melibatkan ancaman terhadap keamanan fisik seseorang, pelanggaran atas syarat-syarat penggunaan kami, atau hal lain yang diwajibkan oleh hukum.
          Namun, informasi bukan privat dapat diberikan kepada pihak lain untuk pemasaran, pariwara, atau penggunaan lain.</li>
          
      <li> Proteksi Informasi<br>
          Kami menerapkan berbagai langkah keamanan guna menjaga keamanan informasi pribadi Anda. Kami menggunakan enripsi teknologi mutakhir untuk memproteksi informasi sensitif yang dikirimkan secara online. VpnMentor juga memproteksi informasi Anda secara offline. Kami mengaryakan mereka yang perlu mengerjakan pekerjaan khusus (contohnya, penagihan atau layanan pelanggan) diberikan akses ke informasi pribadi yang dapat diidentifikasi. Komputer/server yang digunakan untuk menyimpan informasi pribadi yang dapat diidentifikasi disimpan dalam lingkungan yang aman.<br>
          Apakah kami menggunakan kuki?<br>
          Ya. Kuki kami meningkatkan akses ke situs kami dan mengenali pengunjung yang kembali lagi. Lagi pula, kuki kami memperkaya pengalaman pengguna dengan melacak dan menarget minat mereka. Namun, penggunaan kuki ini, tidak mungkin dapat dikaitkan dengan informasi pribadi yang dapat diidentifikasi pada situs kami.</li>
      <li> Berhenti Berlangganan<br>
          Kami menggunakan alamat email yang Anda berikan untuk mengirimi Anda informasi dan pembaruan menyangkut pesanan Anda, berita berkala perusahaan, informasi mengenai produk, dll. Bila kapan saja Anda ingin berhenti menerima email kami di masa mendatang, kami memasukkan informasi mendetail informasi berhenti berlangganan di bawah tiap-tiap email </li>
         
       <li> Persetujuan<br>
          Dengan menggunakan situs kami, Anda setuju dengan kebijakan privasi kami.</li>
         
        </div>
      </div>
    </div>
  </div>  
</div>



<div class="modal fade" id="det1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-white bg-primary">
        <h4 class="modal-title" id="exampleModalLabel">Kos Putri Nadia</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ol>
        <li>Nama pemilik : <b>Ibu Rina</b><br></li>
         <li>No Telpon/WA : <b>081234432123</b><br></li>
        <li>Lokasi Kost : <b>Malang,jln.Jakarta No 12</b><br></li>
        <li>Fasilitas Kost : <b> Lemari, Kipas Angin, Kursi, Meja, WC duduk, Wifi, dan TV</b><br></li>
        </ol>
        <p class="text-center">
          Kos-kosan khusus Wanita,<br>
          Kos yang bersih dan dijamin anda nyaman,<br>
          ukuran kamar yang cukup luas dengan ukuran(5x5 meter)
        </p>       
      </div>
           <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
    </div>
  </div>
</div>

<div class="modal fade" id="det2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-white bg-success ">
        <h4 class="modal-title" id="exampleModalLabel">Kos Putra Hamid</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ol>
        <li>Nama pemilik : <b>Pak Hamid</b><br></li>
         <li>No Telpon/WA : <b>081234432125</b><br></li>
        <li>Lokasi Kost : <b>Malang,jln.Surabaya No 9</b><br></li>
        <li>Fasilitas Kost : <b> Lemari, Kursi, Meja, dan TV</b><br></li>
        </ol>
        <p class="text-center">
          Kos-kosan khusus Pria,<br>
          Kos yang bersih dan dijamin anda nyaman,<br>
          ukuran kamarnya (4x4 meter)
        </p>       
      </div>
           <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
    </div>
  </div>
</div>

<div class="modal fade" id="det3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-white bg-success ">
        <h4 class="modal-title" id="exampleModalLabel">Kos Putra Hamid</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ol>
        <li>Nama pemilik : <b>Buk Ayuk</b><br></li>
         <li>No Telpon/WA : <b>082234432120</b><br></li>
        <li>Lokasi Kost : <b>Malang,jln.Jakarta No.2</b><br></li>
        <li>Fasilitas Kost : <b> Lemari, Kursi, Meja, Kipas angin, Mushola, dan Wifi</b><br></li>
        </ol>
        <p class="text-center">
          Kos-kosan untuk Muslimah,<br>
          Kos yang bersih, rapi dan dijamin nyaman,<br>
          ukuran kamarnya seluas (5x5 meter)
        </p>       
      </div>
           <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
    </div>
  </div>
</div>


<div class="card-footer bg-dark text-center text-light  border-success fixed-bottom ">Web InfoKos @createby-[Ice Trisnawati]</div>

 
    <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

     <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/popper/popper.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/counterup/jquery.waypoints.min.js"></script>
    <script src="lib/counterup/jquery.counterup.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
  </body>
</html>
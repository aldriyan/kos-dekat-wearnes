<?php
  include "../../CRUD/konek.php";  
  $sql = "
  SELECT
  `tbguestbook`.`Id`,
  `tbguestbook`.`nama`,
  `tbguestbook`.`email`,
  `tbguestbook`.`komentar`
  FROM
  `tbguestbook`";
  
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tampil Data</title>
   <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.css">
  <link rel="stylesheet" href="">
</head>
<body>

  <!-- <center class="display-3 text dark">DATA PETUGAS</center> -->
  <div class="container-fluid">
  <div class="row mt-5">
    <div class="col"> 
    <!-- <button id="tombol" class="btn btn-danger btn-block ">
       <i class="fas fa-search-location"></i>
      TAMPIL DATA
    </button> -->   
   <div id="wadah" class="card border-danger  mb-3" style="display: none;">
    <div class="card-header text-center bg-dark text-white">
     <h4>Data Guestbook</h4>
    </div>
    <div class="card-body text-danger">
     <!--  <a href="../../CRUD/guestbook/add.php" class="btn btn-danger mb-2">
        <i class="fas fa-plus"></i>
        Tambah Data
      </a> -->
  <table id="dtp" class="table table-striped table-bordered">
  <thead class="bg-danger text-light text-center">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Aksi</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Komentar</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $eks = $conn->query($sql);
      while ($data=$eks->fetch_array())
      {
    ?>

        <tr class="text-center">

          <td><?php echo $data['Id'] ?></td>           
           <td class="text-center"> 
            <button id=" <?php echo $data['Id'] ?> - <?php echo $data['nama'] ?> - <?php echo $data['email'] ?> - <?php echo $data['komentar'] ?> " class="btn btn-icon btn-sm text-success btnEDIT" title="Edit"> 
             <i class="fas fa-edit"></i> 
            </button> 
            <button id=" <?php echo $data['Id'] ?>-<?php echo $data['email'] ?> " class="btn btn-icon btn-sm text-danger btnDELETE" title="Hapus"> 
             <i class="fas fa-trash"></i> 
            </button> 
           </td>
          <td><?php echo $data['nama'] ?></td>
          <td><?php echo $data['email'] ?></td>
          <td><?php echo $data['komentar'] ?></td>
        </tr>
        <?php
      }
        ?>
  </tbody>
</table>
</div>
</div>
</div>
</div>
</div>


<div class="modal fade" id="modalhapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-white bg-success ">
        <h4 class="modal-title" id="exampleModalLabel">Hapus Data Guestbook</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><b>Info Data :</p></b>
        <p>Id: <b id="n1"></b>  </p>
        <p>Email: <b id="n3"></b>  </p>
        <p>Apakah Data Ingin Di <b>Hapus</b>???</p>
        <form action="<?php echo htmlspecialchars('../../CRUD/guestbook/hapus.php')?>" method="POST">
          <input id="n2" type="hidden" name="nIdp">
        <button class="btn btn-dark">Yes</button>
        </form>
     </div>
    </div>
  </div>  
</div>

<div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-white bg-dark ">
        <h4 class="modal-title" id="exampleModalLabel">Edit Data Guestbook</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-success">        
        <form action="<?php echo htmlspecialchars('../../CRUD/guestbook/edit.php')?>" method="POST" >
                <div class="form-group row ">
                <label for="nm" class="col-sm-3 ">Nama</label>
                 <div class="col-sm-9 ">
                  <input class="form-control" id="nm" type="text" name="nama" value="" placeholder="">
                 </div>                
                </div>
                <div class="form-group row">
                <label for="alm" class="col-sm-3 ">Email</label>
                 <div class="col-sm-9">
                  <input  class="form-control" id="alm" type="email" name="alamat" value="" placeholder="">
                 </div>
                </div>
                <div class="form-group row">
                <label for="nohp" class="col-sm-3 ">Komentar</label>
                 <div class="col-sm-9">
                  <textarea class="form-control" name="notelp" id="nohp" rows="3"></textarea>                  
                 </div>                
                </div>
               <div  class="text-center mt-3 mb-3">
                <input type="hidden" name="nide" id="nide" value="">
                <button class="bg-danger" type="Submit">
                <i class="fas fa-save"></i>&nbsp; Simpan Edit 
              </button>
              <button class="bg-danger" type="reset">&nbsp; Batal &nbsp;</button>
                </div>
               
              </form>
      </div>
    </div>
  </div>
</div>

  <script src="../../bootstrap/js/jquery-3.3.1.slim.min.js"></script>
  <script src="../../bootstrap/js/popper.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <script src="../../bootstrap/js/jquery.dataTables.min.js"></script>
  <script src="../../bootstrap/js/dataTables.bootstrap4.min.js"></script>

  <script>
    $(document).ready(function() {
    $('#dtp').DataTable();
    // $('#tombol').click(function() {
    //    alert('card sudah berhasil dimunculkan')
       $('#wadah').show();
       $('.btnDELETE').click(function(){
        var nid = $(this).attr('id')
        var sp = nid.split("-");
        $('#n1').html(sp[0])
        $('#n3').html(sp[1])
        $('#n2').val(sp[0])
        $('#modalhapus').modal({

        });
       })

       $('.btnEDIT').click(function(){
        var nid = $(this).attr('id')
        var sp = nid.split("-");

        $('#nm').val(sp[1]);
        $('#alm').val(sp[2]);
        $('#nohp').val(sp[3]);
        $('#nide').val(sp[0])
        $('#modaledit').modal({

        });

        $('#modaledit').on('hidden.bs.modal', function(){ 
          window.location.href = "../../Admin/examples/index.php?hal=guestbook";    
         }) 

       })

     })
      // } );
    </script>
  
</body>
</html>
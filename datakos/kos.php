<?php
  include "../../CRUD/konek.php";  
  $sql = "
  SELECT
  `tbkos`.`Id`,
  `tbkos`.`nmgambar`,
  `tbkos`.`nmkos`,
  `tbkos`.`info`,
  `tbkos`.`status`
  FROM
  `tbkos`";
  
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
  <div class="container">
  <div class="row">
    <div class="col"> 
    <!-- <button id="tombol" class="btn btn-danger btn-block ">
       <i class="fas fa-search-location"></i>
      TAMPIL DATA
    </button> -->   
   <div id="wadah" class="card border-danger  mb-3">
    <div class="card-header text-center bg-dark text-white">
     <h4>Data Job Karir</h4>
    </div>
    <div class="card-body text-danger">
       <a href="../../CRUD/guestbook/add.php" class="btn btn-danger mb-2">
        <i class="fas fa-plus"></i>
        Tambah Data
      </a>
   <table id="dtp" class="table table-striped table-bordered">
  <thead class="bg-danger text-light text-center">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Aksi</th>
      <th scope="col">Nama Gambar</th>
      <th scope="col">Nama Karir</th>
      <th scope="col">Info</th>
      <th scope="col">Status</th>
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
            <button id=" <?php echo $data['Id'] ?> - <?php echo $data['nmgambar'] ?> - <?php echo $data['nmkos'] ?> - <?php echo $data['info'] ?> - <?php echo $data['status'] ?>" class="btn btn-icon btn-sm text-success btnEDIT" title="Edit"> 
             <i class="fas fa-edit"></i> 
            </button> 
           </td>
          <td><?php echo $data['nmgambar'] ?></td>
          <td><?php echo $data['nmkos'] ?></td>
           <td><?php echo $data['info'] ?></td>
            <td><?php echo $data['status'] ?></td>

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
        <h4 class="modal-title" id="exampleModalLabel">Hapus Data Job(Karir)</h4>
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
        <h4 class="modal-title" id="exampleModalLabel">Edit Data Kos</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-success">        
        <form action="<?php echo htmlspecialchars('')?>" method="POST" >
                <div class="form-group row ">
                <label for="nm" class="col-sm-3 ">Nama Gambar</label>
                 <div class="col-sm-9 ">
                  <input class="form-control" id="nm" type="text" name="nama" value="" placeholder="" readonly>
                 </div>                
                </div>
               <!--  <div class="form-group row">
                <label for="nohp" class="col-sm-3 ">Keterangan</label>
                 <div class="col-sm-9">
                  <textarea class="form-control" name="notelp" id="nohp" rows="3"></textarea>                  
                 </div> 
                </div> -->
                  <div class="form-group row">
                  <label for="alm" class="col-sm-3 ">Nama Kos</label>
                  <div class="col-sm-9">
                  <input  class="form-control" id="alm" type="text" name="alamat" value="" placeholder="" readonly>
                 </div>
                  </div>
                  <div class="form-group row">
                  <label for="info" class="col-sm-3 ">Info</label>
                  <div class="col-sm-9">
                  <select  class="form-control" id="info" name="info" placeholder="" >
                    <option value="#ver">verified</option>
                    <option value="#unver">unverified</option>
                  </select>
                 </div>
                </div> 
                 <div class="form-group row">
                  <label for="status" class="col-sm-3 ">Status</label>
                  <div class="col-sm-9">
                  <select  class="form-control" id="status" name="status" placeholder="">
                    <option value="#a">A</option>
                    <option value="#p">P</option>
                  </select>
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

       $('.btnEDIT').click(function(){
        var nid = $(this).attr('id')
        var sp = nid.split("-");

        $('#nm').val(sp[1]);
        $('#nohp').val(sp[2]);
        $('#alm').val(sp[3]);
        $('#nide').val(sp[0]);
        // var(info) = sp[4];
        // switch(info)
        // {
        //   case 'verified':
        //   $('#ver').attr('selected','selected');
        //   break;
        //   case 'unverified':
        //   $('#unver').attr('selected','selected');
        //   break;

        // }
        // var(status) = sp[5];
        // switch(status)
        // {
        //   case 'A':
        //   $('#a').attr('selected','selected');
        //   break;
        //   case 'P':
        //   $('#p').attr('selected','selected');
        //   break;

        // }
        $('#modaledit').modal({

        });

        $('#modaledit').on('hidden.bs.modal', function(){ 
          window.location.href = "../../Admin/examples/index.php?hal=jobkarir";    
         }) 

       })

     })
      // } );
    </script>

    </body>
</html>
 
<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view("master/_partials/head.php")?>
</head>

<body>
    <?php $this->load->view("master/_partials/loading.php")?>
    <?php $this->load->view("master/_partials/navbar.php")?>
    <?php $this->load->view("master/_partials/sidebarchat.php")?>
    <?php $this->load->view("master/_partials/sidebar.php")?>
   
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                <?php $this->load->view("master/_partials/breadcrumb.php")?>
                                <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                              <div class="card">
                                                
                                                    <div class="card-header table-card-header">
                                                    <div class="animation-model">
                                                    <?php    if($this->session->userdata('jabatan') == "Admin"){
                                                                     ?>
                                                                   <button class="btn btn-primary btn-outline-primary" data-toggle="modal" data-target="#default-Modal" ><i class="icofont icofont-ui-add"></i>Tambah Data </button>
                                               
                                                                <?php }?>
                                                    </div>
                                               
                                                    </div>
                                                    
                                                    <div class="card-block">
                                                  
                                                    <div class="dt-responsive table-responsive">
                                                            <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>

                                                                    <th>No</th>
                                                                        <th>nama_Pengguna</th>
                                                                        <th>username</th>
                                                                        <th>hakakses</th>
                                                                        <th>Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                           
                                                            <?php 
                                                            $nomor = 0;
                                                            
                                                            foreach ($Pengguna as $data):
                                                            
                                                            if ($data->username == 'Developer') {
                                                                
                                                            }else {
                                                                $nomor++;
                                                               ?>
                                                            
                                                                <tr id="deletedataku<?php echo $data->id_Pengguna?>">
                                                                     <td>
                                                                        <?php echo $nomor; ?>
                                                                    </td>
                                                                    
                                                                    <td>
                                                                        <?php echo $data->nama_Pengguna ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $data->username ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $data->hakakses?>
                                                                    </td>
                                                                   
                                                                    <td>
                                                                    <?php    if($this->session->userdata('jabatan') == "Admin"){
                                                                     ?>
                                                                  <a href="" data-toggle="modal" data-target="#default-Modal1" onclick="edit(<?php echo $data->id_Pengguna?>,'<?php echo $data->nama_Pengguna?>','<?php echo $data->username?>','<?php echo $data->hakakses?>')" data-toggle="tooltip" data-placement="bottom" title="Edit Kriteria"
                                                                        class="btn btn-small btn-outline-primary" ><i class="icofont icofont-pen-alt-4"></i> Edit</a>
                                                                        <a onclick="deletedata(<?php echo $data->id_Pengguna?>,'<?php echo $data->nama_Pengguna?>')" href="#" data-toggle="tooltip" data-placement="bottom" title="Hapus Pengguna" class="btn btn-small btn-outline-danger"><i class="icofont icofont-trash"></i> Hapus</a>
                                                                
                                                                <?php }?>
                                                                        
                                                                    </td>
                                                                </tr>
                                                                <?php } endforeach; ?>
                                                        </tbody>
                                                                <tfoot>
                                                                <tr>
                                                                <th>No</th>
                                                                        <th>nama_Pengguna</th>
                                                                        <th>username</th>
                                                                        <th>hakakses</th>
                                                                        <th>Aksi</th>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- HTML5 Export Buttons end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="styleSelector">
                                </div>
                            </div>
                        </div>
                    </div>

  
    <div class="modal fade" id="default-Modal" tabindex="-1" role="dialog">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title">Tambah Data</h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form action="" method="post" enctype="multipart/form-data" >
                                                                                <div class="form-group row">
                                                                                        <label class="col-sm-12 col-form-label">Nama</label>
                                                                                        <div class="col-sm-12">
                                                                                        <input type="text" class="form-control" name="nama_Pengguna" placeholder="Text Input Validation" required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-12 col-form-label">Username</label>
                                                                                        <div class="col-sm-12">			
                                                                                            <input type="text" class="form-control" name="username" placeholder="Text Input Validation" required>
                                                                                            <span class="messages"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-12 col-form-label">Password</label>
                                                                                        <div class="col-sm-12">
                                                                                            <input type="password" class="form-control" name="password" required>
                                                                                            <span class="messages"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-12 col-form-label">HakAkses</label>
                                                                                        <div class="col-sm-12">
                                                                                        <select name="hakakses" class="form-control" required>
                                                                                                <option value="" >Select One Value Only</option>
                                                                                                <option value="Admin" >Admin</option>
                                                                                                <option value="Pengguna" >Pengguna</option>
                                                                                            </select>
                                                                                            <span class="messages"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                  
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-0"></label>
                                                                                        <div class="col-sm-10">
                                                                                        <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                                                                                        </div>
                                                                                    </div>
                                                                                 </form>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                
                                                                                <button type="button" class="btn btn-primary waves-effect waves-light " data-dismiss="modal">Tutup</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
<!-- Required Update-->
                                                                <div class="modal fade" id="default-Modal1" tabindex="-1" role="dialog">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title">Update Data</h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form action="" method="post" enctype="multipart/form-data" >
                                                                                <input type="hidden" name="id_Pengguna" id="id_Pengguna">
                                                                                <div class="form-group row">
                                                                                        <label class="col-sm-12 col-form-label">Nama</label>
                                                                                        <div class="col-sm-12">
                                                                                        <input type="text" class="form-control" id="nama_Pengguna" name="nama_Pengguna" placeholder="Text Input Validation" required>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-12 col-form-label">Username</label>
                                                                                        <div class="col-sm-12">			
                                                                                            <input type="text" class="form-control" id="username" name="username" placeholder="Text Input Validation" required>
                                                                                            <span class="messages"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-12 col-form-label">HakAkses</label>
                                                                                        <div class="col-sm-12">
                                                                                        <select name="hakakses" id="hakakses" class="form-control" required>
                                                                                                <option value="" >Select One Value Only</option>
                                                                                                <option value="Admin" >Admin</option>
                                                                                                <option value="Pengguna" >Pengguna</option>
                                                                                            </select>
                                                                                            <span class="messages"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                  
                                                                                    
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-0"></label>
                                                                                        <div class="col-sm-10">
                                                                                        <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                                                                                        </div>
                                                                                    </div>
                                                                                 </form>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                
                                                                                <button type="button" class="btn btn-primary waves-effect waves-light " data-dismiss="modal">Tutup</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


            <!-- Required Jquery -->
    <?php $this->load->view("master/_partials/js.php")?>

     
</body>
<script>

function edit(id_Pengguna,nama_Pengguna='',username='',hakakses=''){
   // id_sub	nama_Pilihan	nilai_Pilihan	id_Kritera
   //alert(id);
   document.getElementById("id_Pengguna").value=id_Pengguna;
    document.getElementById("nama_Pengguna").value=nama_Pengguna;
    document.getElementById("username").value=username;
    document.getElementById("hakakses").value=hakakses;
    
    $('#default-Modal1').modal();
}

function deletedata(id,nama='')
  {
    swal({
      title: "Anda Yakin?",
      
      text: "Data Pengguna "+nama+" Akan Dihapus Secara Permanen!",
      type: "warning",
      showCancelButton: true,
      // confirmButtonColor: "#DD6B55",
      confirmButtonText: "Yes, delete it!",
      closeOnConfirm: false
    },
    function(){
      $.ajax({
          url: "<?php echo site_url('master/Pengguna/delete/') ?>"+id,
          type: "post",
          data: {id:id},
          success:function(){
            swal('Data Berhasil Di Hapus', ' ', 'success');
            $("#deletedataku"+id).fadeTo("slow", 0.7, function(){
              $(this).remove();
            })

          },
          error:function(){
            swal('Data gagal di hapus dikarenakan data sudah ada riwayat didalam Data Buku', 'error');
          }
      });
      
    });
  }
</script>
 <?php if ($this->session->flashdata('successPengguna')): ?>
                                                      <script> 
                                                        swal("Good Job!","<?php echo $this->session->flashdata('successPengguna') ?>","success");
                                                      </script>
                                                    <?php endif; ?>

</script>
</html>
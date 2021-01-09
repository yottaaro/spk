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
                                                                  <!-- <button class="btn btn-primary btn-outline-primary" data-toggle="modal" data-target="#default-Modal" ><i class="icofont icofont-ui-add"></i>Tambah Data </button> -->
                                              
                                                                <?php }?>
                                                     </div>
                                               
                                                    </div>
                                                    
                                                    <div class="card-block">
                                                  
                                                    <div class="dt-responsive table-responsive">
                                                            <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Sub Kriteria</th>
                                                                        <th>Nilai</th>
                                                                        <th>Dari Kriteria</th>
                                                                        <th>Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                           
                                                            <?php 
                                                            $nomor = 0;
                                                            
                                                            foreach ($SubKriteria as $data):
                                                            $nomor++;
                                                            ?>
                                                                <tr id="deletedataku<?php echo $data->id_sub?>">
                                                                     <td>
                                                                        <?php echo $nomor; ?>
                                                                    </td>
                                                                    
                                                                    <td>
                                                                        <?php echo $data->nama_Pilihan ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $data->nilai_Pilihan ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $data->nama_Kriteria ?>
                                                                    </td>
                                                                   
                                                                    <td>
                                                                    <?php    if($this->session->userdata('jabatan') == "Admin"){
                                                                     ?>
                                                                  <a href="" data-toggle="modal" data-target="#default-Modal1" onclick="edit(<?php echo $data->id_sub?>,'<?php echo $data->nama_Pilihan?>','<?php echo $data->nilai_Pilihan?>','<?php echo $data->id_Kritera?>')" data-toggle="tooltip" data-placement="bottom" title="Edit Kriteria"
                                                                        class="btn btn-small btn-outline-primary" ><i class="icofont icofont-pen-alt-4"></i> Edit</a>
                                                                        <!-- <a onclick="deletedata(<?php echo $data->id_sub?>,'<?php echo $data->nama_Pilihan?>')" href="#" data-toggle="tooltip" data-placement="bottom" title="Hapus Kriteria" class="btn btn-small btn-outline-danger"><i class="icofont icofont-trash"></i> Hapus</a> -->
                                                                
                                                                <?php }?>
                                                                        
                                                                    </td>
                                                                </tr>
                                                                <?php endforeach; ?>
                                                        </tbody>
                                                                <tfoot>
                                                                <tr>
                                                                <th>No</th>
                                                                        <th>Sub Kriteria</th>
                                                                        <th>Nilai</th>
                                                                        <th>Dari Kriteria</th>
                                                                        <th>Aksi</th>
                                                                    </tr>
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
                                                                                <form action="<?php site_url('master/SubKriteria/tambah'); ?>" method="post" enctype="multipart/form-data" >
                                                                                <div class="form-group row">
                                                                                        <label class="col-sm-12 col-form-label">Dari Kriteria</label>
                                                                                        <div class="col-sm-12">
                                                                                        <select  name="id_Kritera"  class="form-control" required>
                                                                                        <?php foreach ($Kriteria as $data):?>
                                                                                            <option value="<?php echo $data->id ?>"> <?php echo $data->nama_Kriteria ?></option>
                                                                                        <?php endforeach; ?> 
                                                                                        </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-12 col-form-label">Nama Sub Kriteria</label>
                                                                                        <div class="col-sm-12">			
                                                                                            <input type="text" class="form-control" name="nama_Pilihan" placeholder="Text Input Validation" required>
                                                                                            <span class="messages"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-12 col-form-label">Nilai Sub Kriteria</label>
                                                                                        <div class="col-sm-12">
                                                                                            <input type="number" class="form-control" name="nilai_Pilihan" required>
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
                                                                                <form action="<?php site_url('master/SubKriteria/edit'); ?>" method="post" enctype="multipart/form-data" >
                                                                                <input type="hidden" name="id_sub" id="id_sub">
                                                                                <div class="form-group row">
                                                                                        <label class="col-sm-12 col-form-label">Dari Kriteria</label>
                                                                                        <div class="col-sm-12">
                                                                                        <select  name="id_Kritera" id="id_Kritera"  class="form-control" required>
                                                                                        <?php foreach ($Kriteria as $data):?>
                                                                                            <option value="<?php echo $data->id ?>"> <?php echo $data->nama_Kriteria ?></option>
                                                                                        <?php endforeach; ?> 
                                                                                        </select>
                                                                                        </div>
                                                                                    </div>
                                                                                <div class="form-group row">
                                                                                        <label class="col-sm-12 col-form-label">Nama Sub Kriteria</label>
                                                                                        <div class="col-sm-12">			
                                                                                            <input type="text" class="form-control" id="nama_Pilihan" name="nama_Pilihan" placeholder="Text Input Validation" required>
                                                                                            <span class="messages"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-12 col-form-label">Nilai Sub Kriteria</label>
                                                                                        <div class="col-sm-12">
                                                                                            <input type="number" class="form-control" id="nilai_Pilihan" name="nilai_Pilihan" required>
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

function edit(id,nama_Pilihan='',nilai_Pilihan='',idkriteria=''){
   // id_sub	nama_Pilihan	nilai_Pilihan	id_Kritera
   //alert(id);
    document.getElementById("id_sub").value=id;
    document.getElementById("nama_Pilihan").value=nama_Pilihan;
    document.getElementById("nilai_Pilihan").value=nilai_Pilihan;
    document.getElementById("id_Kritera").value=idkriteria;
    
    $('#default-Modal1').modal();
}

function deletedata(id,nama='')
  {
    swal({
      title: "Anda Yakin?",
      
      text: "Data Sub Kriteria "+nama+" Akan Dihapus Secara Permanen!",
      type: "warning",
      showCancelButton: true,
      // confirmButtonColor: "#DD6B55",
      confirmButtonText: "Yes, delete it!",
      closeOnConfirm: false
    },
    function(){
      $.ajax({
          url: "<?php echo site_url('master/SubKriteria/delete/') ?>"+id,
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
 <?php if ($this->session->flashdata('successSubKriteria')): ?>
                                                      <script> 
                                                        swal("Good Job!","<?php echo $this->session->flashdata('successSubKriteria') ?>","success");
                                                      </script>
                                                    <?php endif; ?>

</script>
</html>
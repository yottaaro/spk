<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view("master/_partials/head.php")?>
</head>

<body>
    <!-- Pre-loader start -->
    <?php $this->load->view("master/_partials/loading.php")?>
    <!-- Pre-loader end -->
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
                                                <!-- HTML5 Export Buttons table start -->
                                                <div class="card">
                                                    <div class="card-header table-card-header">
                                                                         <?php    if($this->session->userdata('jabatan') == "Admin"){
                                                                     ?>
                                                                   <!-- <a href="<?php echo site_url('master/Kriteria/tambah')?>"><button class="btn btn-primary btn-outline-primary"><i class="icofont icofont-ui-add"></i>Tambah </button></a> -->
                                                                     
                                                                <?php }?>
                                                                        
                                                    </div>
                                                    
                                                    <div class="card-block">
                                                  
                                                    <div class="dt-responsive table-responsive">
                                                            <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>nama_Kriteria</th>
                                                                        <th>status_Nilai</th>
                                                                        <th>sifat_Kriteria</th>
                                                                       
                                                                        <th>bobot</th>
                                                                        <th>Perbaikan bobot</th>
                                                                        <th>Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                           
                                                            <?php 
                                                            $nomor = 0;
                                                            
                                                            foreach ($Kriteria as $data):
                                                            $nomor++;
                                                            ?>
                                                         			

                                                                <tr id="deletedataku<?php echo $data->id?>">
                                                                     <td>
                                                                        <?php echo $nomor; ?>
                                                                    </td>
                                                                    
                                                                    <td>
                                                                        <?php echo $data->nama_Kriteria ?>
                                                                    </td>
                                                                    <td>
                                                                    <?php if ($data->status_Nilai == -1) {
                                                                       echo "Negatif";
                                                                    }else {
                                                                        echo "Positif";
                                                                    } ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php if ($data->sifat_Kriteria == 0) {
                                                                          echo "Tidak Punya Sub Kriteria";
                                                                        } else {
                                                                            echo "Punya Sub Kriteria";
                                                                        } ?>
                                                                        
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $data->bobot?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $data->perbaikan_Bobot?>
                                                                    </td>
                                                                    
                                                                       <td style="text-align:center;">

                                                                       <?php    if($this->session->userdata('jabatan') == "Admin"){
                                                                     ?>
                                                                  <a href="<?php echo site_url('master/kriteria/edit/'.$data->id) ?>" data-toggle="tooltip" data-placement="bottom" title="Edit Kriteria"
                                                                        class="btn btn-small btn-outline-primary" ><i class="icofont icofont-pen-alt-4"></i> Edit</a>
                                                                        <!-- <a onclick="deletedata('<?php echo $data->id?>','<?php echo $data->nama_Kriteria?>')" href="#" data-toggle="tooltip" data-placement="bottom" title="Hapus Kriteria" class="btn btn-small btn-outline-danger"><i class="icofont icofont-trash"></i> Hapus</a> -->
                                                                
                                                                <?php }?>
                                                                       
                                                                    </td>
                                                                    
                                                                </tr>
                                                                <?php endforeach; ?>
                                                        </tbody>
                                                                <tfoot>
                                                                <tr> 
                                                                <th>No</th>
                                                                        <th>nama_Kriteria</th>
                                                                        <th>status_Nilai</th>
                                                                        <th>sifat_Kriteria</th>
                                                                       
                                                                        <th>bobot</th>
                                                                        <th>Perbaikan bobot</th>
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
<script>



</script>
   
    <?php $this->load->view("master/_partials/js.php")?>
</body>
<script>

function deletedata(id,nama='')
  {
    swal({
      title: "Anda Yakin?",
      
      text: "Data Kriteria "+nama+" Akan Dihapus Secara Permanen!",
      type: "warning",
      showCancelButton: true,
      // confirmButtonColor: "#DD6B55",
      confirmButtonText: "Yes, delete it!",
      closeOnConfirm: false
      
    },
    function(){
      $.ajax({
          url: "<?php echo site_url('master/kriteria/delete/')?>"+id,
          type: "post",
          data: {id:id},
          success:function(){
            swal('Data Berhasil Di Hapus', ' ', 'success');
            $("#deletedataku"+id).fadeTo("slow", 0.7, function(){
              $(this).remove();
            })
            setTimeout(function(){
                location.reload();
                  }, 1000);

          },
          error:function(data){
              console.log(data);
            swal('Data Tidak Bisa Di hapus Dikarenakan Sudah ada dalm riwayat SUB Kriteria', 'error');
          }
      });
      
    });
  }
</script>


</script>
</html>
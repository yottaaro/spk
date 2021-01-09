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
                                                    <?php
                                                    if($this->session->userdata('jabatan') == "Admin"){
                                                                     ?>
                                                                     <a href="<?php echo site_url('master/Mustahik/tambah')?>"><button class="btn btn-primary btn-outline-primary"><i class="icofont icofont-ui-add"></i>Tambah </button></a>
                                                 
                                                                <?php }?>
                                                                        
                                                    </div>
                                                    
                                                    <div class="card-block">
                                                  
                                                    <div class="dt-responsive table-responsive">
                                                            <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                    
                                                                        <th>No</th>
                                                                        <th>kode_Mustahik</th>
                                                                        <th>Nama Mustahik</th>
                                                                        <th>TTL</th>
                                                                       
                                                                        <th>Alamat</th>
                                                                        <th>Jenis kelamin</th>
                                                                        <th>no_ktp</th>
                                                                        <th>pekerjaan</th>
                                                                        <th>Jabatan Pekerjaan</th>
                                                                        <th>No Hp</th>
                                                                        <th>Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                           
                                                            <?php 
                                                            $nomor = 0;
                                                            
                                                            foreach ($Mustahik as $data):
                                                            $nomor++;
                                                            ?>
                                                         			

                                                                <tr id="deletedataku<?php echo $data->kode_Mustahik?>">
                                                                     <td>
                                                                        <?php echo $nomor; ?>
                                                                    </td>
                                                                    
                                                                    <td>
                                                                        <?php echo $data->kode_Mustahik ?>
                                                                    </td>
                                                                    <td>
                                                                    <?php echo $data->nama ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $data->tempat_Lahir ?>
                                                                        
                                                                        <?php echo $data->tanggal_Lahir ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $data->alamat?>
                                                                    </td>
                                                                    <td>
                                                                    <?php echo $data->jenis_kelamin ?>
                                                                    </td>
                                                                    <td>
                                                                   
                                                                    <?php echo $data->no_ktp ?>
                                                                    </td>
                                                                    <td>
                                                                   
                                                                    <?php echo $data->pekerjaan ?>
                                                                    </td>
                                                                    <td>
                                                                   
                                                                    <?php echo $data->jabatan_pekerjaan ?>
                                                                    </td>
                                                                    <td>
                                                                    <?php echo $data->tlp ?>
                                                                    </td>
                                                                       <td style="text-align:center;">

                                                                       <?php
                                                                 if($this->session->userdata('jabatan') == "Admin"){
                                                                     ?>
                                                                    <a href="<?php echo site_url('master/mustahik/edit/'.$data->kode_Mustahik) ?>" data-toggle="tooltip" data-placement="bottom" title="Edit Buku"
                                                                        class="btn btn-small btn-outline-primary" ><i class="icofont icofont-pen-alt-4"></i> Edit</a>
                                                                        <a onclick="deletedata('<?php echo $data->kode_Mustahik?>','<?php echo $data->nama?>')" href="#" data-toggle="tooltip" data-placement="bottom" title="Hapus Buku" class="btn btn-small btn-outline-danger"><i class="icofont icofont-trash"></i> Hapus</a>
                                                                
                                                                <?php }?>
                                                                
                                                                       
                                                                    </td>
                                                                    
                                                                </tr>
                                                                <?php endforeach; ?>
                                                        </tbody>
                                                                <tfoot>
                                                                <tr> 
                                                                <th>No</th>
                                                                        <th>kode_Mustahik</th>
                                                                        <th>Nama Mustahik</th>
                                                                        <th>TTL</th>
                                                                       
                                                                        <th>Alamat</th>
                                                                        <th>Jenis kelamin</th>
                                                                        <th>no_ktp</th>
                                                                        <th>pekerjaan</th>
                                                                        <th>Jabatan Pekerjaan</th>
                                                                        <th>No Hp</th>
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
      
      text: "Data Mustahik "+nama+" Akan Dihapus Secara Permanen!",
      type: "warning",
      showCancelButton: true,
      // confirmButtonColor: "#DD6B55",
      confirmButtonText: "Yes, delete it!",
      closeOnConfirm: false
      
    },
    function(){
      $.ajax({
          url: "<?php echo site_url('master/mustahik/delete/')?>"+id,
          type: "post",
          data: {id:id},
          success:function(){
            swal('Data Berhasil Di Hapus', ' ', 'success');
            $("#deletedataku"+id).fadeTo("slow", 0.7, function(){
              $(this).remove();
            })

          },
          error:function(data){
              console.log(data);
            swal('Data Tidak Bisa Di hapus Dikarenakan Sudah ada dalm riwayat transaksi', 'error');
          }
      });
      
    });
  }
</script>


</script>
</html>
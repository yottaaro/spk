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
                        
                                        <!-- Page body start -->
                                        <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Inputs Validation start -->
                                                <div class="card" id="card">
                                                    <div class="card-header">
                                                        <h5>Formulir Mustahik</h5>
                                                        <span> </span>
                                                        
                                                    </div>
                                                    <div class="card-block">
                                                    
                                                    <form action="<?php base_url('master/pasien/pendaftaran') ?>" id="f" method="post" enctype="multipart/form-data" >
                                                            <div class="form-group row">
                                                                <label for="kode" class="col-sm-2 col-form-label">Kode Mustahik</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="kode_Mustahik"
                                                                         placeholder="Text Input Validation" readonly value="<?php echo $kode; ?>" required>
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">No Ktp</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="no_ktp"
                                                                         placeholder="" required>
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Nama</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="nama"
                                                                         placeholder="" required>
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">No tlp</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="tlp"
                                                                         placeholder="" required>
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">TTL</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" name="tempat_Lahir"
                                                                         placeholder="Tempat Lahir" required>
                                                                    <span class="messages"></span>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input type="date" class="form-control" name="tanggal_Lahir"
                                                                         placeholder="" required>
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Alamat </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="alamat"
                                                                         placeholder="" required>
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                                                <div class="col-sm-10">
                                                                <select id="sales" name="jenis_kelamin"  class="form-control" required>
                                                                    <option value="" >Pilih Jenis</option>
                                                                    
                                                                    
                                                                 <option value="Laki-Laki">Laki Laki</option>
                                                                 <option value="Perempuan">Perempuan</option>
                                                                </select>
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                            


                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="pekerjaan"
                                                                         placeholder="" required>
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jabatan Pekerjaan</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="jabatan_pekerjaan"
                                                                         placeholder="" required>
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2"></label>
                                                                <div class="col-sm-10">
                                                                <?php
                                                                 if($this->session->userdata('jabatan') == "Admin"){
                                                                     ?>
                                                                    <button type="submit" name="input" class="btn btn-primary m-b-0">Submit</button>
                                                               
                                                                <?php }?>
                                                               
                                                                
                                                            </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- Basic Inputs Validation end -->
                                                
                                    </div>
              <div id="styleSelector">

                                </div>
                            </div>
                        </div>
                    </div>
</body>
<script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>
<?php $this->load->view("master/_partials/js.php")?>
<?php if ($this->session->flashdata('success')): ?>
                                                      <script> 
                                                        swal("Good Job!","<?php echo $this->session->flashdata('success') ?>","success");
                                                      </script>
                                                    <?php endif; ?>
</html>
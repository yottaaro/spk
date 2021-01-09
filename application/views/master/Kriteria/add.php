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
                                                                <label for="kode" class="col-sm-2 col-form-label">nama_Kriteria</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="nama_Kriteria"
                                                                         placeholder="Text Input Validation" required>
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">status_Nilai</label>
                                                                <div class="col-sm-10">
                                                                <select id="sales" name="status_Nilai"  class="form-control" required>
                                                                    <option value="" >Pilih Status Nilai</option>
                                                                 <option value="-1">Negatif</option>
                                                                 <option value="1">Positif</option>
                                                                </select>
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">sifat_Kriteria</label>
                                                                <div class="col-sm-10">
                                                                <select id="sales" name="sifat_Kriteria"  class="form-control" required>
                                                                    <option value="" >Pilih Sifat Kriteria</option>
                                                                    <option value="0">Pengisian (Tidak Punya Sub Kriteria)</option>
                                                                    <option value="1">Pilihan (Adanya Sub Kriteria)</option>
                                                                </select>
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Nilai bobot</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" name="bobot"
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

<?php $this->load->view("master/_partials/js.php")?>
<?php if ($this->session->flashdata('success')): ?>
                                                      <script> 
                                                        swal("Good Job!","<?php echo $this->session->flashdata('success') ?>","success");
                                                      </script>
                                                    <?php endif; ?>
</html>
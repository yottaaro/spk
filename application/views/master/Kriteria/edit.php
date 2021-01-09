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
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Edit Data Mustahik</h5>
                                                        <span>Harap mengisi Dengan Benar </span>

                                                    </div>
                                                            
                                                            
                                                            
                                                    <div class="card-block">
                                                    <form action="<?php base_url('master/pasien/pendaftaran') ?>" id="f" method="post" enctype="multipart/form-data" >
                                                            <div class="form-group row">
                                                                <label for="kode" class="col-sm-2 col-form-label">nama_Kriteria</label>
                                                                <input type="hidden" name="id" value="<?php echo $dataedit->id ?>" >
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="nama_Kriteria"
                                                                         placeholder="Text Input Validation" value="<?php echo $dataedit->nama_Kriteria ?>" required>
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">status_Nilai</label>
                                                                <div class="col-sm-10">
                                                                <select id="sales" name="status_Nilai"  class="form-control" required>
                                                                
                                                                    <option value="<?php echo $dataedit->status_Nilai; ?>" ><?php
                                                                 if ($dataedit->status_Nilai == 1) {
                                                                     echo "Positif";
                                                                 }else {
                                                                    echo "Negatif";
                                                                 }

                                                                ?></option>
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
                                                                    <option value="<?php echo $dataedit->sifat_Kriteria; ?>" >
                                                                    <?php
                                                                       if ($dataedit->sifat_Kriteria == 1) {
                                                                        echo "Pilihan (Adanya Sub Kriteria)";
                                                                    }else {
                                                                       echo "Pengisian (Tidak Punya Sub Kriteria)";
                                                                    }
                                                                    ?>  
                                                                    
                                                                    </option>
                                                                    <option value="0">Pengisian (Tidak Punya Sub Kriteria)</option>
                                                                    <option value="1">Pilihan (Adanya Sub Kriteria)</option>
                                                                </select>
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">bobot</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="bobot" value="<?php echo $dataedit->bobot?>"
                                                                         placeholder="" required>
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-group row">
                                                                <label class="col-sm-2"></label>
                                                                <div class="col-sm-10">
                                                                <button type="submit" name="edit" class="btn btn-primary m-b-0">Submit</button>
                                                               
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
                

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
</body>
<?php $this->load->view("master/_partials/js.php")?>
<?php if ($this->session->flashdata('success')): ?>
                                                      <script> 
                                                        swal("Good Job!","<?php echo $this->session->flashdata('success') ?>","success");
                                                      </script>
                                                    <?php endif; ?>
</html>
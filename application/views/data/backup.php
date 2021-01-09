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
                                                        <h5>Back Up Database</h5>
                                                        <span><?php echo date('Y-m-d'); ?> </span>
                                                       
                                                    </div>
                                                    <div class="card-block">
                                                    <a href="<?php echo site_url('data/backup/backup'); ?>"><button class="btn btn-primary btn-outline-primary btn-block"><i class="icofont icofont-user-alt-3"></i>Backup</button></a>
                                                    <p>*File DataBase Didwonload</p>    
                                                </div>
                                                </div>
                                                <!-- Basic Inputs Validation end -->
                                    </div>
              <div id="styleSelector">

                                </div>
                            </div>
                        </div>
                    </div>->
    <!-- Required Jquery -->
</body>
<?php $this->load->view("master/_partials/js.php")?>
<?php if ($this->session->flashdata('success')): ?>
                                                      <script> 
                                                        swal("Good Job!","<?php echo $this->session->flashdata('success') ?>","success");
                                                      </script>
                                                    <?php endif; ?>
</html>
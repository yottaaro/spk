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

                                    <div class="page-body">
                                        <div class="row">
                                            <!-- task, page, download counter  start -->
                                           
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-green update-card">
                                                <a href="">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-8">
                                                                <h4 class="text-white"><?php echo $Alternatif->hasil; ?></h4>
                                                                <h6 class="text-white m-b-0">Alternatif</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <canvas id="update-chart-2" height="50"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <p class="text-white m-b-0"><i
                                                                class="feather icon-clock text-white f-14 m-r-10"></i><?php echo date('d-m-Y') ?></p>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-pink update-card">
                                                <a href="">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-8">
                                                                <h4 class="text-white"><?php echo $Kriteria->hasil; ?></h4>
                                                                <h6 class="text-white m-b-0">Kriteria</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <canvas id="update-chart-3" height="50"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                    <p class="text-white m-b-0"><i
                                                                class="feather icon-clock text-white f-14 m-r-10"><?php echo date('d-m-Y') ?></i></p>
                                                    </div> </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-lite-green update-card">
                                                <a href="">
                                                    <div class="card-block">
                                                        <div class="row align-items-end">
                                                            <div class="col-8">
                                                                <h4 class="text-white"><?php echo $SubKriteria->hasil; ?></h4>
                                                                <h6 class="text-white m-b-0">Sub Kriteria</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <canvas id="update-chart-4" height="50"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                    <p class="text-white m-b-0"><i
                                                                class="feather icon-clock text-white f-14 m-r-10"></i><?php echo date('d-m-Y') ?></p>
                                                    </div> </a>
                                                    </div>
                                                

                                            
                                            </div>
                                            
                                            


                                <div id="styleSelector">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<?php $this->load->view("master/_partials/js.php")?>
</html>
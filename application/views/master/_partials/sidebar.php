<?php
         
           if($this->session->userdata('status') != "login"){
			redirect(site_url("login"));
        }?>
            
 <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class=" <?php echo $this->uri->segment(2) == '' ? 'active': '' ?> pcoded-trigger">
                                    <a href="dashboard">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>
                                   
                                </li>
                                
                            </ul>
                            <div class="pcoded-navigatio-lavel">Master Element</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu <?php echo $this->uri->segment(1) == 'master' ? 'active pcoded-trigger ': '' ?> ">
                                    <a href="javascript:void(0) ">
                                        <span class="pcoded-micon "><i class="feather icon-box" ></i></span>
                                        <span class="pcoded-mtext ">Form  Master</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                    <li class=" pcoded-hasmenu <?php echo $this->uri->segment(2) == 'Mustahik' ? 'active pcoded-trigger ': '' ?> <?php echo $this->uri->segment(2) == 'agen' ? 'active': '' ?> ">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext">Mustahik</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="<?php echo $this->uri->segment(2) == 'Mustahik' && $this->uri->segment(3) <> 'tambah' ? 'active': '' ?>">
                                                    <a href="<?php echo site_url('master/Mustahik') ?>">
                                                        <span class="pcoded-mtext">Lihat Data Mustahik</span> 
                                                       
                                                    </a>
                                                </li>
                                                <li class="<?php echo $this->uri->segment(2) == 'Mustahik' && $this->uri->segment(3) == 'tambah' ? 'active': '' ?>">
                                                    <a href="<?php echo site_url('master/Mustahik/tambah') ?>">
                                                        <span class="pcoded-mtext">Input Data Mustahik</span>
                                                    </a>
                                                </li>
                                            
                                            </ul>
                                        </li>
                                        <li class=" pcoded-hasmenu <?php echo $this->uri->segment(2) == 'Kriteria' ? 'active pcoded-trigger ': '' ?> <?php echo $this->uri->segment(2) == 'obat' ? 'active': '' ?> ">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext">Kriteria</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="<?php echo $this->uri->segment(2) == 'Kriteria' && $this->uri->segment(3) <> 'tambah' ? 'active': '' ?>">
                                                    <a href="<?php echo site_url('master/Kriteria') ?>">
                                                        <span class="pcoded-mtext">Lihat Data Kriteria</span>
                                                    </a>
                                                </li>
                                                <!-- <li class="<?php echo $this->uri->segment(2) == 'Kriteria' && $this->uri->segment(3) == 'tambah' ? 'active': '' ?>">
                                                    <a href="<?php echo site_url('master/Kriteria/tambah') ?>">
                                                        <span class="pcoded-mtext">Input Data Kriteria</span>
                                                    </a>
                                                </li> -->
                                            
                                            </ul>
                                        </li>
                                        <li class="pcoded-hasmenu <?php echo $this->uri->segment(2) == 'SubKriteria' ? 'active pcoded-trigger ': '' ?> <?php echo $this->uri->segment(2) == 'petugas' ? 'active': '' ?> ">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext">Sub Kriteria</span>
                                            </a>
                                            <ul class="pcoded-submenu ">
                                                <li class=" <?php echo $this->uri->segment(2) == 'SubKriteria' ? 'active pcoded-trigger': '' ?> ">
                                                    <a href="<?php echo site_url('master/SubKriteria') ?>">
                                                        <span class="pcoded-mtext">Kelola Data </span>
                                                    </a>
                                                </li>
                                                
                                            
                                            </ul>
                                        </li>
                                        

                                       
                                     
                                       
                                    </ul>
                                </li>
                             
                            </ul>
                            <div class="pcoded-navigatio-lavel">Perhitungan Keputusan</div>
                            <ul class="pcoded-item pcoded-left- item">
                               
                                <li class="  <?php echo $this->uri->segment(2) == 'Perhitungan' ? 'active pcoded-trigger': '' ?>  ">
                                    <a href="<?php echo site_url('Perhitungan/Input') ?>">
                                        <span class="pcoded-micon"><i class="feather icon-edit"></i></span>
                                        <span class="pcoded-mtext">Kelola Nilai</span>
                                        <span class="pcoded-badge label label-warning">Input</span>
                                    </a>
                                </li>
                                <li class="<?php echo $this->uri->segment(2) == 'Perhitungan' ? 'active pcoded-trigger': '' ?> ">
                                    <a href="<?php echo site_url('Perhitungan/rangking') ?>">
                                        <span class="pcoded-micon"><i class="feather icon-credit-card"></i></span>
                                        <span class="pcoded-mtext">Lihat Ranking</span>
                                    </a>
                                </li>
                            </ul>
                           
                            <div class="pcoded-navigatio-lavel">Kelola Laporan</div>
                            <ul class="pcoded-item pcoded-left-item">
                               
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
                                        <span class="pcoded-mtext">Cetak Laporan</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="<?php echo site_url('laporan/laporan') ?>">
                                                <span class="pcoded-mtext">Pilih Laporan</span>
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </li>
                                
                               
                               
                               
                            </ul>
                           
                          
                            
                        </div>
                    </nav>


            <?php
       // }
      
?>


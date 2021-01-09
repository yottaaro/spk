<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view("master/_partials/head.php")?>
</head>
<body>
  <!-- wather user -->
   
                                            <div class="col-xl-6 col-md-12">
                                                <div class="card user-card-full">
                                                    <div class="row m-l-0 m-r-0">
                                                        <div class="col-sm-4 bg-c-lite-green user-profile">
                                                            <div class="card-block text-center text-white">
                                                                <div class="m-b-25">
                                                                    <img width="180px" height=180px; src="<?php echo base_url('assets/logo.png')?>" class="img-radius" alt="User-Profile-Image">
                                                                </div>
                                                                
                                                                <i class="feather icon-edit m-t-10 f-16"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="card-block">
                                                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information Pasien</h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Nama</p>
                                                                        <h6 class="text-muted f-w-400">
                                                                          <a class="__cf_email__" >[&#160;<?php echo $dataedit->nama;?>]</a></h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Telepon</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $dataedit->tlp;?></h6>
                                                                    </div>
                                                                </div>
                                                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Location</h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Alamat</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $dataedit->alamat;?></h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Kode Pasien</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $dataedit->kd_pasien;?></h6>
                                                                    </div>
                                                                </div>
                                                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook"><i class="feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter"><i class="feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram"><i class="feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#!">@klinikmedika</a></li>
                                                                
                                                                  </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- wather user -->
</body>
<?php $this->load->view("master/_partials/js.php")?>
<script>
window.print();
</script>
</html>
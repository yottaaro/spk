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
                                                    <h5>Perangkingan</h5>
                                                </div>
                                               
                                                    </div>
                                                    
                                                    <div class="card-block">
                                                  
                                                    <div class="dt-responsive table-responsive">
                                                            <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                    
                                                                        <th>Kode Mustahik</th>
                                                                        <th>Nama Mustahik</th>
                                                                        <?php
                                                                            foreach ($Kriteria as $data):
                                                                            ?>
                                                                             <th><?php echo $data->nama_Kriteria ?></th>
                                                                            <?php
                                                                            endforeach;
                                                                        ?>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                           
                                                            <?php 
                                                            $nomor = 0;
                                                            
                                                            foreach ($Alternatif as $data){
                                                            $nomor++;
                                                            ?>
                                                                <tr id="deletedataku">
                                                                <td>
                                                                     <?php echo $data->kode_Mustahik?>
                                                                     </td>
                                                                     <td>
                                                                     <?php echo $data->nama?>
                                                                     </td>
                                                                     
                                                                                         <?php //perhitungan
                                                                                        foreach ($Kriteria as $dataku){
                                                                                            $valueDefault = $ModelView->getByid_Sub2($data->kode_Mustahik,$dataku->id);
                                                                                                        if ($dataku->sifat_Kriteria == 1 ) {
                                                                                                        //load model->controler and subtrack in view
                                                                                                        $dataSelect = $ModelView->getByid_Sub($dataku->id);
                                                                                                        foreach ($valueDefault as $valueDefaultView) { 
                                                                                                         }
                                                                                                         ?>
                                                                                                                        <td>
                                                                                                                                <select disabled onchange="input('<?php echo $data->kode_Mustahik ?>','<?php echo $dataku->id ?>','<?php echo $data->kode_Mustahik;
                                                                                                                                    echo $dataku->id ?>')"id="<?php echo $data->kode_Mustahik; echo $dataku->id?>"  class="form-control-sm" required>
                                                                                                                                   <?php foreach ($valueDefault as $valueDefaultView) { 
                                                                                                                                       $dataNilai = $ModelView->getValuedefaultSelect($valueDefaultView->nilai,$dataku->id);
                                                                                                                                       ?>
                                                                                                                                   <option value="<?php echo $valueDefaultView->nilai;?>">
                                                                                                                                   <?php } 
                                                                                                                                        if (empty($dataNilai)) {
                                                                                                                                            echo $valueDefaultView->nilai;
                                                                                                                                        }else {
                                                                                                                                            foreach ($dataNilai as $dataNilaiView) {
                                                                                                                                                echo $dataNilaiView->nama_Pilihan;
                                                                                                                                            }
                                                                                                                                           
                                                                                                                                        }
                                                                                                                                    ?>
                                                                                                                                    </option>
                                                                                                                                   
                                                                                                                                   
                                                                                                                                   
                                                                                                                                   
                                                                                                                                   
                                                                                                                                   
                                                                                                                                            
                                                                                                                                </select>
                                                                                                                        </td>
                                                                                                        
                                                                                                    <?php }else {
                                                                                                            //tampilkan pengisian
                                                                                                            //loadView else?>
                                                                                                                            <td>
                                                                                                                                    <?php 
                                                                                                                                    foreach ($valueDefault as $dataview) {
                                                                                                                                        echo $dataview->nilai;
                                                                                                                                    }?>
                                                                                                                            </td>
                                                                                                       
                                                                                                    <?php 
                                                                                                    }
                                                                                                }?>
                                                                    



                                                                </tr>
                                                               <?php } ?>
                                                        </tbody>
                                                                <tfoot>
                                                                <tr>
                                                                         <th>Kode Mustahik</th>
                                                                        <th>Nama Mustahik</th>
                                                                        <?php
                                                                            foreach ($Kriteria as $data):
                                                                            ?>
                                                                             <th><?php echo $data->nama_Kriteria ?></th>
                                                                            <?php
                                                                            endforeach;
                                                                        ?>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                       
                                                        <br><br>
                                                        <br>
                                                        <div>
                                                        <h5>DataSet </h5>
                                                        </div>
                                                        <br><br>
                                                        <div class="table-responsive -sm">
                                                        <table class="table table-hover table-sm">
                                                                <thead>
                                                                    <tr>
                                                                    
                                                                        <th>Kode Mustahik</th>
                                                                        <th>Nama Mustahik</th>
                                                                        <?php //table2
                                                                            foreach ($Kriteria as $data):
                                                                            ?>
                                                                             <th><?php echo $data->nama_Kriteria ?></th>
                                                                            <?php
                                                                            endforeach;
                                                                        ?>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                           
                                                            <?php 
                                                            $nomor = 0;
                                                            
                                                            foreach ($Alternatif as $data){
                                                            $nomor++;
                                                            ?>
                                                                <tr id="deletedataku">
                                                                    <td>
                                                                     <?php echo $data->kode_Mustahik?>
                                                                     </td>
                                                                     <td>
                                                                     <?php echo $data->nama?>
                                                                     </td>
                                                                     
                                                                                         <?php //perhitungan
                                                                                        foreach ($Kriteria as $dataku){
                                                                                            $valueDefault = $ModelView->getByid_Sub2($data->kode_Mustahik,$dataku->id);
                                                                                            $dataSelect = $ModelView->getByid_Sub($dataku->id);
                                                                                                        
                                                                                                         ?>
                                                                                                     <td>
                                                                                                                        <?php foreach ($valueDefault as $valueDefaultView) { 
                                                                                                                          //$dataNilai = $ModelView->getValuedefaultSelect($valueDefaultView->nilai,$dataku->id);
                                                                                                                           echo $valueDefaultView->nilai;
                                                                                                                             }?>
                                                                                                    </td>
                                                                                                        
                                                                                                    <?php 
                                                                                                }?>
                                                                </tr>
                                                               <?php } ?>
                                                        </tbody>
                                                                <tfoot>
                                                                <tr>
                                                                         <th>Kode Mustahik</th>
                                                                        <th>Nama Mustahik</th>
                                                                        <?php
                                                                            foreach ($Kriteria as $data):
                                                                            ?>
                                                                             <th><?php echo $data->nama_Kriteria ?></th>
                                                                            <?php
                                                                            endforeach;
                                                                        ?>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    


                                                    <br>
                                                    <br>
                                                        <br>
                                                        <div>
                                                        <h5>Mencari Vektor S Dan V </h5>
                                                        </div>
                                                        <br><br>
                                                        <div class="table-responsive -sm">
                                                        <table class="table table-hover table-sm">
                                                                <thead>
                                                                    <tr>
                                                                    
                                                                        <th>Kode Mustahik</th>
                                                                        <th>Nama Mustahik</th>
                                                                        <?php //table3
                                                                            foreach ($Kriteria as $data):
                                                                            ?>
                                                                             <th><?php echo $data->nama_Kriteria ?></th>
                                                                            <?php
                                                                            endforeach;
                                                                        ?>
                                                                         <th>Nilai S </th>
                                                                         <th>Nilai V </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                           
                                                            <?php 


                                                            $nowApps= 0;
                                                            foreach ($Alternatif as $data){
                                                                $Stotal = 1;
                                                                foreach ($Kriteria as $dataku){
                                                                    $valueDefault = $ModelView->getByid_Sub2($data->kode_Mustahik,$dataku->id);   
                                                                    foreach ($valueDefault as $valueDefaultView) { 
                                                                        $stotalDummy = pow($valueDefaultView->nilai,$dataku->perbaikan_Bobot) ;
                                                                        $Stotal = $Stotal * $stotalDummy;
                                                                          }
                                                                }
                                                                $nowApps = $nowApps + $Stotal ;
                                                            }

                                                            $nomor = 0;
                                                            $colom = 0;
                                                            $vtotal = 0;
                                                            $stotalAll = 0;
                                                            
                                                            foreach ($Alternatif as $data){
                                                                $Stotal = 1;
                                                            $nomor++;
                                                            $colom = 0;
                                                            ?>
                                                                <tr id="deletedataku">
                                                                    <td>
                                                                     <?php echo $data->kode_Mustahik?>
                                                                     </td>
                                                                     <td>
                                                                     <?php echo $data->nama?>
                                                                     </td>
                                                                     
                                                                     <?php //perhitungan
                                                                                        foreach ($Kriteria as $dataku){

                                                                                            $colom++;
                                                                                            $valueDefault = $ModelView->getByid_Sub2($data->kode_Mustahik,$dataku->id);   
                                                                                                         ?>
                                                                                                    <td>
                                                                                                                        <?php foreach ($valueDefault as $valueDefaultView) { 
                                                                                                                           $stotalDummy = pow($valueDefaultView->nilai,$dataku->perbaikan_Bobot) ;
                                                                                                                           echo $stotalDummy;
                                                                                                                           $Stotal = $Stotal * $stotalDummy;
                                                                                                                             }?>
                                                                                                    </td>
                                                                                                        
                                                                                                    <?php 
                                                                                                }?>
                                                                <td>

                                                                <?php echo $Stotal;
                                                                $stotalAll = $stotalAll + $Stotal;
                                                                
                                                                ?>
                                                                
                                                                </td>
                                                                <td>
                                                                <?php 
                                                                $vtotal = $Stotal / $nowApps;
                                                                echo $vtotal;
                                                                ?>
                                                                
                                                                </td>
                                                                

                                                                </tr>
                                                                
                                                               <?php } ?>

                                                               <tr>
                                                               <td colspan="<?php echo $colom + 2; ?>" align="right">Total Vektor</td>
                                                               <td>
                                                               <?php echo $stotalAll; ?>
                                                               
                                                               </td>
                                                               
                                                               
                                                               
                                                               </tr>
                                                        </tbody>
                                                                <tfoot>
                                                                <tr>
                                                                         <th>Kode Mustahik</th>
                                                                        <th>Nama Mustahik</th>
                                                                        <?php
                                                                            foreach ($Kriteria as $data):
                                                                            ?>
                                                                             <th><?php echo $data->nama_Kriteria ?></th>
                                                                            <?php
                                                                            endforeach;
                                                                        ?>
                                                                        <th>Nilai S </th>
                                                                         <th>Nilai V </th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                

                                                    <br><br>
                                                        <br>
                                                        <div>
                                                        <h5>Hasil Perhitungan Mustahik</h5>
                                                        </div>
                                                        <br><br>
                                                        <div class="table-responsive -sm">
                                                        <table class="table table-hover table-sm">
                                                                <thead>
                                                                    <tr>
                                                                    <th>No</th>
                                                                        <th>Kode Mustahik</th>
                                                                        <th>Nama</th>
                                                                        <th>Nilai S</th>
                                                                        <th>Nilai V</th>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                           
                                                            <?php 
                                                            $nomor = 0;
                                                            
                                                            foreach ($Rankingbefore as $data){
                                                            $nomor++;
                                                            ?>
                                                                <tr>
                                                                        <td>
                                                                     <?php echo $nomor?>
                                                                     </td>
                                                                     
                                                                    <td>
                                                                     <?php echo $data->id_mustahik?>
                                                                     </td>
                                                                     <td>
                                                                     <?php echo $data->nama?>
                                                                     </td>
                                                                     <td>
                                                                     <?php echo $data->Nilai_S?>
                                                                     </td>
                                                                     <td>
                                                                     <?php echo $data->nilai_V ?>
                                                                     </td>
                                                                 </tr>
                                                                 <?php
                                                            }
                                                                 ?>
                                                            </tbody>
                                                                <tfoot>
                                                                <tr>
                                                                <th>No</th>
                                                                <th>Kode Mustahik</th>
                                                                <th>Nama</th>
                                                                        <th>Nilai S</th>
                                                                        <th>Nilai V</th>
                                                                        
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                            <br><br>
                                                        <br>
                                                        <div>
                                                        <h5>Hasil Perankingan Mustahik</h5>
                                                        </div>
                                                        <br><br>
                                                        <div class="table-responsive -sm">
                                                        <table class="table table-hover table-sm">
                                                                <thead>
                                                                    <tr>
                                                                    <th>No</th>
                                                                        <th>Kode Mustahik</th>
                                                                        <th>Nama</th>
                                                                        <th>Nilai S</th>
                                                                        <th>Nilai V</th>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                           
                                                            <?php 
                                                            $nomor = 0;
                                                            
                                                            foreach ($Ranking as $data){
                                                            $nomor++;
                                                            ?>
                                                                <tr>
                                                                        <td>
                                                                     <?php echo $nomor?>
                                                                     </td>
                                                                    <td>
                                                                     <?php echo $data->id_mustahik?>
                                                                     </td>
                                                                     <td>
                                                                     <?php echo $data->nama?>
                                                                     </td>
                                                                     <td>
                                                                     <?php echo $data->Nilai_S?>
                                                                     </td>
                                                                     <td>
                                                                     <?php echo $data->nilai_V ?>
                                                                     </td>
                                                                 </tr>
                                                                 <?php
                                                            }
                                                                 ?>
                                                            </tbody>
                                                                <tfoot>
                                                                <tr>
                                                                <th>No</th>
                                                                <th>Kode Mustahik</th>
                                                                <th>Nama</th>
                                                                        <th>Nilai S</th>
                                                                        <th>Nilai V</th>
                                                                        
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                            <p>Ket : Mustahik yang memiliki rangking pertama adalah yang paling berhak menerima zakat dan tersusun ke rangking seterusnya </p>











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

  
    

            <!-- Required Jquery -->
    <?php $this->load->view("master/_partials/js.php")?>

     
</body>
<script>


function input(kode_Mustahik='',id_Kriteria='',id_Dom='')
  { 
      var nilai = document.getElementById(id_Dom).value;
    $.ajax({
          url: "<?php echo site_url('Perhitungan/Input/SaveDom/')?>"+id_Kriteria,
          type: "post",
          dataType: 'text',
          data: {kode_Mustahik:kode_Mustahik,
                 id_Kriteria:id_Kriteria,
                 nilai:nilai},
          success:function(text){
             
         

         
          },
          error:function(){
            swal('Data gagal ', 'error');
          }
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
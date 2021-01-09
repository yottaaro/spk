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
                                                    <h5>Input Nilai Mustahik</h5>
                                                     <span>**Auto Save Haraf Mengisi dengan benar</span>
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
                                                                                                                                <select onchange="input('<?php echo $data->kode_Mustahik ?>','<?php echo $dataku->id ?>','<?php echo $data->kode_Mustahik;
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
                                                                                                                                   
                                                                                                                                   
                                                                                                                                   
                                                                                                                                   
                                                                                                                                   
                                                                                                                                    <?php foreach ($dataSelect as $outDataSelect) { ?>
                                                                                                                                        <option value="<?php echo $outDataSelect->nilai_Pilihan ?>"> <?php echo $outDataSelect->nama_Pilihan ?></option>
                                                                                                                                    <?php } ?> 
                                                                                                                                            
                                                                                                                                </select>
                                                                                                                        </td>
                                                                                                        
                                                                                                    <?php }else {
                                                                                                            //tampilkan pengisian
                                                                                                            //loadView else?>
                                                                                                                            <td>
                                                                                                                                    <input  type="number" onchange="input('<?php echo $data->kode_Mustahik ?>','<?php echo $dataku->id ?>','<?php echo $data->kode_Mustahik;
                                                                                                                                    echo $dataku->id ?>')" class="form-control-sm" 
                                                                                                                                    id="<?php echo $data->kode_Mustahik;
                                                                                                                                    echo $dataku->id?>" value="<?php 
                                                                                                                                    foreach ($valueDefault as $dataview) {
                                                                                                                                        
                                                                                                                                        echo $dataview->nilai;
                                                                                                                                    }?>" placeholder="" required>
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

            <!-- Required Jquery -->
    <?php $this->load->view("master/_partials/js.php")?>

     
</body>
<script>

function edit(id,nama_Pilihan='',nilai_Pilihan='',idkriteria=''){
   // id_sub	nama_Pilihan	nilai_Pilihan	id_Kritera
   //alert(id);
    document.getElementById("id_sub").value=id;
    document.getElementById("nama_Pilihan").value=nama_Pilihan;
    document.getElementById("nilai_Pilihan").value=nilai_Pilihan;
    document.getElementById("id_Kritera").value=idkriteria;
    
    $('#default-Modal1').modal();
}

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
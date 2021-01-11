<?php


function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);

 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Penerima Zakat</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bower_components\bootstrap\css\bootstrap.min.css')?>">
    <style>
        body{
            font-style : Times new roman;
            font-size:12pt;
        }
      
    </style>
</head>
<body>
    
<table width="100%"  style="text-align:center;">
        <tr>
            <td ><img src="<?php echo base_url('assets/images/logo.png')?>" style="width:130px; height:130px;"></td>
            <td style="text-align:center;">
                <span style="line-height: 1.6;">
                        <strong style="font-size:22pt;">SISTEM PENUNJANG KEPUTUSAN MENENTUKAN CALON PENERIMA ZAKAT  </strong>
                     
            </td>
        </tr>
    </table>
  <hr class="line-title">
  <p class="text-center">Laporan Perhitungan Keputusan Calon Penerima Zakat <?php $date = date("d-m-Y");
    echo tgl_indo($date);
    ?>  </p>
  <table class="table table-bordered table-sm"  width="100%">
    <thead>
    <th>Kode Mustahik</th>
    <th>Nama Mustahik</th>
    <?php
        foreach ($Kriteria as $data):
        ?>
            <th><?php echo $data->nama_Kriteria ?></th>
        <?php
        endforeach;
    ?>
        
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

</table>
<br><br><br>
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
<tr>
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
<br>


<h6>Data Mustahik Hasil Perankingan </h6>
</div>
<br><br>
<div class="table-responsive -sm">
<table class="table table-hover table-sm">
    <thead>
        <tr>
        <th>[rangking]</th>
            <th>Kode Mustahik</th>
            <th>Nama</th>
            <th>Alamat </th>
            <th>No Ktp </th>
            <th>No Hp </th>
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
            <?php echo $data->alamat?>
            </td>
            <td>
            <?php echo $data->no_ktp ?>
            </td>
            <td>
            <?php echo $data->tlp ?>
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
            <th>Alamat </th>
            <th>No Ktp </th>
            <th>No Hp </th>
            
        </tr>
    </tfoot>
</table>
<div>
<p>Ket : Mustahik yang memiliki rangking pertama adalah yang paling berhak menerima zakat dan tersusun ke rangking seterusnya </p>

</body>
<script>
window.print();
</script>
</html>
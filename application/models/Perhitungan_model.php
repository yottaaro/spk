<?php defined ('BASEPATH') OR exit(' No Direct Script access allowed');

class Perhitungan_model extends CI_model{
    private $_table = "tbl_evaluasi";
    public $id,$id_Kriteria,$kode_Mustahik,$nilai;
   
    public function rules(){
        return [
        ['field'=> 'nama_Kriteria',
             'label'=> 'nama_Kriteria',
             'rules' => 'required'
        ],
      
    ];
    }

    public function getKriteria()
    {
        $this->db->select('*');
        $this->db->from("tbl_kriteria");
        $query = $this->db->get();
        return $query->result();
    }
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from("tbl_evaluasi");
        $query = $this->db->get();
        return $query->result();
    }
    public function getAlternatif()
    {
        $this->db->select('*');
        $this->db->from("alternatif");
        $query = $this->db->get();
        return $query->result();
    }
    
   
    public function nilaiDefault(){
        $dataDumyAlternatif = $this->getAlternatif();
        $dataDumyKriteria = $this->getKriteria();
        foreach ($dataDumyAlternatif as $dataAlternatif){
            foreach ($dataDumyKriteria as $dataKriteria) {
                $query = $this->db->query("SELECT * from tbl_evaluasi where id_Kriteria = '$dataKriteria->id' and kode_Mustahik = '$dataAlternatif->kode_Mustahik'")->row();
                
                // $cari = $this->db->query("SELECT * from t_retur where darinota = '$kode' ")->row();
                if (empty($query)) {
                    //save default
                    //this->db->query("INSERT INTO detailretur(koderetur,idbuku,jumlah,status,keterangan) values ('$kode','$idbuku','$jumlah','$status','$keterangan') ");
                    $queryInsert = $this->db->query("INSERT INTO tbl_evaluasi (id_Kriteria,kode_Mustahik,nilai)  values ('$dataKriteria->id','$dataAlternatif->kode_Mustahik','0')");
                }
            }
        }
        $this->db->select('*');
        $this->db->from("tbl_evaluasi");
        $queryReturn = $this->db->get();
        return $queryReturn->result();
    }

    public function getByid_Sub($id){
      
        $this->db->select('*');
        $this->db->from("sub_kriteria");
        $this->db->where("id_Kritera = '$id' ");
        $query = $this->db->get();
        return $query->result();
       
    }
    public function getByid_Sub2($kode_Mustahik,$id){
      
        $this->db->select('*');
        $this->db->from("tbl_evaluasi");
        $this->db->where("kode_Mustahik = '$kode_Mustahik' and id_Kriteria = '$id' ");
        $query = $this->db->get();
        return $query->result();
       
    }
   public function saveDom(){
    
    $kode_Mustahik = $this->input->post("kode_Mustahik");
    $id_Kriteria= $this->input->post("id_Kriteria");
    $nilai = $this->input->post("nilai");
  
    $this->db->query("UPDATE tbl_evaluasi SET nilai = '$nilai' where id_Kriteria='$id_Kriteria' and kode_Mustahik = '$kode_Mustahik'");
   }
   public function HitungDefault(){
    
    $this->db->query("Delete from nilai");
    //input

    //ulang .
    $nowApps= 0;
    $Stotal = 0;
    $StotalAll = 0;
    $Alternatif = $this->getAlternatif();
    $Kriteria = $this->getKriteria();
    $vektorV = 0;
    foreach ($Alternatif as $data){
        $Stotal = 1;
        foreach ($Kriteria as $dataku){
            $valueDefault = $this->getByid_Sub2($data->kode_Mustahik,$dataku->id);   
            foreach ($valueDefault as $valueDefaultView) { 
                $stotalDummy = pow($valueDefaultView->nilai,$dataku->perbaikan_Bobot) ;
                $Stotal = $Stotal * $stotalDummy;
                  }
        }
        $nowApps = $nowApps + $Stotal ;
    }
    //insert
    foreach ($Alternatif as $data){
        $Stotal = 1;
        foreach ($Kriteria as $dataku){
            $valueDefault = $this->getByid_Sub2($data->kode_Mustahik,$dataku->id);   
            foreach ($valueDefault as $valueDefaultView) { 
                $stotalDummy = pow($valueDefaultView->nilai,$dataku->perbaikan_Bobot) ;
                $Stotal = $Stotal * $stotalDummy;
                  }
        }
        $StotalAll = $StotalAll + $Stotal ;
        $vektorV =  $Stotal / $nowApps ;
         $queryInsert = $this->db->query("INSERT INTO nilai (id_mustahik,Nilai_S,nilai_V)  values ('$data->kode_Mustahik','$Stotal',$vektorV)");
        
    }

    
   }

   public function getRanking(){
    $query = $this->db->query("SELECT * FROM nilai inner join alternatif on alternatif.kode_Mustahik = nilai.id_mustahik ORDER BY nilai.nilai_V DESC");
    return $query->result();
}
public function getRankingbefore(){
    $query = $this->db->query("SELECT * FROM nilai inner join alternatif on alternatif.kode_Mustahik = nilai.id_mustahik");
    return $query->result();
}

    public function getValuedefaultSelect($nilai,$id){
        $this->db->select('*');
        $this->db->from("sub_kriteria");
        $this->db->where("nilai_Pilihan = '$nilai' and id_Kritera = '$id' ");
        $query = $this->db->get();
        return $query->result();
    }

   
    

}
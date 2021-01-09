<?php defined ('BASEPATH') OR exit(' No Direct Script access allowed');

class dashboard_model extends CI_model{
    

    public function jumlahmustahik()
    {
       
        $query = $this->db->query('SELECT COUNT(kode_Mustahik) as hasil FROM alternatif')->row();
        return $query;
    }
    public function jumlahsubkriteria(){
       
        $query =  $this->db->query('SELECT COUNT(id_sub) as hasil FROM sub_kriteria');
        return $query->row();
    }
    

    public function jumlahkriteria(){
        $query = $this->db->query("SELECT COUNT(id) as hasil FROM tbl_kriteria")->row();
        return $query;
    }
}
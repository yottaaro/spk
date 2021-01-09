<?php defined ('BASEPATH') OR exit(' No Direct Script access allowed');

class restore_model extends CI_model{
   
    public function hapusdb(){
        $this->db->query("Drop table tbl_evaluasi");	 				
        $this->db->query("Drop table sub_kriteria");	
        $this->db->query("Drop table tbl_kriteria");	
        $this->db->query("Drop table alternatif");	
        $this->db->query("Drop table nilai ");
        $this->db->query("Drop table  pengguna");
       
    }
    }
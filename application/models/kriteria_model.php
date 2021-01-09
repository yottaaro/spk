<?php defined ('BASEPATH') OR exit(' No Direct Script access allowed');

class Kriteria_model extends CI_model{
    private $_table = "tbl_kriteria";
    public $id,	$nama_Kriteria,	$status_Nilai,	$sifat_Kriteria,	$bobot,	$perbaikan_Bobot;

   
    
    public function rules(){
        return [
        ['field'=> 'nama_Kriteria',
             'label'=> 'nama_Kriteria',
             'rules' => 'required'
        ],
      
    ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from("tbl_kriteria");
      
        $query = $this->db->get();
        return $query->result();
    }
   

    public function getByid($id){
      
        $this->db->select('*');
        $this->db->from("tbl_kriteria");
        $this->db->where("id = '$id' ");
        $query = $this->db->get();
        return $query->row();
       
    }
  
    public function save(){
        $post = $this->input->post();
       
     

        $this->nama_Kriteria= $post["nama_Kriteria"];
        $this->status_Nilai = $post["status_Nilai"];
        $this->sifat_Kriteria = $post["sifat_Kriteria"];
        $this->bobot = $post["bobot"];
        $this->perbaikan_Bobot= 0;
      
        $this->db->insert($this->_table, $this);

        $SqlsigmaBobot = $this->db->query("SELECT SUM(bobot) as bobot from tbl_kriteria")->row();
        $sigmaBobot = $SqlsigmaBobot->bobot;
        $this->db->query("UPDATE tbl_kriteria SET perbaikan_Bobot = (bobot / $sigmaBobot ) * status_Nilai ");
    }

    public function edit(){
       
        $post = $this->input->post();
        $this->id= $post["id"];
        $this->nama_Kriteria= $post["nama_Kriteria"];
        $this->status_Nilai = $post["status_Nilai"];
        $this->sifat_Kriteria = $post["sifat_Kriteria"];
        $this->bobot = $post["bobot"];
        $this->perbaikan_Bobot= 0;
        $this->db->update($this->_table, $this,array('id'=> $post['id']));

        $SqlsigmaBobot = $this->db->query("SELECT SUM(bobot) as bobot from tbl_kriteria")->row();
        $sigmaBobot = $SqlsigmaBobot->bobot;  
        $this->db->query("UPDATE tbl_kriteria SET perbaikan_Bobot = (bobot / $sigmaBobot ) * status_Nilai ");
    }
    public function delete($id){
        $id = $this->input->post("id");
        $this->db->delete($this->_table, array("id"=> $id));

        $SqlsigmaBobot = $this->db->query("SELECT SUM(bobot) as bobot from tbl_kriteria")->row();
        $sigmaBobot = $SqlsigmaBobot->bobot;
        $this->db->query("UPDATE tbl_kriteria SET perbaikan_Bobot = (bobot / $sigmaBobot ) * status_Nilai ");
    }

}
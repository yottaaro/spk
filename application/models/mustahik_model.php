<?php defined ('BASEPATH') OR exit(' No Direct Script access allowed');

class Mustahik_model extends CI_model{
    private $_table = "alternatif";
    public $kode_Mustahik,	$nama,	$tempat_Lahir,	$tanggal_Lahir,	$alamat,	$jenis_kelamin,	$no_ktp,$pekerjaan,	$jabatan_pekerjaan,	$tlp;

   
    
    public function rules(){
        return [
        ['field'=> 'nama',
             'label'=> 'nama',
             'rules' => 'required'
        ],
      
    ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from("alternatif");
      
        $query = $this->db->get();
        return $query->result();
    }
    
    public function getkode(){
        $cari = $this->db->query("SELECT max(kode_Mustahik) as kode from alternatif")->row();
        $data = $cari;
        $nourut = (int) substr($data->kode, 4, 3);
        $nourut++;
        $char="KMZ-";
        $masukan = $char .sprintf("%03s", $nourut);
        return $masukan;
    }
    

    public function getByid($id){
      
        $this->db->select('*');
        $this->db->from("alternatif");
        $this->db->where("kode_Mustahik = '$id' ");
        $query = $this->db->get();
        return $query->row();
       
    }
  
    public function save(){
        $post = $this->input->post();
       
       // $kode_Mustahik,	$nama,	$tempat_Lahir,	$tanggal_Lahir,	$alamat,	$jenis_kelamin,	$no_ktp,	$pekerjaan,	$jabatan_pekerjaan,	$tlp;
        $this->kode_Mustahik = $post["kode_Mustahik"];
        $this->nama = $post["nama"];
        $this->tempat_Lahir = $post["tempat_Lahir"];
        $this->tanggal_Lahir = $post["tanggal_Lahir"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->alamat = $post["alamat"];
        $this->no_ktp= $post["no_ktp"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->jabatan_pekerjaan= $post["jabatan_pekerjaan"];
        $this->tlp = $post["tlp"];
      
        $this->db->insert($this->_table, $this);
       
    }

    public function edit(){
       
        $post = $this->input->post();
        $this->kode_Mustahik = $post["kode_Mustahik"];
        $this->nama = $post["nama"];
        $this->tempat_Lahir = $post["tempat_Lahir"];
        $this->tanggal_Lahir = $post["tanggal_Lahir"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->alamat = $post["alamat"];
        $this->no_ktp = $post["no_ktp"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->jabatan_pekerjaan= $post["jabatan_pekerjaan"];
        $this->tlp = $post["tlp"];
      
        $this->db->update($this->_table, $this,array('kode_Mustahik'=> $post['kode_Mustahik']));
    }
    public function delete($id){
        $id = $this->input->post("id");
        return $this->db->delete($this->_table, array("kode_Mustahik"=> $id));
    }

}
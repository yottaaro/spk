<?php defined ('BASEPATH') OR exit(' No Direct Script access allowed');

class Pengguna_model extends CI_model{
    private $_table = "pengguna";
   
    public $id_Pengguna,$nama_Pengguna,	$username,	$password , $hakakses;
    
    public function rules(){
        return [
        ['field'=> 'nama_Pengguna',
             'label'=> 'nama_Pengguna',
             'rules' => 'required'
        ],
      
    ];
    }

    public function getAll()
    {
        $this->db->select('*');
            $this->db->from("Pengguna");
           $query = $this->db->get();
            return $query->result();
        
    }
    
    
    public function getByid($id){
        return $this->db->get_where($this->_table,["id_Pengguna" => $id])->row();
    }
    public function getAll_kriteria()
    {
        $this->db->select('*');
        $this->db->from("tbl_kriteria");
        $this->db->where("sifat_Kriteria <> 0");
      
        $query = $this->db->get();
        return $query->result();
    }
  
    public function save(){
        $post = $this->input->post();
        $this->nama_Pengguna = $post["nama_Pengguna"];
        $this->username = $post["username"];
        $this->password = md5($post["password"]);
        $this->hakakses = $post["hakakses"];
        $this->db->insert($this->_table, $this);
    }

    public function edit(){
        $post = $this->input->post();
        
        $id_Pengguna = $post["id_Pengguna"];
        $nama_Pengguna = $post["nama_Pengguna"];
        $username = $post["username"];
        $hakakses = $post["hakakses"];
        $this->db->query("UPDATE pengguna SET nama_Pengguna  = '$nama_Pengguna',hakakses  = '$hakakses',username  = '$username' where id_Pengguna='$id_Pengguna'");
   
       
    }
    public function delete($id){
        return $this->db->delete($this->_table, array("id_Pengguna"=> $id));
    }
 
}
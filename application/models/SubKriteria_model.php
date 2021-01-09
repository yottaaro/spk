<?php defined ('BASEPATH') OR exit(' No Direct Script access allowed');

class SubKriteria_model extends CI_model{
    private $_table = "sub_kriteria";
   
    public $id_sub,	$nama_Pilihan,	$nilai_Pilihan,	$id_Kritera;
    
    public function rules(){
        return [
        ['field'=> 'nama_Pilihan',
             'label'=> 'nama_Pilihan',
             'rules' => 'required'
        ],
      
    ];
    }

    public function getAll()
    {
        $this->db->select('*');
            $this->db->from("sub_kriteria");
            $this->db->join('tbl_kriteria','tbl_kriteria.id=sub_kriteria.id_Kritera','order by sub_kriteria.id_Kritera ');
            $query = $this->db->get();
            return $query->result();
        
    }
    
    
    public function getByid($id){
        return $this->db->get_where($this->_table,["id_sub" => $id])->row();
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
        $this->nama_Pilihan = $post["nama_Pilihan"];
        $this->nilai_Pilihan = $post["nilai_Pilihan"];
        $this->id_Kritera = $post["id_Kritera"];
        $this->db->insert($this->_table, $this);
    }

    public function edit(){
        $post = $this->input->post();
        $this->id_sub = $post['id_sub'];
        $this->nama_Pilihan = $post["nama_Pilihan"];
        $this->nilai_Pilihan = $post["nilai_Pilihan"];
        $this->id_Kritera = $post["id_Kritera"];
        $this->db->update($this->_table, $this,array('id_sub'=> $post['id_sub']));
    }
    public function delete($id){
        return $this->db->delete($this->_table, array("id_sub"=> $id));
    }
 
}
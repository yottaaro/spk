<?php
  defined('BASEPATH') OR exit ('No direct script access allowed');

  class restore extends CI_Controller{
  
   
    public function __construct(){
      parent::__construct();
      $this->load->helper('url');
        $this->load->helper('file');
        $this->load->helper('download');
        $this->load->library('zip');
        $this->load->model("restore_model");
  }
    public function index(){
        $this->load->view("data/restore");
       }

       public function restore(){
        $model = $this->restore_model;
            //hapus dulu database jika proses restore gagal.
            $model->hapusdb();
            //upload dulu filenya
            $fupload = $_FILES['datafile'];
            $nama = $_FILES['datafile']['name'];
            if(isset($fupload)){
            $lokasi_file = $fupload['tmp_name'];
            $direktori="assets/database/restore/$nama";
            move_uploaded_file($lokasi_file,"$direktori");
            }

            //restore database
            $isi_file=file_get_contents($direktori);
            $string_query=rtrim($isi_file, "\n;" );
            $array_query=explode(";", $string_query);

            foreach($array_query as $query){
            $this->db->query($query);
            }

            $data['page']='restore';
            $this->session->set_flashdata('success', 'Data Berhasil DiRestore');
            $this->load->view('data/restore',$data);
            }
      
}

?>
<?php
  defined('BASEPATH') OR exit ('No direct script access allowed');

  class Input extends CI_Controller{
  
    public function __construct(){
      parent::__construct();
      
     $this->load->model("Perhitungan_model");
    $this->load->library('form_validation');
  }
    public function index(){
      $model = $this->Perhitungan_model;
      $data["NilaiDefault"] = $this->Perhitungan_model->nilaiDefault();
     
      $data["Alternatif"] = $this->Perhitungan_model->getAlternatif();
      $data["Kriteria"] = $this->Perhitungan_model->getKriteria();
      $data["ModelView"] = $this->Perhitungan_model;
      $this->load->view("Perhitungan/list",$data);
       }
  public function SaveDom($id){
    $id = $this->input->post("id_Kriteria");
    if(!isset($id)) show_404();
    if($this->Perhitungan_model->SaveDom($id)){
        redirect(site_url('Perhitungan/Input"'));
    }
   }
}

?>
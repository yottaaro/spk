<?php
  defined('BASEPATH') OR exit ('No direct script access allowed');

  class SubKriteria extends CI_Controller{
  
    public function __construct(){
      parent::__construct();
      
     $this->load->model("SubKriteria_model");
    $this->load->library('form_validation');
  }

    public function index(){
     
      $model = $this->SubKriteria_model;
      $validation = $this->form_validation;
      $validation->set_rules($model->rules());
      
      if($validation->run()){
        if ($this->input->post('id_sub')) {
          $model->edit();
          $this->session->set_flashdata('successSubKriteria', 'Data Berhasil Di Edit');
          redirect(site_url('master/SubKriteria'));
        } else{
          $model->save();
          
          $this->session->set_flashdata('successSubKriteria', 'Data Berhasil Disimpan');
          redirect(site_url('master/SubKriteria'));
        }
          
      }
      
      $data["SubKriteria"] = $this->SubKriteria_model->getAll();
      $data["Kriteria"] = $this->SubKriteria_model->getAll_kriteria();
      $this->load->view("master/SubKriteria/list",$data);
       }


  
  public function delete($id){
    $id = $this->input->post("id");
    if(!isset($id)) show_404();
    if($this->SubKriteria_model->delete($id)){
        redirect(site_url('master/SubKriteria'));
    }
   }

}

?>
<?php
  defined('BASEPATH') OR exit ('No direct script access allowed');

  class Pengguna extends CI_Controller{
  
    public function __construct(){
      parent::__construct();
      
     $this->load->model("Pengguna_model");
    $this->load->library('form_validation');
  }

    public function index(){
     
      $model = $this->Pengguna_model;
      $validation = $this->form_validation;
      $validation->set_rules($model->rules());
      
      if($validation->run()){
        if ($this->input->post('id_Pengguna')) {
          $model->edit();
          $this->session->set_flashdata('successPengguna', 'Data Berhasil Di Edit');
          redirect(site_url('master/Pengguna'));
        } else{
          $model->save();
          
          $this->session->set_flashdata('successPengguna', 'Data Berhasil Disimpan');
          redirect(site_url('master/Pengguna'));
        }
          
      }
      
      $data["Pengguna"] = $this->Pengguna_model->getAll();
     
      $this->load->view("master/Pengguna/list",$data);
       }


  
  public function delete($id){
    $id = $this->input->post("id");
    if(!isset($id)) show_404();
    if($this->Pengguna_model->delete($id)){
        redirect(site_url('master/Pengguna'));
    }
   }

}

?>
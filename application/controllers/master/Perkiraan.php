<?php
  defined('BASEPATH') OR exit ('No direct script access allowed');

  class Perkiraan extends CI_Controller{
  
    public function __construct(){
      parent::__construct();
      
     $this->load->model("perkiraan_model");
    $this->load->library('form_validation');
  }

    public function index(){
     
      $model = $this->perkiraan_model;
      $validation = $this->form_validation;
      $validation->set_rules($model->rules());
      
      if($validation->run()){
        if ($this->input->post('upnoref')) {
          $model->edit();
          $this->session->set_flashdata('successperkiraan', 'Data Berhasil Di Edit');
        } else{
          $model->save();
          
          $this->session->set_flashdata('successperkiraan', 'Data Berhasil Disimpan');
          redirect(site_url('master/perkiraan'));
        }
          
      }
      
      $data["perkiraan"] = $this->perkiraan_model->getAll();
      
      $this->load->view("master/perkiraan/list",$data);
       }


  
  public function delete($id){
    $id = $this->input->post("id");
    if(!isset($id)) show_404();
    if($this->perkiraan_model->delete($id)){
        redirect(site_url('master/perkiraan'));
    }
   }

}

?>
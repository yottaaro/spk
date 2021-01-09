<?php
  defined('BASEPATH') OR exit ('No direct script access allowed');

  class Kriteria extends CI_Controller{
  
    public function __construct(){
      parent::__construct();
     
     $this->load->model("Kriteria_model");
    $this->load->library('form_validation');
  }

    public function index(){
     
      $model = $this->Kriteria_model;
      $validation = $this->form_validation;
      $validation->set_rules($model->rules());
     
        $data["Kriteria"] = $this->Kriteria_model->getAll();
      
      if($validation->run()){
          $model->save();
          $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
        }

      $this->load->view("master/Kriteria/list",$data);
       }

       public function edit($id = null){

        if(!isset($id)) redirect('master/Kriteria');
        $model = $this->Kriteria_model;
        $validation = $this->form_validation;
        $validation->set_rules($model->rules());
        
        if($validation->run()){
            $model->edit();
            $this->session->set_flashdata('success', 'Data Kriteria Berhasil Diedit');
            redirect(site_url('master/Kriteria/edit/'.$id));
        }
        $data['dataedit'] = $model->getByid($id);
  
        if(!$data['dataedit']) show_404();
        $this->load->view("master/Kriteria/edit",$data);
    }
    public function tambah(){
    
        $model = $this->Kriteria_model;
        $validation = $this->form_validation;
        $validation->set_rules($model->rules());
        
        if($validation->run()){
            $model->save();
            $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
            redirect(site_url('master/Kriteria'));
        }
        
        $this->load->view("master/Kriteria/add");
      }
  
  public function delete($id){
    $id = $this->input->post("id");
    if(!isset($id)) show_404();
    if($this->Kriteria_model->delete($id)){
        redirect(site_url('master/Kriteria'));
    }
   }
  

}

?>
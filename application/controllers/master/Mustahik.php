<?php
  defined('BASEPATH') OR exit ('No direct script access allowed');

  class Mustahik extends CI_Controller{
  
    public function __construct(){
      parent::__construct();
     
     $this->load->model("Mustahik_model");
    $this->load->library('form_validation');
  }

    public function index(){
     
      $model = $this->Mustahik_model;
      $validation = $this->form_validation;
      $validation->set_rules($model->rules());
     
        $data["Mustahik"] = $this->Mustahik_model->getAll();
      
      if($validation->run()){
          $model->save();
          $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
        }

      $this->load->view("master/Mustahik/list",$data);
       }

       public function edit($id = null){

        if(!isset($id)) redirect('master/Mustahik');
        $model = $this->Mustahik_model;
        $validation = $this->form_validation;
        $validation->set_rules($model->rules());
        
        if($validation->run()){
            $model->edit();
            $this->session->set_flashdata('success', 'Data Mustahik Berhasil Diedit');
            redirect(site_url('master/Mustahik/edit/'.$id));
        }
        $data['dataedit'] = $model->getByid($id);
  
        if(!$data['dataedit']) show_404();
        $this->load->view("master/Mustahik/edit",$data);
    }
    public function tambah(){
    
        $model = $this->Mustahik_model;
        $validation = $this->form_validation;
        $validation->set_rules($model->rules());
        
        if($validation->run()){
            $model->save();
            $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
            redirect(site_url('master/Mustahik'));
        }
        $data['kode'] = $model->getkode();
        $this->load->view("master/Mustahik/add",$data);
      }
  
  public function delete($id){
    $id = $this->input->post("id");
    if(!isset($id)) show_404();
    if($this->Mustahik_model->delete($id)){
        redirect(site_url('master/Mustahik'));
    }
   }
   public function cetak($id){
    $model = $this->Mustahik_model;
    if(!isset($id)) show_404();
    $data['dataedit'] = $model->getByid($id);
    $this->load->view("master/Mustahik/kartu",$data);
   }

}

?>
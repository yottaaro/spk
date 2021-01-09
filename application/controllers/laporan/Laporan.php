<?php
  defined('BASEPATH') OR exit ('No direct script access allowed');

  class Laporan extends CI_Controller{
  
    public function __construct(){
      parent::__construct();
      $this->load->model("Perhitungan_model");
    $this->load->library('form_validation');
  }

    public function index(){
     
        if($this->input->post('pilihan')){
           $pilihan = $this->input->post('pilihan');

            if ($pilihan == 'perhitungan') {
              $data["NilaiDefault"] = $this->Perhitungan_model->nilaiDefault();
              $data["HitungDefault"] =$this->Perhitungan_model->HitungDefault(); 
              $data["Alternatif"] = $this->Perhitungan_model->getAlternatif();
              $data["Kriteria"] = $this->Perhitungan_model->getKriteria();
              $data["Ranking"] = $this->Perhitungan_model->getRanking();
              $data["Rankingbefore"] = $this->Perhitungan_model->getRankingbefore();
              $data["ModelView"] = $this->Perhitungan_model;
                $this->load->view("laporan/lap_perhitungan",$data);
            }
     

       }else {
        $this->load->view("laporan/pilih");
      }
    }
  }
?>
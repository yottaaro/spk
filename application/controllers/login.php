<?php
  defined('BASEPATH') OR exit ('No direct script access allowed');

  class login extends CI_Controller{
 
    function __construct(){
      parent::__construct();		
      $this->load->model('m_login');
   
    }
   
    function index(){
      $this->load->view('v_login');
    }
   
    function aksi_login(){
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $where = array(
        'username' => $username,
        'password' => $password
        );
      $cek = $this->m_login->cek_login("pengguna",$where)->row();
     
      if($cek){
        $jabatan = $cek->hakakses;
        $nama = $cek->nama_Pengguna;
        $idpetugas= $cek->id_Pengguna;
      
        $data_session = array(
          'nama' => $nama,
          'idpetugas' => $idpetugas,
          'status' => "login",
          'jabatan'=> "$jabatan"
          );
   
        $this->session->set_userdata($data_session);
        echo "<script>Welcome $data->nama_Pengguna !</script>";
        redirect(base_url("dashboard"));
      }
      else {
        echo "<script>Username dan password salah !</script>";
        redirect(base_url('login'));
      }
    }

    function logout(){
      $this->session->sess_destroy();
      redirect(base_url('login'));
    }

  }
  

?>
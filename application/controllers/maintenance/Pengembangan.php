<?php
  defined('BASEPATH') OR exit ('No direct script access allowed');

  class Pengembangan extends CI_Controller{
  
    public function __construct(){
      parent::__construct();
     
  }

    public function index(){
     
      $this->load->view("maintenance/pengembangan");
       }


  
  

}

?>
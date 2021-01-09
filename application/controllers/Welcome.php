<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();		
		$this->load->model('dashboard_model');
	 
	  }

	public function index()
	{
		if($this->session->userdata('status') != "login"){
			redirect(site_url("login"));
		}
		$data["Alternatif"] = $this->dashboard_model->jumlahmustahik();
		
		$data["Kriteria"] = $this->dashboard_model->jumlahmustahik();
		
		$data["SubKriteria"] = $this->dashboard_model->jumlahsubkriteria();
			$this->load->view('master/overview',$data);
		   }

		
	}

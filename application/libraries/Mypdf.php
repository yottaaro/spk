<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once ("assets/dompdf/autoload.inc.php");
use Dompdf\Dompdf;
		
//		$pdf = new DOMPDF();
//		$CI =& get_instance();
//		$CI->dompdf = $pdf;
class Mypdf {
	protected $ci;
		
	public function __construct() {
		$this->ci =& get_instance();
	}

	public function generate($view , $data=array(), $filename = 'Laporan', $paper = 'A4' , $orientation = 'portrait'){
		$dompdf = new Dompdf();
		$html = $this->ci->load->view($view,$data,true);
		$dompdf->loadHtml($html);
		$dompdf->setPaper($paper, $orientation);
		$dompdf->render();
   		$dompdf->stream($filename . ".pdf", array("Attachment" => FALSE));

	}
	
}
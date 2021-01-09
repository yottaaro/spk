<?php
  defined('BASEPATH') OR exit ('No direct script access allowed');

  class backup extends CI_Controller{
  
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('file');
        $this->load->helper('download');
        $this->load->library('zip');
    }

    public function index(){
        $this->load->view("data/backup");
          }
    public function backup(){
       
    
                $prefss = array(
                'tables'        => array('alternatif', 'tbl_kriteria', 'sub_kriteria', 'tbl_evaluasi','nilai', 'pengguna'),   // Array of tables to backup.
                'ignore'        => array(),                     // List of tables to omit from the backup
                'format'        => 'zip',                       // gzip, zip, txt
                'filename'      => 'db-spk-zakat.sql',              // File name - NEEDED ONLY WITH ZIP FILES
                'add_drop'      => TRUE,                        // Whether to add DROP TABLE statements to backup file
                'add_insert'    => TRUE,                        // Whether to add INSERT data to backup file
                'newline'       => "\n"                         // Newline character used in backup file
                );
                $this->load->dbutil();
        $backup=& $this->dbutil->backup($prefss);
        $dbname='backup-on-'.date('Y-m-d').'.zip';
        $save='assets/database/'.$dbname;
        write_file($save,$backup);
        force_download($dbname,$backup);
        
    }
}

?>
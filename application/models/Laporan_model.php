<?php defined ('BASEPATH') OR exit(' No Direct Script access allowed');

class Laporan_model extends CI_model{
    private $_table = "transaksi";
    private $_table1 = "transaksi";
    private $_table2 = "transaksi";
    private $_table3 = "transaksi";
  
    public function gettransaksi(){
        $tanggal0 = $this->input->post('tanggal0');
        $tanggal1 = $this->input->post('tanggal1');
        
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('pasien','pasien.kd_pasien=transaksi.kdpasien');
        
        $this->db->where("status = '2' and tgl BETWEEN '$tanggal0' AND '$tanggal1'; ");
        $query = $this->db->get();
        return $query->result();
    }

    public function getpembelian(){
        $tanggal0 = $this->input->post('tanggal0');
        $tanggal1 = $this->input->post('tanggal1');
        
        $this->db->select('*');
        $this->db->from('pembelian');
        $this->db->join('suplier','suplier.kd_suplier=pembelian.suplier');
       
        $this->db->where("tgl BETWEEN '$tanggal0' AND '$tanggal1'; ");
        $query = $this->db->get();
        return $query->result();
    }
    public function getpenggajian(){
        $tanggal0 = $this->input->post('tanggal0');
        $tanggal1 = $this->input->post('tanggal1');
        
        $this->db->select('*');
        $this->db->from('tblgajikaryawan');
        $this->db->join('petugas','petugas.kd_petugas=tblgajikaryawan.idpetugas');
       
        $this->db->where("tgl BETWEEN '$tanggal0' AND '$tanggal1'; ");
        $query = $this->db->get();
        return $query->result();
    }
    public function getbeban(){
        $tanggal0 = $this->input->post('tanggal0');
        $tanggal1 = $this->input->post('tanggal1');
        
        $this->db->select('*');
        $this->db->from('pembayaranbeban');
        
        $this->db->where("tgl BETWEEN '$tanggal0' AND '$tanggal1'; ");
        $query = $this->db->get();
        return $query->result();
    }
  
    public function getjurnal(){
        $tanggal0 = $this->input->post('tanggal0');
        $tanggal1 = $this->input->post('tanggal1');
        
        $this->db->select('*');
        $this->db->from('jurnalumum');
       
        $this->db->where("tgl BETWEEN '$tanggal0' AND '$tanggal1'; ");
        $query = $this->db->get();
        return $query->result();
    }
    public function getpendapatan(){
        $tanggal0 = $this->input->post('tanggal0');
        $tanggal1 = $this->input->post('tanggal1');
        
        $this->db->select('SUM(hargaperiksa+hargaobat) as hasil');
        $this->db->from('transaksi');
       
        $this->db->where("tgl BETWEEN '$tanggal0' AND '$tanggal1'; ");
        $query = $this->db->get();
        
        return $query->result();
    }
    public function getpengeluaran(){
        $tanggal0 = $this->input->post('tanggal0');
        $tanggal1 = $this->input->post('tanggal1');
       
        $this->db->select('SUM(total) as hasil');
        $this->db->from('pembelian');
       
        $this->db->where("tgl BETWEEN '$tanggal0' AND '$tanggal1'; ");
        $query = $this->db->get();
        
        return $query->result();
    }
    public function getbebanku(){
        $tanggal0 = $this->input->post('tanggal0');
        $tanggal1 = $this->input->post('tanggal1');
       // Select SUM(`biaya`) as hasil from pembayaranbeban
        $this->db->select('SUM(biaya) as hasil');
        $this->db->from('pembayaranbeban');
       
        $this->db->where("tgl BETWEEN '$tanggal0' AND '$tanggal1'; ");
        $query = $this->db->get();
        
        return $query->result();
    }
    public function getgaji(){
        $tanggal0 = $this->input->post('tanggal0');
        $tanggal1 = $this->input->post('tanggal1');
       // Select SUM(`biaya`) as hasil from Select SUM(`total`) as hasil from tblgajikaryawan
        $this->db->select('SUM(total) as hasil');
        $this->db->from('tblgajikaryawan');
       
        $this->db->where("tgl BETWEEN '$tanggal0' AND '$tanggal1'; ");
        $query = $this->db->get();
        
        return $query->result();
    }
}
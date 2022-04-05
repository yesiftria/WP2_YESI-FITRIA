<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan1 extends CI_Controller {

    public function index()
    {
        echo "Selamat Datang...Selamat Belajar Web Progaming";
    }

    public function penjumlahan($n1, $n2){
    
        $this->load->model('M_Latihan1');
        //$hasil=$this->M_Latihan1->jumlah($n1,$n2);

        //echo "Hasil penjumlahan dari ". $n1 ." + " . $n2 ." = ". $hasil;
        
        $data['nilai1'] = $n1;        
        $data['nilai2'] = $n2;         
        $data['hasil'] = $this->M_Latihan1->jumlah($n1, $n2); 

        $this->load->view('V_latihan1', $data);
    }

}

/* End of file Controllername.php */

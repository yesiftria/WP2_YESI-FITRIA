<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Latihan1 extends CI_Model {

    public $nilai1;
    public $nilai2;
    public $hasil;

    public function jumlah($n1 = null, $n2 = nul){
        $this->nilai1=$n1;
        $this->nilai2=$n2;
        $this->hasil=$this->nilai1 + $this->nilai2;

        return $this->hasil;
    }
}

/* End of file M_Latihan1.php */

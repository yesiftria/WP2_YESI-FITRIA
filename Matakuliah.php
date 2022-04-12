<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

    public function __construct()
    {
        parent::__construct(); 

        $this->load->library('form_validation');
    }


    public function index(){
        $this->load->view('Matakuliah/form');
    }

    public function cetak(){

        $this->form_validation->set_rules('kode','kode','required',
                                        [
                                            'required'=> "field %s wajib di isi"

                                        ]);
        $this->form_validation->set_rules('nama','Nama','required',
                                        [
                                            'required'=> "field %s wajib di isi"

                                        ]);
        $this->form_validation->set_rules('sks','SKS','required',
                                        [
                                            'required'=> "field %s wajib di isi"

                                        ]);

        if($this->form_validation->run() == false){
            $this->load->view('Matakuliah/form');
        }else{
            $data = array(
                'kode'=> $this->input->post('kode'),
                'nama'=> $this->input->post('nama'),
                'sks'=> $this->input->post('sks'),  
            );
            $this->load->view('Matakuliah/cetak', $data);
        }
        
    }
}

/* End of file Controllername.php */

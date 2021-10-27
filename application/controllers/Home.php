<?php

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('halaman_utama');
    }

    public function kirim_data()
    {
       $data=[
        'nama'=>$this->input->post('txtnama'),
        'alamat'=>$this->input->post('txtalamat'),
        'nohp'=>$this->input->post('txtnohp')
       ];

       $this->load->view('halaman_output',$data); 
    }

}
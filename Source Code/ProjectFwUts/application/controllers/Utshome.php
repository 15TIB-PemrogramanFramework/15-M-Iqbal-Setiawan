<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class utshome extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('barang_model');
        $this->load->model('komentar_model');
        $this->load->model('beli_model');
    }

    public function index()
    {
		$this->load->view('utshome');
        
    }



    public function order()
    {
        $this->load->view('utsorder');
    }

     public function status($username)
    {
        $data['data']=$this->beli_model->ambildatamember($username);
        $this->load->view('utsstatus',$data);
    }


    public function Ulist()
    {
        $data['barang'] = $this->barang_model->ambil_data();
        $this->load->view('utslist',$data);
    }


    public function contact()
    {
        $this->load->view('utscontact');
    }

    public function register()
    {
        $this->load->view('utsregister');
    }
    public function jual()
    {
        $this->load->view('utsjual');
    }
    public function login()
    {
        $this->load->view('utslogin');
    }
    public function barang($id)
    {
        $data =array(
            'barang'      => $this->barang_model->ambil_data_id($id),
            'komentar'    => $this->komentar_model->ambil_data_id($id)
            );
        $this->load->view('utsbarang',$data);
    }


}

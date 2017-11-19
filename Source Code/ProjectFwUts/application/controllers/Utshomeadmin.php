<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class utshomeadmin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
        $this->load->model('barang_model');
        $this->load->model('beli_model');
        $this->load->helper(array('url'));
    }

    public function index()
    {
		$this->load->view('utsadminhome');
        
    }


    public function member()
    {
        $data['member']=$this->member_model->ambildata();
        $this->load->view('utsadminmember',$data);

    }


    public function barang()
    {
        $data['barang'] = $this->barang_model->ambil_data();
        $this->load->view('utsadminbarang',$data);
        
    }
    public function beli()
    {
        $data['beli'] = $this->beli_model->ambildatapending();
        $data['beli1'] = $this->beli_model->ambildatacompleted();
        $this->load->view('utsadminbeli',$data);
        
    }


}

<?php 
class komentar extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
        $this->load->model('komentar_model');        
    }
    function tambahaksi(){
    	$data=array(
    		'kode_komentar' => $this->input->post('kode_komentar'),
    		'username' => $this->input->post('username'),
    		'id' => $this->input->post('id'),
    		'isi' => $this->input->post('isi')
    		);
    	$this->komentar_model->tambah_data($data);
    	redirect(site_url('index.php/utshome/barang/'.$this->input->post('id')));
    }
}
?>
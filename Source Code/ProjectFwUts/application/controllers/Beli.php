<?php 
class beli extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
        $this->load->model('barang_model');
        $this->load->model('member_model');
        $this->load->model('beli_model');
        
    }

    function tambah($namabarang){
    	$data= array(
    		'aksi'                  => site_url('index.php/beli/confirmtambah'),
            'kode_beli'              => set_value('kode_beli'),
            'username'            => $this->member_model->get_option(),
            'id'                 => $this->barang_model->get_option(),
            'jumlah'                  => set_value('jumlah'),
            'harga'                  => set_value('harga'),
            'status'                  => set_value('Pending'),
            'namabarang'			=> $namabarang,
            'button'                => 'Tambah'

    		);
    	$this->load->view('frombeli',$data);
    }

     function tambah1(){
    	$data= array(
    		'aksi'                  => site_url('index.php/beli/confirmtambah'),
            'kode_beli'              => set_value('kode_beli'),
            'username'            => $this->member_model->get_option(),
            'id'                 => $this->barang_model->get_option(),
            'jumlah'                  => set_value('jumlah'),
            'harga'                  => set_value('harga'),
            'status'                  => set_value('Pending'),
            'namabarang'			=> set_value('namabarang'),
            'button'                => 'Tambah'

    		);
    	$this->load->view('frombeli',$data);
    }

    function confirmtambah(){
    	$barang=$this->barang_model->ambil_data_id($this->input->post('namabarang'));
    	$harga=$barang->harga;
    	$jumlah=$this->input->post('jumlah');
    	$total=$harga * $jumlah;

    	$data= array(
    		'aksi'                  => site_url('index.php/beli/tambahaksi'),
            'kode_beli'              => $this->input->post('kode_beli'),
            'username'            => $this->input->post('username'),
            'id'                 => $this->input->post('namabarang'),
            'jumlah'                  => $jumlah,
            'harga'                  => $total,
            'status'				=> $this->input->post('status'),
            'button'                => 'Tambah'

    		);
    	$this->load->view('confirmbeli',$data);
    }
    function tambahaksi(){
    	$data=array(
    		'kode_beli' => $this->input->post('kode_beli'),
    		'username' => $this->input->post('username'),
    		'id' => $this->input->post('id'),
    		'jumlah'=> $this->input->post('jumlah'),
    		'harga'=> $this->input->post('harga'),
    		'status'=> $this->input->post('status')
    		);
    	$this->beli_model->tambah_data($data);
    	redirect(site_url('index.php/utshome/order'));
    }
    function delete($id)
    {
        $this->beli_model->hapus_data($id);
        redirect(site_url('index.php/utshomeadmin/beli'));
    }

     function update_aksi_completed($id,$jbeli,$jbarang,$idb)
    {
        $data = array(
            'status'         => 'Completed'
             );  
        
        $this->beli_model->edit_data($id,$data);
        $jbaru = $jbarang - $jbeli;
        $datab = array(
        	'stok'			=> $jbaru
        	);
        $this->barang_model->edit_data($idb,$datab);
        redirect(site_url('index.php/utshomeadmin/beli/'.$jbaru));
    }
    function update_aksi_pending($id,$jbeli,$jbarang,$idb)
    {
        $data = array(
            'status'         => 'Pending'
             );  
        
        $this->beli_model->edit_data($id,$data);

        $jbaru = $jbarang + $jbeli;
        $datab = array(
        	'stok'			=> $jbaru
        	);
        $this->barang_model->edit_data($idb,$datab);
        redirect(site_url('index.php/utshomeadmin/beli'));
    }

}
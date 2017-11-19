<?php 
class barang extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
        $this->load->model('barang_model');
    }

    function add(){
    	$data = array(
			'aksi' 				=> site_url('index.php/barang/addaction'),
			'idb' 				=> set_value('id'),
			'namab'				=> set_value('namabarang'),
			'hargab'		 	=> set_value('harga'),
			'stokb'		 		=> set_value('stok'),
			'button' 			=> 'Insert'
			);
		
    	$this->load->view("addbarang",$data);
    }

    function addaction(){
    	$this->load->library('upload');
        $nmfile = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data = array(
                'gambar' 				=>$gbr['file_name'],
                'id'			 		=> $this->input->post('id'),
				'namabarang' 			=> $this->input->post('nama'),
				'harga'			 		=> $this->input->post('harga'),
				'stok'			 		=> $this->input->post('stok')
                );
                $this->barang_model->tambah_data($data); //akses model untuk menyimpan ke database

                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Insert data berhasil !!</div></div>");
                redirect('index.php/utshomeadmin/barang'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect('index.php/barang/add'); //jika gagal maka akan ditampilkan form upload
            }
        }


		
    }

function delete($id)
    {
        $this->barang_model->hapus_data($id);
        redirect(site_url('index.php/utshomeadmin/barang'));
    }


function update($id)
    {
        $barang = $this->barang_model->ambil_data_id($id);
        $data = array(
            'aksi'                  => site_url('index.php/barang/update_aksi'),
            'id'                    => set_value('id',$barang->id),
            'namabarang'            => set_value('namabarang',$barang->namabarang),
            'harga'                 => set_value('harga',$barang->harga),
            'stok'                  => set_value('stok',$barang->stok),
            'button'                => 'Update'
            );
        $this->load->view('updatebarang_form',$data);      
    }

    function update_aksi()
    {
        $data = array(
            'id'         => $this->input->post('id'),
            'namabarang'         => $this->input->post('nama'),
            'harga'         => $this->input->post('harga'),
            'stok'       => $this->input->post('stok')
             );  
        $id = $this->input->post('id');
        $this->barang_model->edit_data($id,$data);
        redirect(site_url('index.php/utshomeadmin/barang'));
    }
}
 ?>
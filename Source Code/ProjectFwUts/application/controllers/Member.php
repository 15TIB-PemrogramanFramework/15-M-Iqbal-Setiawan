<?php 
class member extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
    }

    function register(){
    	

    	$data=array(
    		'username' => $this->input->post('username'),
    		'password' => $this->input->post('pass'),
    		'nama' => $this->input->post('name'),
    		'jk' => $this->input->post('jk'),
    		'nohp'=> $this->input->post('nohp'),
    		'alamat'=> $this->input->post('alamat')
    		);
    	$this->member_model->regis($data);
    	redirect(site_url('index.php/Login'));
    }

    function delete($id)
    {
        $this->member_model->hapus_data($id);
        redirect(site_url('index.php/utshomeadmin/member'));
    }

    function update($id)
    {
        $member = $this->member_model->ambil_data_id($id);
        $data = array(
            'aksi'                  => site_url('index.php/member/update_aksi'),
            'username'                    => set_value('username',$member->username),
            'password'            => set_value('password',$member->password),
            'nama'                 => set_value('nama',$member->nama),
            'jk'                  => set_value('jk',$member->jk),
            'nohp'                  => set_value('nohp',$member->nohp),
            'alamat'                  => set_value('alamat',$member->alamat),
            'button'                => 'Update'
            );
        $this->load->view('updatemember_form',$data);      
    }

    function update_aksi()
    {
        $data = array(
            'username'         => $this->input->post('username'),
            'password'         => $this->input->post('password'),
            'nama'         => $this->input->post('nama'),
            'jk'       => $this->input->post('jk'),
            'nohp'       => $this->input->post('nohp'),
            'alamat'       => $this->input->post('alamat')            
             );  
        $id = $this->input->post('username');
        $this->member_model->edit_data($id,$data);
        redirect(site_url('index.php/utshomeadmin/member'));
    }

}
 ?>
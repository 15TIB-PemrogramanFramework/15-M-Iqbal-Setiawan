<?php 
/**
* 
*/
class admin_model extends CI_Model
{
	public $nama_table='admin';
	public $username='username';
	public $order='ASC';
	
	function __construct()
	{
		parent::__construct();
	}

	function checkAdmin($username,$pass)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$pass);
		return $this->db->get($this->nama_table)->row();

	}

}
 ?>
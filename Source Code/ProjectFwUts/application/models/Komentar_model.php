<?php 
class komentar_model extends CI_Model
{

	public $namatable		= 'komentar';
	public $id				= 'id';
	public $order			= 'ASC';

	function __construct()
	{
		parent::__construct();
	}
	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->namatable)->result();
	}
	function tambah_data($data)//array
	{
		return $this->db->insert($this->namatable,$data);
	}
}
 ?>
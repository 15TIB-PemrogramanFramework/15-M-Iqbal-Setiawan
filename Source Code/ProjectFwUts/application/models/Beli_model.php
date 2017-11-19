<?php 
class beli_model extends CI_Model
{

	public $namatable		= 'beli';
	public $id				= 'kode_beli';
	public $order			= 'DESC';
	public $status			= 'status';

	function __construct()
	{
		parent::__construct();
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->namatable,$data);
	}

	function ambildatapending(){
		$this->db->order_by($this->id,$this->order);
		$this->db->where($this->status,'Pending');
		return $this->db->get($this->namatable)->result();
	}
	function ambildatacompleted(){
		$this->db->order_by($this->id,$this->order);
		$this->db->where($this->status,'Completed');
		return $this->db->get($this->namatable)->result();
	}
	function ambildatamember($username){
		$this->db->where('username',$username);
		return $this->db->get($this->namatable)->result();
	}
	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->namatable);
	}
	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->namatable,$data);
	}
}
?>
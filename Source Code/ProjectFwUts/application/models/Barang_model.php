<?php 
/**
* 
*/
class barang_model extends CI_Model
{

	public $namatable		= 'barang';
	public $id				= 'id';
	public $order			= 'ASC';

	function __construct()
	{
		parent::__construct();
	}


	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->namatable)->result();//banyak data
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->namatable,$data);
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

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->namatable)->row();
	}
	function get_option(){
		$this->db->select('*');
		$this->db->from('barang');
		$query= $this->db->get();
		return $query->result();
	}

}
 ?>
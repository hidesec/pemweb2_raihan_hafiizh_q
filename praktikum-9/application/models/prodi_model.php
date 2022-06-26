<?php
Class Prodi_model extends CI_Model {
	public $kode;
	public $nama;
	public $kaprodi;

	public function get_prodi(){
		$this->db->select('*');
		$this->db->from('prodi');
		$query = $this->db->get();
		if($query->num_rows() !== 0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}
}
